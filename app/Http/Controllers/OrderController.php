<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Models\Product;
use App\Models\Customer;
use App\Models\LandingPageOrder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = $this->orderService->getAllOrders();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        
        $products = Product::all();
        //$products = Product::select('id', 'name', 'description', 'product_value')->get();
        $customers = Customer::all();

        return view('orders.create', compact('products', 'customers'));
    }

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|exists:customers,id',
            'mobile_number' => 'required|string',
            'area' => 'required|string',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.unit_price' => 'required|numeric|min:0',
            'products.*.product_color' => 'nullable|string',
            'products.*.product_size' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $this->orderService->createOrder($request);
        Helper::storeLog("Order created successfully", "Order", "Create Order", null,null);
        return redirect()->route('orders-index')->with('success', 'Order created successfully.');
    }

    public function show_backup($id)
    {
        $order = $this->orderService->getOrder($id);
        return view('orders.show', compact('order'));
    }

    public function show($id)
    {
        $data = $this->orderService->getOrder($id);
        return view('orders.show', [
            'order' => $data['order'],
            'order_id' => $id,
            'orderDetails' => $data['orderDetails'],
        ]);
    }


    public function edit($id)
    {
        $order = $this->orderService->getOrder($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $this->orderService->updateOrder($id, $request);
        return redirect()->back()->with('success', 'Order updated successfully!');
    }

    public function destroy($id)
    {
        $this->orderService->deleteOrder($id);
        return redirect()->route('orders-index')->with('success', 'Order deleted successfully!');
    }

    // searech for invoice

    public function search(Request $request)
    {
        $searchTerm = trim($request->input('search'));
        if (empty($searchTerm)) {
            return redirect()->route('orders-index')->with('error', 'Search field cannot be blank.');
        }
        $orders = $this->orderService->searchOrders($request);
        return view('orders.index', compact('orders'));
    }

    // landing page order
    public function landing_order_index()
    {
        $orders = LandingPageOrder::join('products', 'landing_page_orders.product_id', '=', 'products.id')
            ->select('landing_page_orders.id as lukaku', 'landing_page_orders.*', 'products.*')
            ->where('order_status', '!=', 'DELETED')    
            ->orderBy('landing_page_orders.id', 'desc')
            ->paginate(config('constants.ROW_PER_PAGE'));

        return view('orders.landing_index', compact('orders'));
    }

    public function landing_destroy($id)
    {
        $order = LandingPageOrder::findOrFail($id);
        $order->order_status = "DELETED";
        $order->save();
        return redirect()->route('landing-orders-index')->with('success', 'Order deleted successfully!');
    }

    public function landing_search(Request $request)
    {
        $searchTerm = trim($request->input('search'));
        if (empty($searchTerm)) {
            return redirect()->route('landing-orders-index')->with('error', 'Search field cannot be blank.');
        }

        $searchTerm = trim($request->input('search'));

        $orders = LandingPageOrder::join('products', 'landing_page_orders.product_id', '=', 'products.id')
            ->select('landing_page_orders.id as lukaku', 'landing_page_orders.*', 'products.*')
            ->where('order_status', '!=', 'DELETED')
            ->where(function($query) use ($searchTerm) {
                $query->orWhere('landing_page_orders.full_name', 'LIKE', "%$searchTerm%")
                      ->orWhere('landing_page_orders.billing_address', 'LIKE', "%$searchTerm%")
                      ->orWhere('landing_page_orders.custom_order_id', 'LIKE', "%$searchTerm%")
                      ->orWhere('landing_page_orders.order_phone_number', 'LIKE', "%$searchTerm%");
            })
            ->orderBy('landing_page_orders.id', 'desc')
            ->paginate(config('constants.ROW_PER_PAGE'));
        // dd($searchTerm);
        return view('orders.landing_index', compact('orders'));
    }

    public function landing_edit($id)
    {
        $order = LandingPageOrder::join('products', 'landing_page_orders.product_id', '=', 'products.id')
            ->select('landing_page_orders.id as lukaku', 'landing_page_orders.*', 'products.*')
            ->where('landing_page_orders.id', $id)
            ->where('landing_page_orders.order_status', '!=', 'DELETED')
            ->orderBy('landing_page_orders.id', 'desc')
            ->paginate(config('constants.ROW_PER_PAGE'));
        return view('orders.landing_edit', compact('order'));
    }

    public function landing_update(Request $request, $id)
    {
        $order = LandingPageOrder::findOrFail($id);
        $order->payment_status = $request->payment_status;
        $order->payment_type = $request->payment_type;
        $order->pay_amount = $request->pay_amount;
        $order->delivery_note = $request->delivery_note;
        $order->order_status = $request->order_status;
        $order->cancel_reason = $request->cancel_reason;
        $order->delivery_status = $request->delivery_status;
        $order->delivery_date = $request->delivery_date;
        $order->cancel_date = $request->cancel_date;
        $order->update();

        return redirect()->back()->with('success', 'Order updated successfully!');
    }

    public function landing_order_show($id)
    {
        $order = LandingPageOrder::join('products', 'landing_page_orders.product_id', '=', 'products.id')
            ->select('landing_page_orders.id as lukaku', 'landing_page_orders.*', 'products.*')
            ->where('landing_page_orders.id', $id)
            ->where('landing_page_orders.order_status', '!=', 'DELETED')
            ->orderBy('landing_page_orders.id', 'desc')
            ->first();
        // dd($order);
        return view('orders.landing_show', [
            'order' => $order,
            'order_id' => $id
        ]);
    }

    
}
