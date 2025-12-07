<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Category;
use App\Models\Brand;
use App\Models\UnitDetail;

class ProductController extends Controller {

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
        $this->middleware('auth');
    }

    public function productList(Request $request)
    {
        $products = $this->productService->productList($request);
        return view('products.product-list', compact('products'));
    }

    public function product_stock_report(Request $request)
    {
        $products = $this->productService->product_stock($request);
        return view('products.product-list', compact('products'));
    }

    public function productCreate()
    {
        $categories = Category::where('status', 1)->get(['id', 'category_name']);
        $brands = Brand::where('status', 1)->get(['id', 'brand_name']);
        $units = UnitDetail::pluck('unit_name', 'unit_code');
        return view('products.create', compact('categories', 'brands', 'units'));
    }

    public function productStore(Request $request)
    {
        $result = $this->productService->productStore($request);
        if($result->status == 201){
            return redirect()->route('product-list')->with('success', 'Product added successfully.');

        }else{
            session()->flash('error', 'Can not Add!');
        }

    }

    public function productShow($id)
    {
        $product = $this->productService->getProductById($id);
        return view('products.product-show', compact('product'));
    }

    public function productEdit($id)
    {
        $categories = Category::where('status', 1)->get(['id', 'category_name']);
        $brands = Brand::where('status', 1)->get(['id', 'brand_name']);
        $units = UnitDetail::pluck('unit_name', 'unit_code');
        $product = $this->productService->getProductById($id);
        $unit_values = json_decode($product->unit_wise_price, true);

        return view('products.edit', compact('product', 'categories', 'brands', 'units', 'unit_values'));
    }

    public function productUpdate(Request $request, $id)
    {
        $result = $this->productService->productUpdate($request, $id);
        if($result->status == 208){
            return redirect()->route('product-list')->with('success', 'Product updated successfully.');

        }else{
            session()->flash('error', 'Can not Update!');
        }

    }


    public function productDelete($id)
    {
        $result = $this->productService->productDelete($id);
        if($result->status == 200){
            return redirect()->route('product-list')->with('success', 'Product deleted successfully.');

        }else{
            session()->flash('error', 'Can not Delete !');
        }
    }

    public function landing_productList(Request $request)
    {
        $products = $this->productService->landing_productList($request);
        return view('products.landing-product-list', compact('products'));
    }

    public function landing_productCreate()
    {
        $categories = Category::where('status', 1)->get(['id', 'category_name']);
        $brands = Brand::where('status', 1)->get(['id', 'brand_name']);
        $units = UnitDetail::pluck('unit_name', 'unit_code');
        return view('products.landing-create', compact('categories', 'brands', 'units'));
    }

    public function landing_productStore(Request $request)
    {
        $result = $this->productService->landing_productStore($request);
        if($result->status == 201){
            return redirect()->route('landing-product-list')->with('success', 'Landing page created successfully.');
        }else{
            session()->flash('error', 'Can not Add!');
        }
    }

    public function landing_productShow($id)
    {
        $product = $this->productService->getProductById($id);
        return view('products.landing-product-show', compact('product'));
    }

    public function landing_productEdit($id)
    {
        $categories = Category::where('status', 1)->get(['id', 'category_name']);
        $brands = Brand::where('status', 1)->get(['id', 'brand_name']);
        $units = UnitDetail::pluck('unit_name', 'unit_code');
        $product = $this->productService->landing_getProductById($id);
        $unit_values = json_decode($product->unit_wise_price, true);

        return view('products.landing-edit', compact('product', 'categories', 'brands', 'units', 'unit_values'));
    }

    public function landing_productUpdate(Request $request, $id)
    {
        $result = $this->productService->landing_productUpdate($request, $id);
        if($result->status == 208){
            return redirect()->route('landing-product-list')->with('success', 'Page updated successfully.');

        }else{
            session()->flash('error', 'Can not Update!');
        }

    }


    public function landing_productDelete($id)
    {
        $result = $this->productService->productDelete($id);
        if($result->status == 200){
            return redirect()->route('landing-product-list')->with('success', 'Landing page deleted successfully.');

        }else{
            session()->flash('error', 'Can not Delete !');
        }
    }

}