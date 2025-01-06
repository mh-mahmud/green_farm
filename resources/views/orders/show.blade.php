@extends('layouts.master')
@php
    use Carbon\Carbon;
@endphp

@section('content')

    <!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> -->

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                 data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Agent Details
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Show Agent Details</small>
                    <!--end::Description--></h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">

                <a href="{{ route('orders-index') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Order
                    List</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--**********************************
                             Tables View
    ***********************************-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-8 mx-auto">
                <!-- <div class="card mb-5"> -->
                <div class="card mt-4">
                    <div class="card-header bg-light bd-cyan">
                        <div class="card-title">
                            <h2>Order Details</h2>
                        </div>
                    </div>
                    <!--begin::Body-->
                    <div class="card-body p-1">

                    <div class="row">
                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Order No</span><span>{{ $order->custom_order_id }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Order Phone</span><span>{{ $order->order_phone_number }}</span>
                        </div></div>
                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Total Price</span><span>{{ $order->total_price }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Discount</span><span>{{ $order->discount }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Final Price</span><span>{{ $order->final_price }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Coupon</span><span>{{ $order->coupon }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Payment Status</span><span>{{ $order->payment_status }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Pay Amount</span><span>{{ $order->pay_amount }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Order Note</span><span>{{ $order->order_note }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Order Status</span><span>{{ $order->order_status }}</span>
                        </div></div>

                        <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Cancel Reason</span><span>{{ $order->cancel_reason }}</span>
                        </div></div>


                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Possible Delivery Date</span><span>{{ $order->possible_delivery_date }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Delivery Date</span><span>{{ $order->delivery_date }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Cancel date</span><span>{{ $order->cancel_date }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Order Date</span><span>{{ $order->created_at }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Client Name</span><span>{{ $order->first_name . ' ' . $order->last_name }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Company Name</span><span>{{ $order->company_name }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Client Email</span><span>{{ $order->email }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Mobile</span>
                            <span>{{ $order->mobile }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">City</span>
                            <span>{{ $order->city }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">State</span>
                            <span>{{ $order->state }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Zip</span>
                            <span>{{ $order->zip }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Address</span>
                            <span>{{ $order->shipping_address }}</span>
                        </div></div>

                        <div class="col-md-6"><div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Address 2</span>
                            <span>{{ $order->shipping_address_2 }}</span>
                        </div></div>


                    </div>

                    </div>

                    <!-- table -->
                    <div class="card-header bg-light" style="background-color:#ddd !important;">
                        <div class="card-title">
                            <h4>Product Details</h4>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th>Code</th>
                                    <th>Qty</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderDetails as $key => $detail)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $detail->product->name }}</td>
                                    <td style="border:1px solid #ddd;width:100px;"><img style="width: 100%;" src="{{ asset('uploads/products/' . $detail->product->img_path) }}"></td>
                                    <td>{{ $detail->product->product_code }}</td>
                                    <td>{{ $detail->quantity }}</td>
                                    <td>{{ $detail->unit_price }}</td>
                                    <td>{{ $detail->quantity * $detail->unit_price }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="text-end fw-bold">Sub Total</td>
                                    <td>{{ $order->final_price }}</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end fw-bold">Discount (%)</td>
                                    <td>{{ number_format($order->discount, 1) }}%</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end fw-bold">Delivery Charge</td>
                                    <td>{{ $order->delivery_charge }}</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end fw-bold">Payable Amount</td>
                                    <td>{{ $order->final_price }}/-</td>
                                </tr>
                                <!-- <tr>
                                    <td colspan="6" class="text-end fw-bold text-primary">Due Amount</td>
                                    <td class="text-primary">{{ $order->due_amount }}</td>
                                </tr> -->
                            </tfoot>
                        </table>
                    </div>
                    <!-- end table -->


                </div>

            </div>
        </div>
    </div>


    <!-- End Tables View-->


    <!-- </div> -->
    <!--end::Content-->

@endsection
