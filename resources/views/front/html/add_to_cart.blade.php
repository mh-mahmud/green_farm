@extends('front.html.master')
@section('content')

	<div class="free">
      <!-- breadcrumb-area -->
      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="{{url('/')}}/assets/theme/assets/img/banner/breadcrumb-01.jpg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <div class="tp-breadcrumb__link mb-10">
                        <span class="breadcrumb-item-active"><a href="{{ route('index') }}">Home</a></span>
                        <span>Cart</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Product Cart</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- cart area -->
      <section class="cart-area pt-80 pb-80 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
         <div class="row">
            <div class="col-12">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

                  <form action="#">
                     <div class="table-content table-responsive">
                        <table class="table">
                              <thead>
                                 <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Name</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 @php
                                    $total = [];
                                 @endphp
                                 @foreach($carts as $cart)
                                 <tr>
                                    <td class="product-thumbnail">
                                       <a href="{{ route('product-details', $cart->product_id) }}"><img src="{{url('/')}}/uploads/products/{{$cart->product_image}}" alt="">
                                       </a>
                                    </td>
                                    <td class="product-name">
                                       <a href="shop-details.html">{{ $cart->product_name }}</a>
                                    </td>
                                    <td class="product-price">
                                       <span class="amount">Tk. {{ $cart->unit_price }}</span>
                                    </td>
                                    <td class="product-quantity">
                                          <span class="cart-minus">-</span>
                                          <input class="cart-input" type="text" value="{{ $cart->quantity }}"/>
                                          <span class="cart-plus">+</span>
                                    </td>
                                    <td class="product-subtotal">
                                       <span class="amount">Tk.{{ $cart->total_price }}</span>
                                    </td>
                                    <td class="product-remove">
                                       <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                 </tr>
                                 @php $total[] = $cart->total_price @endphp
                                 @endforeach
                                 @php $sub_total = array_sum($total) @endphp

                              </tbody>
                        </table>
                     </div>
                     <div class="row">
                        <div class="col-12">
                              <div class="coupon-all">
                                 <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                          placeholder="Coupon code" required type="text">
                                    <button id="apply-coupon" class="tp-btn tp-color-btn banner-animation" name="apply_coupon" type="submit">Apply Coupon</button>
                                    <p class="coupon-p" style="color:red;font-size: 14px;display:none;">Invalid coupon</p>
                                 </div>
                                 <div class="coupon2">
                                    <button class="tp-btn tp-color-btn banner-animation" name="update_cart" type="submit">Update cart</button>
                                 </div>
                              </div>
                        </div>
                     </div>
                     <div class="row justify-content-end">
                        <div class="col-md-5 ">
                              <div class="cart-page-total">
                                 <h2>Cart totals</h2>
                                 <ul class="mb-20">
                                    <li>Subtotal <span>Tk. {{ $sub_total }}</span></li>
                                    <li>Total <span>Tk. {{ $sub_total }}</span></li>
                                 </ul>
                                 <a href="{{ route('checkout') }}" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</a>
                              </div>
                        </div>
                     </div>
                  </form>
            </div>
         </div>
         </div>
      </section>
      <!-- cart area end-->
    </div>

@endsection

@section('custom_js')
<script type="text/javascript">
   $('.cat-menu__category .category-menu').css('display', 'none');
   $("#apply-coupon").on("click", function(e) {
      e.preventDefault();
      let code = $("#coupon_code").val();
      if(code!="") {
         $('.coupon-p').show();
      }
      else {
         $('.coupon-p').hide();
      }
   });
</script>
@endsection