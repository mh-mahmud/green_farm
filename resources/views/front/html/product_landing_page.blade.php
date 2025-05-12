@extends('front.html.master')
<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/landing/post-263154.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/landing/checkout-styles.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/landing/frontend.min.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/landing/checkout-template.css?ver=2.1.10">
@php
    $delivery_charge = $product->delivery_charge;
   // $init_total = \App\Helpers\Helper::settings()->charge_inside_dhaka + $product->product_value;
   $init_total = $delivery_charge + $product->product_value;
@endphp


@section('content')

    <div class="free">
      <!-- breadcrumb-area -->
      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" style="background-color:#FFE0B2;">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <h2 class="tp-" style="text-align:center;">Product Landing Page</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->


<section class="product-area pt-80 pb-25">
    <div class="container">
        <div class="row">
            <article id="post-263154" class="entry-content post-263154 cartflows_step type-cartflows_step status-publish hentry">
                <div data-elementor-type="wp-post" data-elementor-id="263154" class="elementor elementor-263154" data-elementor-settings="{&quot;ha_cmc_init_switcher&quot;:&quot;no&quot;}" data-elementor-post-type="cartflows_step">
                    <div class="wd-negative-gap elementor-element elementor-element-0317d3c e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="0317d3c" data-element_type="container" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-470a780 elementor-widget__width-inherit ha-has-bg-overlay elementor-widget elementor-widget-heading" data-id="470a780" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile_extra&quot;,&quot;mobile&quot;]}"
                            data-widget_type="heading.default">
                                <div class="elementor-widget-container" style="width:100%">
                                    <h2 class="elementor-heading-title elementor-size-default">{{ $product->name }}</h2>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <section class="wd-negative-gap elementor-section elementor-top-section elementor-element elementor-element-ca6fa40 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca6fa40" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92d3267" data-id="92d3267" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    {{--<section class="elementor-section elementor-inner-section elementor-element elementor-element-7979dc9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7979dc9" data-element_type="section"
                                    data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bf5e32c" data-id="bf5e32c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-162473a elementor-widget elementor-widget-heading" data-id="162473a" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">পূর্বের মুল্য</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-078a335" data-id="078a335" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-75f69cc elementor-widget elementor-widget-heading" data-id="75f69cc" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">{{ $product->product_value }} টাকা</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>--}}
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-1b5a1ad elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1b5a1ad" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6b3e380" data-id="6b3e380" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2fe264b elementor-widget elementor-widget-heading" data-id="2fe264b" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default"><a href="#order">বর্তমান মুল্য </a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dde0b13" data-id="dde0b13" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-017225e elementor-widget elementor-widget-heading" data-id="017225e" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">{{ $product->product_value }} টাকা</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-241fdff elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="241fdff" data-element_type="section"
                                    data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-97ebd56" data-id="97ebd56" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6839e3b elementor-widget elementor-widget-heading" data-id="6839e3b" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</h2> </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-fb66300 ha-has-bg-overlay elementor-widget elementor-widget-checkout-form" data-id="fb66300" data-element_type="widget" data-widget_type="checkout-form.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf-el-checkout-form cartflows-elementor__checkout-form">
                                                                <div id="wcf-embed-checkout-form" class="wcf-embed-checkout-form wcf-embed-checkout-form-one-column  wcf-field-default">






                        <!-- CHECKOUT SHORTCODE -->
                        <div class="woocommerce">
                           
                           <form action="{{ route('landing-checkout-store') }}" method="POST" style="padding:20px">
                              @csrf
                              <div class="form-group">
                                 <label for="full_name">আপনার নাম <span style="color:red" class="required" aria-hidden="true">*</span></label>
                                 <input required type="text" class="form-control" name="full_name" id="full_name">
                              </div><br>
                              <div class="form-group">
                                 <label for="phone">মোবাইল নাম্বার <span style="color:red" class="required" aria-hidden="true">*</span></label>
                                 <input required type="text" placeholder="11 সংখ্যার মোবাইল নাম্বার লিখুন" class="form-control" name="phone_number" id="phone">
                              </div><br>
                              <div class="form-group">
                                 <label for="address">আপনার ঠিকানা <span style="color:red" class="required" aria-hidden="true">*</span></label>
                                 <textarea required rows="4" class="form-control" name="billing_address" id="address"></textarea>
                              </div><br>

                              <div class="form-group">
                                 <label for="phone" style="font-weight:bold;font-size:19px;padding-bottom:10px;">Shipping <span style="color:red" class="required" aria-hidden="true">*</span></label>

                                 <div class="radio" style="padding-bottom:5px;border-bottom:1px solid #bbb;border-top:1px solid #ccc;maegin-top:10px;">
                                   <label><input type="radio" data-type="inside_dhaka" name="optradio" value="{{$delivery_charge}}" checked> Inside Dhaka: {{$delivery_charge}} ৳</label>
                                 </div>

                                 <div class="radio" style="padding-bottom:5px;border-bottom:1px solid #bbb !important">
                                   <label><input type="radio" data-type="outside_dhaka" value="{{$delivery_charge}}" name="optradio"> Outside Dhaka: {{$delivery_charge}} ৳</label>
                                 </div>
                                 <input type="hidden" name="delivery_location" id="delivery_location" value="inside_dhaka">
                              </div><br>







                               <div class="wcf-product-option-wrap wcf-yp-skin-cards wcf-product-option-after-customer">
                                   <h3 id="your_products_heading"> Your Products </h3>
                                   <div class="wcf-qty-options">



                                       <div class="wcf-qty-row wcf-qty-row-157258"  style="border:1px solid #ddd;width:100%;">

                                           <div class="wcf-item">
                                               <!-- <div>
                                                   <input type="checkbox" name="wcf-multiple-sel" value="157258" checked="true">
                                               </div> -->

                                               <div class="wcf-item-image" style="border: 1px solid #ddd;width:400px"><img src="{{url('/')}}/uploads/products/{{$product->img_path}}" alt=""></div>
                                               <div class="wcf-item-content-options">
                                                   <div class="wcf-item-wrap">
                                                       <span class="wcf-display-title">{{$product->name}}</span>
                                                       <span class="wcf-display-title-quantity"><span class="dashicons dashicons-no-alt"></span>
                                                       {{--<span class="wcf-display-quantity">1</span></span>--}}
                                                   </div>

                                                   <div class="wcf-qty">
                                                       <div class="wcf-qty-selection-wrap">
                                                           <!-- <span class="wcf-qty-selection-btn wcf-qty-decrement wcf-qty-change-icon" title="">−</span> -->
                                                           <span class="cart-minus">-</span>

                                                           <!-- <input autocomplete="off" type="number" value="1" step="1" min="1" name="wcf_qty_selection" class="wcf-qty-selection" placeholder="1" data-sale-limit="false" title=""> -->
                                                           <input class="cart-input quantity" name="quantity" type="number" value="1"/>

                                                           <!-- <span class="wcf-qty-selection-btn wcf-qty-increment wcf-qty-change-icon" title="">+</span> -->
                                                           <span class="cart-plus">+</span>
                                                       </div>
                                                   </div>
                                                   <div class="wcf-price">
                                                      <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                      <input type="hidden" name="unit_price" id="unit-price" value="{{ $product->product_value }}">
                                                       <div class="wcf-display-price wcf-field-label"><span class="woocommerce-Price-amount amount">{{ $product->product_value }}  &nbsp;<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></span>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>





                                   </div>
                               </div>

                              <div class="row justify-content-end">
                                 <div class="col-md-12 ">
                                       <div class="cart-page-total">
                                          <h2>Your total order</h2>
                                          <ul class="mb-20">
                                             <li style="border:1px solid #ddd">Subtotal <span>Tk. <span class="product-total">{{ $product->product_value }}</span></span></li>
                                             <li style="border:1px solid #ddd">Delivery Charge <span>Tk. <span class="delivery-total">{{ $delivery_charge }}</span></span></li>
                                             <li style="border:1px solid #ddd;font-weight:bold">Total <span>Tk. <span class="cart-total">{{ @$init_total }}/-</span></span></li>
                                          </ul>
                                         
                                          
                                          <!-- <button style="overflow: hidden !important;" type="submit" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</button> -->
                                       </div>
                                 </div>
                              </div>

                              <span style="font-size:12px;">Payment Type:-</span>
                              <div style="border: 1px solid #ccc;margin-top:0px;background-color:#fff;">
                                 <span style="padding-top:10px;margin-left:2%;font-size:13px">CASH ON DELIVERY</span>
                              </div>


<!-- kaka -->
                                       <div id="payment" class="woocommerce-checkout-payment">
                                           
                                           <div class="form-row place-order">
                                               

                                               <div class="woocommerce-terms-and-conditions-wrapper">
                                                   <div class="woocommerce-privacy-policy-text" style="font-size:10px;">
                                                       <p style="font-size:10px;">Your personal data will be used to process your order, support your experience throughout this website, and for other uses read our <a href="https://greenfarm.com.bd/terms-and-conditions" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                                   </div>
                                               </div>

                                               <div class="wcf-bump-order-grid-wrap wcf-all-bump-order-wrap wcf-after-payment" data-update-time="1746116364"></div>
                                               <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="অর্ডার কনফার্ম করুন&nbsp;&nbsp;1,350&nbsp;৳&nbsp;" data-value="অর্ডার কনফার্ম করুন&nbsp;&nbsp;1,350&nbsp;৳&nbsp;">অর্ডার কনফার্ম করুন&nbsp;&nbsp;<span class="final-total">{{ $init_total }}</span>&nbsp;৳&nbsp;</button>

                                               
                                       </div>
<!-- end kaka -->

                              
                           </form>

                        </div>
                        <!-- END CHECKOUT SHORTCODE -->






                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{--
                       <div class="row" style="margin-top:20px">
                           <div class="col-md-3" style="border:1px solid #ddd;padding:20px">
                               <img src="{{url('/')}}/uploads/products/mango/mango-1.jpeg">
                               
                               <a href="{{ url('/') }}/products/64/landing-page/mango" style="width:100%;margin-top:10px" class=" btn btn-success tp-btn  banner-animation">ORDER NOW</a>
                           </div>
                           <div class="col-md-3" style="border:1px solid #ddd;padding:20px">
                               <img src="{{url('/')}}/uploads/products/mango/mango-2.jpeg">
                               <a href="{{ url('/') }}/products/65/landing-page/mango" style="width:100%;margin-top:10px" class=" btn btn-success tp-btn  banner-animation">ORDER NOW</a>
                           </div>
                           <div class="col-md-3" style="border:1px solid #ddd;padding:20px">
                               <img src="{{url('/')}}/uploads/products/mango/mango-3.jpeg">
                               <a href="{{ url('/') }}/products/66/landing-page/mango" style="width:100%;margin-top:10px" class=" btn btn-success tp-btn  banner-animation">ORDER NOW</a>
                           </div>
                           <div class="col-md-3" style="border:1px solid #ddd;padding:20px">
                               <img src="{{url('/')}}/uploads/products/mango/mango-4.jpeg">
                               <a href="{{ url('/') }}/products/67/landing-page/mango" style="width:100%;margin-top:10px" class=" btn btn-success tp-btn  banner-animation">ORDER NOW</a>
                           </div>
                       </div>
                    --}}

                    <div class="wd-negative-gap elementor-element elementor-element-61f7857 e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="61f7857" data-element_type="container" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-aa72ab5 elementor-widget elementor-widget-video" data-id="aa72ab5" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=1s75_ZI9IO0&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                            data-widget_type="video.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-wrapper elementor-open-inline">
                                        <iframe class="elementor-video" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="Green Farm Mango Food"
                                        width="640" height="360" src="https://www.youtube.com/embed/1s75_ZI9IO0?controls=1&amp;rel=0&amp;playsinline=0&amp;cc_load_policy=0&amp;autoplay=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fgreenfarm.com&amp;widgetid=1&amp;forigin=https%3A%2F%2Fgreenfarm.com.bd.com%2Fstep%2Fhoney-combo%2F%3Futm_medium%3Dpaid%26utm_source%3Dfb%26utm_id%3D120221651767020660%26utm_content%3D120221651767060660%26utm_term%3D120221651766990660%26utm_campaign%3D120221651767020660%23orders&amp;aoriginsup=1&amp;vf=1"
                                        id="widget2"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="wd-negative-gap elementor-section elementor-top-section elementor-element elementor-element-2a9a908 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeIn" data-id="2a9a908" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;_ha_eqh_enable&quot;:false}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7be3ad8" data-id="7be3ad8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-98e2bd9 elementor-widget__width-inherit ha-has-bg-overlay elementor-widget elementor-widget-heading" data-id="98e2bd9" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile_extra&quot;,&quot;mobile&quot;]}"
                                    data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-large">গ্রীন ফার্ম - যেভাবে কাস্টমারের আস্থার জায়গা করে নিয়েছে !!!</h2> </div>
                                    </div>
                                    <section class="wd-negative-gap elementor-section elementor-inner-section elementor-element elementor-element-30350da elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="30350da"
                                    data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1dd6956" data-id="1dd6956" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3d39f51" data-id="3d39f51" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d120b48 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="d120b48" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">

                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon">
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>            </span>
                                                                </div>

                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                  <span>
                     শতভাগ খাটি নিশ্চয়তা                 </span>
               </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        আমাদের পণ্য ভেজাল প্রমান করতে পারলে  গ্রীন ফার্ম  দিবে এক লক্ষ টাকা । </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-88f778c" data-id="88f778c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-219566f elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="219566f" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">

                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon">
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>            </span>
                                                                </div>

                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                  <span>
                     ক্যাশ অন ডেলিভারী                </span>
               </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        গ্রীন ফার্ম এর কোন পণ্য অর্ডার করতে এক টাকাও অগ্রিম দিতে হবে না। </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0e170f4" data-id="0e170f4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-a7e1831 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="a7e1831" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">

                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon">
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>            </span>
                                                                </div>

                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                  <span>
                     দ্রুত ডেলিভারী সুবিধা                  </span>
               </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        ঢাকার মধ্যে এক দিনে এবং ঢাকার বাইরে দুই থেকে তিন দিনের মধ্যে পেয়ে যাবেন ইনশাআল্লাহ । </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>





      <!-- related-product-area-start -->
      {{--
      <div class="related-product-area pt-65 pb-50 related-product-border">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-sm-6">
                  <div class="tpsection mb-40">
                     <h4 class="tpsection__title">Related Products</h4>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="tprelated__arrow d-flex align-items-center justify-content-end mb-40">
                     <div class="tprelated__prv"><i class="far fa-long-arrow-left"></i></div>
                     <div class="tprelated__nxt"><i class="far fa-long-arrow-right"></i></div>
                  </div>
               </div>
            </div>
            <div class="swiper-container related-product-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tpproduct pb-15 mb-30">
                        <div class="tpproduct__thumb p-relative">
                           <a href="shop-details-2.html">
                              <img src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-1.jpg" alt="product-thumb">
                              <img class="product-thumb-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-2.jpg" alt="">
                           </a>
                           <div class="tpproduct__thumb-action">
                              <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                              <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                              <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <h3 class="tpproduct__title"><a href="shop-details.html">Miko Wooden Bluetooth Speaker</a></h3>
                           <div class="tpproduct__priceinfo p-relative">
                              <div class="tpproduct__priceinfo-list">
                                 <span>$31.00</span>
                              </div>
                              <div class="tpproduct__cart">
                                 <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct pb-15 mb-30">
                        <div class="tpproduct__thumb p-relative">
                           <a href="shop-details.html">
                              <img src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-3.jpg" alt="product-thumb">
                              <img class="product-thumb-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-4.jpg" alt="">
                           </a>
                           <div class="tpproduct__thumb-action">
                              <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                              <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                              <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <h3 class="tpproduct__title"><a href="shop-details-2.html">Gorgeous Wooden Gloves</a></h3>
                           <div class="tpproduct__priceinfo p-relative">
                              <div class="tpproduct__priceinfo-list">
                                 <span>$31.00</span>
                              </div>
                              <div class="tpproduct__cart">
                                 <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct pb-15 mb-30">
                        <div class="tpproduct__thumb p-relative">
                           <a href="shop-details-2.html">
                              <img src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-5.jpg" alt="product-thumb">
                              <img class="product-thumb-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-6.jpg" alt="">
                           </a>
                           <div class="tpproduct__thumb-action">
                              <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                              <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                              <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <h3 class="tpproduct__title"><a href="shop-details.html">Pinkol Enormous Granite Bottle</a></h3>
                           <div class="tpproduct__priceinfo p-relative">
                              <div class="tpproduct__priceinfo-list">
                                 <span>$31.00</span>
                              </div>
                              <div class="tpproduct__cart">
                                 <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct pb-15 mb-30">
                        <div class="tpproduct__thumb p-relative">
                           <span class="tpproduct__thumb-topsall">On Sale</span>
                           <a href="shop-details-2.html">
                              <img src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-7.jpg" alt="product-thumb">
                              <img class="product-thumb-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-8.jpg" alt="">
                           </a>
                           <div class="tpproduct__thumb-action">
                              <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                              <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                              <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <h3 class="tpproduct__title"><a href="shop-details-2.html">Gorgeous Aluminum Table</a></h3>
                           <div class="tpproduct__priceinfo p-relative">
                              <div class="tpproduct__priceinfo-list">
                                 <span>$31.00</span>
                              </div>
                              <div class="tpproduct__cart">
                                 <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct pb-15 mb-30">
                        <div class="tpproduct__thumb p-relative">
                           <a href="shop-details-2.html">
                              <img src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-9.jpg" alt="product-thumb">
                              <img class="product-thumb-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-10.jpg" alt="">
                           </a>
                           <div class="tpproduct__thumb-action">
                              <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                              <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                              <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <h3 class="tpproduct__title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a></h3>
                           <div class="tpproduct__priceinfo p-relative">
                              <div class="tpproduct__priceinfo-list">
                                 <span>$31.00</span>
                                 <span class="tpproduct__priceinfo-list-oldprice">$39.00</span>
                              </div>
                              <div class="tpproduct__cart">
                                 <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct pb-15 mb-30">
                        <div class="tpproduct__thumb p-relative">
                           <span class="tpproduct__thumb-volt"><i class="fas fa-bolt"></i></span>
                           <a href="shop-details-2.html">
                              <img src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-11.jpg" alt="product-thumb">
                              <img class="product-thumb-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-one/product-12.jpg" alt="">
                           </a>
                           <div class="tpproduct__thumb-action">
                              <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                              <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                              <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <h3 class="tpproduct__title"><a href="#">CLCo. Incredible Paper Car</a></h3>
                           <div class="tpproduct__priceinfo p-relative">
                              <div class="tpproduct__priceinfo-list">
                                 <span>$31.00</span>
                              </div>
                              <div class="tpproduct__cart">
                                 <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      --}}
      <!-- related-product-area-end -->
    </div>

@endsection

@section('custom_js')
<script>
   $(document).ready(function() {
      $('.cat-menu__category .category-menu').css('display', 'none');
   });
   $("#add-to-cart").on("click", function() {
      var url_data = $(this).data('cart-url');
      window.location.href = url_data;
   });
   $("#add-to-cart2").on("click", function() {
      var url_data = $(this).data('cart-url');
      window.location.href = url_data;
   });

   $(document).ready(function() {
     // Function to update total prices
      function updateCart() {
         let cartTotal = 0;
         var delivery = $('input[name="optradio"]:checked').val();
         delivery = parseInt(delivery);

          // const unitPrice = parseFloat($(this).find('.unit-price').data('price'));
          const unitPrice = parseFloat($("#unit-price").val());

          const quantity = parseInt($('.quantity').val());
          const productTotal = unitPrice * quantity;
          delivery = delivery * quantity;


          // Add to cart total
          cartTotal += productTotal;
          allTotal = cartTotal + delivery;

          // Update the product total in the table
          $('.product-total').text(cartTotal.toFixed(2));
          $('.delivery-total').text(delivery);

         // Update the cart total
         $('.cart-total, .final-total').text(allTotal.toFixed(2));
      }

      // Event listener for quantity changes
      $("span.cart-plus, span.cart-minus").on("click", function() {
         updateCart();
      });

      $('input[name="optradio"]').change(function() {
         let loc_val = $(this).attr('data-type');
         $("#delivery_location").val(loc_val);
         updateCart();
      });

   });


</script>
@endsection