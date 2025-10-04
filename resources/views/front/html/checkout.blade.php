@extends('front.html.master')
@section('content')

<style type="text/css">

</style>

<div class="free">

      <!-- breadcrumb-area -->
      {{--<section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" style="background-color:#FFE0B2;">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <h2 class="tp-" style="text-align:center;">CHECKOUT PAGE</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>--}}
      <!-- breadcrumb-area-end -->

      <!-- coupon-area start -->
      
      
      <section class="coupon-area pt-80 pb-30 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
      {{--
          <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="coupon-accordion">
                       <!-- ACCORDION START -->
                       <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                       <div id="checkout-login" class="coupon-content">
                          <div class="coupon-info">
                             <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                   sit amet ipsum luctus.</p>
                             <form action="#">
                                   <p class="form-row-first">
                                      <label>Username or email <span class="required">*</span></label>
                                      <input type="text" />
                                   </p>
                                   <p class="form-row-last">
                                      <label>Password <span class="required">*</span></label>
                                      <input type="text" />
                                   </p>
                                   <p class="form-row">
                                      <button class="tp-btn tp-color-btn" type="submit">Login</button>
                                      <label>
                                         <input type="checkbox" />
                                         Remember me
                                      </label>
                                   </p>
                                   <p class="lost-password">
                                      <a href="#">Lost your password?</a>
                                   </p>
                             </form>
                          </div>
                       </div>
                       <!-- ACCORDION END -->
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="coupon-accordion">
                       <!-- ACCORDION START -->
                       <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                       <div id="checkout_coupon" class="coupon-checkout-content">
                          <div class="coupon-info">
                             <form action="#">
                                   <p class="checkout-coupon">
                                      <input type="text" placeholder="Coupon Code" />
                                      <button class="tp-btn tp-color-btn" type="submit">Apply Coupon</button>
                                   </p>
                             </form>
                          </div>
                       </div>
                       <!-- ACCORDION END -->
                 </div>
              </div>
           </div>
          </div>
      --}}
      </section>
      

      <!-- coupon-area end -->

      <!-- checkout-area start -->
      <section class="checkout-area pb-50 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">

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

            @if(!empty($carts))
            <form action="{{ route('checkout-store') }}" method="POST">
               @csrf
               <input type="hidden" name="cart_session_id" value="{{ $session_id }}">
               <div class="row">
                     <div class="col-lg-5 col-md-12">
                        <div class="checkbox-form">
                           <h3>Billing & Shipping</h3>
                           <div class="row">

                           <div class="col-md-12">
                           <div class="checkout-form-list">
                              <label style="color:#222">আপনার নাম  <span class="required">*</span></label>
                              <input type="text" value="{{ Auth::user() ? Auth::user()->first_name : null }}" placeholder="Write your name" name="first_name" required />
                           </div>
                           </div>


                           <div class="col-md-12">
                           <div class="checkout-form-list">
                              <label style="color:#222">আপনার ফোন নাম্বর <span class="required">*</span></label>
                              <input autocomplete="off" id="phone" name="mobile" type="text" value="{{ Auth::user() ? Auth::user()->phone_number : null }}" required placeholder="+880" oninput="validatePhone(this)" />
                              <small id="error-message" style="color: red;"></small>
                           </div>
                           </div>




                           <div class="row">
                           <div class="col-md-12">
                                 <!-- <div class="country-select" style="height: 120px;overflow-y: auto;"> -->
                                 <div class="country-select" style="height: 120px;overflow-y: auto;">
                                    <label style="color:#222">আপনার জেলা সিলেক্ট করুন <span class="required">*</span></label><br>
                                    <select name="billing_state">
                                      <option value="">-- select a option</option>
                                      @foreach($districts->districts as $key=>$val)
                                        <option {{ ($val=='Dhaka') ? 'selected' : '' }} value="{{$val}}">{{ $val }}</option>
                                      @endforeach
                                    </select>
                                 </div>
                           </div>
                          </div>


                           <div class="col-md-12">
                           <div class="checkout-form-list">
                              <label style="color:#222">সম্পুর্ণ ঠিকানা লিখুন  <span class="required">*</span></label>
                            <div class="order-notes">
                               <div class="checkout-form-list">
                                  <textarea id="checkout-mess" cols="30" rows="10" name="shipping_address">{{ Auth::user() ? Auth::user()->address : null }}</textarea>
                               </div>
                            </div>

                           </div>
                           </div>


                           <div class="col-md-12">
                            <h3>Additional information</h3>
                           <div class="checkout-form-list">
                              <label style="color:#222">Order notes (optional)</label>
                            <div class="order-notes">
                               <div class="checkout-form-list">
                                  <textarea name="order_note" cols="30" rows="10"
                                    placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                               </div>
                            </div>

                           </div>
                           </div>

                           @if(Auth::user()==null)
                           <div class="col-md-12">
                              <div class="checkout-form-list create-acc">
                                 <label>Create an account? Go to <a style="color:red" href="{{ route('user-register') }}">Signup Page</a></label>
                              </div>
                           </div>
                           @endif
                           </div>
                           
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-12">
                        <div class="your-order mb-30 " style="border:2px solid green;">
                           <h3>Your order</h3>
                           <div class="your-order-table table-responsive">
                                 <table>
                                    <thead>
                                       <tr>
                                          <th class="product-name"><b style="color:#222">Product<b></th>
                                          <th class="product-total"><b style="color:#222">Sub Total<b></th>
                                       </tr>
                                    </thead>
                                    <tbody>

                                    @php
                                    $total = [];

                                    @endphp
                                       @foreach($carts as $cart)
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{ $cart->product_name }} <strong class="product-quantity"> × {{ $cart->quantity }}</strong>
                                             </td>
                                             <td class="product-total">
                                                <span class="amount">{{ $cart->total_price }} ৳</span>
                                             </td>
                                        </tr>
                                        @php $total[] = $cart->total_price @endphp
                                        @endforeach
                                        @php $sub_total = array_sum($total) @endphp
                                        
                                    </tbody>
                                    <tfoot>
                                       <tr class="cart-subtotal">
                                             <th style="color:#222">Cart Subtotal</th>
                                             <td style="color:#222"><span class="amount">{{$sub_total}} ৳</span></td>
                                       </tr>
                                       <tr class="shipping">
                                             <th style="color:#222;">Shipping</th>
                                             <td>
                                                <ul>
                                                   <li>
                                                        <input required id="charge_inside_dhaka" type="radio" name="shipping" value="{{\App\Helpers\Helper::settings()->charge_inside_dhaka}}"/>
                                                        <label style="color:#222;">ঢাকার মধ্যে: <span class="amount">Tk. {{\App\Helpers\Helper::settings()->charge_inside_dhaka}}/-</span></label>
                                                   </li>
                                                   <li>
                                                        <input required id="charge_betside_dhaka" type="radio" name="shipping" value="{{\App\Helpers\Helper::settings()->charge_beside_dhaka}}"/>
                                                        <label style="color:#222">ঢাকার পার্শবর্তী এলাকায়: <span class="amount">Tk. {{\App\Helpers\Helper::settings()->charge_beside_dhaka}}/-</span></label>
                                                   </li>
                                                   <li>
                                                        <input required id="charge_outside_dhaka" type="radio" name="shipping" value="{{\App\Helpers\Helper::settings()->charge_outside_dhaka}}"/>
                                                        <label style="color:#222">ঢাকার বাইরে: <span class="amount">Tk. {{\App\Helpers\Helper::settings()->charge_outside_dhaka}}/-</span></label>
                                                   </li>
                                                </ul>
                                             </td>
                                       </tr>
                                       <tr class="order-total">
                                             <input id="order_total" type="hidden" name="total_price" value="{{$sub_total}}">
                                             <input type="hidden" name="discount" value="0">
                                            <th style="color:#222;font-size:17px;">Total</th>
                                            <td><strong><span style="color:#222;" class="total_amount">{{$sub_total}}</span> ৳</strong>
                                            </td>
                                       </tr>
                                    </tfoot>
                                 </table><hr>
                           </div>
                           <div class="payment-method">

                              <div id="payment" class="woocommerce-checkout-payment" style="position: static; zoom: 1;">
                                <ul style="list-style: none;">
                                  <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">
                                    <label for="payment_method_cod"> Cash on delivery </label>
                                    <div>
                                      <p style="font-size:12px">১০০% নিশ্চিত হয়ে অর্ডার করুন। পণ্য হাতে পেয়ে ডেলিভারি ম্যানকে পেমেন্ট করতে পারবেন।</p>
                                    </div>
                                  </li>
                                  <li class="wc_payment_method payment_method_bkash-for-woocommerce">
                                    <input id="payment_method_bkash-for-woocommerce" type="radio" class="input-radio" name="payment_method" value="bkash-for-woocommerce" data-order_button_text="Pay with bKash">
                                    <label for="payment_method_bkash-for-woocommerce"> bKash Payment <img src="https://hffoodservice.com/wp-content/plugins/bKash-for-woocommerce-PGW-Integration/includes/../assets/images/logo.png" alt="bKash Payment">
                                    </label>
                                    <div class="payment_box payment_method_bkash-for-woocommerce" style="display:none;">
                                      <p>Pay with bKash PGW.</p>
                                    </div>
                                  </li>
                                </ul>

                              </div>

                              <div class="order-button-payment mt-20">
                                 <button style="background-color:#222;color:#fff;font-size:17px;" type="submit" class="tp-btn  w-100 banner-animation">Place order</button>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
            </form>
            @else
            <div class="alert alert-danger" role="alert">
               Your cart is empty
            </div>
            @endif
         </div>
      </section>
      <!-- checkout-area end -->


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
   var order_total = parseInt($("#order_total").val());
   $('input[name="shipping"]').change(function() {
       var selectedValue = $('input[name="shipping"]:checked').val();
       var total = order_total + parseInt(selectedValue);
       $("span.total_amount").text(total);
       $("#order_total").val(total);
       console.log(selectedValue);
   });

   function validatePhone(input) {
       let phone = input.value;
       let errorMessage = document.getElementById("error-message");

       // BD phone number regex (supports +880 or 01 formats)
       let bdPhoneRegex = /^(?:\+8801[3-9]\d{8}|01[3-9]\d{8})$/;
       // let bdPhoneRegex = /^(?:\01[3-9]\d{8}|01[3-9]\d{8})$/;

       if (!bdPhoneRegex.test(phone)) {
           errorMessage.textContent = "Invalid Bangladeshi phone number!";
           input.style.borderColor = "red";
       } else {
           errorMessage.textContent = "";
           input.style.borderColor = "green";
       }
   }

</script>
@endsection