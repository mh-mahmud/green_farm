@extends('front.html.master')
<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/landing/post-263154.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/landing/checkout-styles.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/landing/frontend.min.css">
<link rel="stylesheet" type="text/css" href="https://falaqfood.com/wp-content/plugins/cartflows/assets/css/checkout-template.css?ver=2.1.10">
@php
   $init_total = \App\Helpers\Helper::settings()->charge_inside_dhaka + $product->product_value;
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
                                <div class="elementor-widget-container">
                                    <!-- <h2 class="elementor-heading-title elementor-size-default">হানি কম্বো – একসাথে চারটি ভিন্ন মধু</h2> -->
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
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-7979dc9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7979dc9" data-element_type="section"
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
                                    </section>
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
                           
                           <form action="/action_page.php" style="padding:20px">
                              <div class="form-group">
                                 <label for="full_name">আপনার নাম <span style="color:red" class="required" aria-hidden="true">*</span></label>
                                 <input required type="text" class="form-control" id="full_name">
                              </div><br>
                              <div class="form-group">
                                 <label for="phone">মোবাইল নাম্বার <span style="color:red" class="required" aria-hidden="true">*</span></label>
                                 <input required type="text" class="form-control" id="phone">
                              </div><br>
                              <div class="form-group">
                                 <label for="address">আপনার ঠিকানা <span style="color:red" class="required" aria-hidden="true">*</span></label>
                                 <textarea required rows="4" class="form-control" id="address"></textarea>
                              </div><br>

                              <div class="form-group">
                                 <label for="phone" style="font-weight:bold;font-size:19px;padding-bottom:10px;">Shipping <span style="color:red" class="required" aria-hidden="true">*</span></label>

                                 <div class="radio" style="padding-bottom:5px;border-bottom:1px solid #bbb;border-top:1px solid #ccc;maegin-top:10px;">
                                   <label><input type="radio" name="optradio" checked> Inside Dhaka: {{\App\Helpers\Helper::settings()->charge_inside_dhaka}} ৳</label>
                                 </div>

                                 <div class="radio" style="padding-bottom:5px;border-bottom:1px solid #bbb !important">
                                   <label><input type="radio" name="optradio"> Outside Dhaka: {{\App\Helpers\Helper::settings()->charge_outside_dhaka}} ৳</label>
                                 </div>
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
                                                       <span class="wcf-display-quantity">1</span></span>
                                                   </div>

                                                   <div class="wcf-qty">
                                                       <div class="wcf-qty-selection-wrap">
                                                           <!-- <span class="wcf-qty-selection-btn wcf-qty-decrement wcf-qty-change-icon" title="">−</span> -->
                                                           <span class="cart-minus">-</span>

                                                           <!-- <input autocomplete="off" type="number" value="1" step="1" min="1" name="wcf_qty_selection" class="wcf-qty-selection" placeholder="1" data-sale-limit="false" title=""> -->
                                                           <input class="cart-input quantity" name="quantity[]" type="number" value="1"/>

                                                           <!-- <span class="wcf-qty-selection-btn wcf-qty-increment wcf-qty-change-icon" title="">+</span> -->
                                                           <span class="cart-plus">+</span>
                                                       </div>
                                                   </div>
                                                   <div class="wcf-price">
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
                                             <li>Subtotal <span>Tk. <span class="cart-total">{{ $product->product_value }}</span></span></li>
                                             <li>Total <span>Tk. <span class="cart-total">{{ @$init_total }}</span></span></li>
                                          </ul>
                                         
                                          
                                          <!-- <button style="overflow: hidden !important;" type="submit" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</button> -->
                                       </div>
                                 </div>
                              </div>

                              <div style="border: 2px solid #ccc;margin-top:20px;background-color:#fff;">
                                 <p style="padding:20px;">Payment Type: CASH ON DELIVERY</p>
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
                                               <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="অর্ডার কনফার্ম করুন&nbsp;&nbsp;1,350&nbsp;৳&nbsp;" data-value="অর্ডার কনফার্ম করুন&nbsp;&nbsp;1,350&nbsp;৳&nbsp;">অর্ডার কনফার্ম করুন&nbsp;&nbsp;1,350&nbsp;৳&nbsp;</button>

                                               
                                       </div>
<!-- end kaka -->

                              
                           </form>

                           <form name="checkout" method="post" class="checkout woocommerce-checkout" action="" enctype="multipart/form-data">



                               <div class="wcf-col2-set col2-set" id="customer_details" style="border:1px solid black;padding: 10px;">
                                   <div class="wcf-col-12 col-12">
                                       
                                       <div class="woocommerce-billing-fields" style="border:1px solid red;">

                                           <h3>Billing &amp; Shipping</h3>



                                           <div class="woocommerce-billing-fields__field-wrapper">
                                               <p class="form-row form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                   <label for="billing_first_name" class="required_field">আপনার নাম * &nbsp;<span class="required" aria-hidden="true">*</span></label><br />
                                                   <span class="woocommerce-input-wrapper">
                                                      <input type="text" class="input-text field-required" name="billing_first_name" id="billing_first_name" placeholder="আপনার নাম লিখুন..." value="" aria-required="true" autocomplete="given-name" aria-invalid="true">
                                                      <span class="wcf-field-required-error">আপনার নাম is required</span>
                                                   </span>
                                               </p>
                                               <p class="form-row form-row-wide form-row-full form-row-full validate-required validate-phone" id="billing_phone_field" data-priority="20">
                                                   <label for="billing_phone" class="required_field">মোবাইল নাম্বার * &nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="আপনার ফোন নাম্বার দিন" value="" aria-required="true" autocomplete="tel"></span></p>
                                               <p
                                               class="form-row form-row-wide address-field wcf-column-50 wcf-column-50 validate-required" id="billing_address_1_field" data-priority="30">
                                                   <label for="billing_address_1" class="required_field">আপনার ঠিকানা * &nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="আপনার ঠিকানা লিখুন" value="" aria-required="true" autocomplete="address-line1"></span></p>
                                           </div>

                                       </div>

                                   </div>

                                   <div class="wcf-col-2 col-2">

                                       <div class="woocommerce-shipping-fields">
                                       </div>
                                       <div class="woocommerce-additional-fields">


                                           <input type="hidden" class="input-hidden _wcf_flow_id" name="_wcf_flow_id" value="263153">
                                           <input type="hidden" class="input-hidden _wcf_checkout_id" name="_wcf_checkout_id" value="263154">
                                       </div>
                                   </div>
                               </div>



                               <div class="wcf-shipping-methods-wrapper">
                                   <h3 class="wcf-shipping-methods-title">Shipping</h3>
                                   <div class="wcf-shipping-method-options">
                                       <ul id="shipping_method" class="woocommerce-shipping-methods">
                                           <li>
                                               <input type="radio" name="shipping_method[0]" data-index="0" id="wcf_shipping_method_0_flat_rate1" value="flat_rate:1" class="shipping_method" checked="checked">
                                               <label for="wcf_shipping_method_0_flat_rate1">Inside Dhaka: <span class="woocommerce-Price-amount amount"><bdi>50&nbsp;<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                   </span>
                                               </label>
                                           </li>
                                           <li>
                                               <input type="radio" name="shipping_method[0]" data-index="0" id="wcf_shipping_method_0_flat_rate2" value="flat_rate:2" class="shipping_method">
                                               <label for="wcf_shipping_method_0_flat_rate2">Outside Dhaka: <span class="woocommerce-Price-amount amount"><bdi>80&nbsp;<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                   </span>
                                               </label>
                                           </li>
                                       </ul>


                                   </div>
                               </div>


                               <div class="wcf-product-option-wrap wcf-yp-skin-cards wcf-product-option-after-customer">
                                   <h3 id="your_products_heading"> Your Products </h3>
                                   <div class="wcf-qty-options">

                                       <div class="wcf-qty-row wcf-qty-row-157258 " data-options="{&quot;product_id&quot;:157258,&quot;variation_id&quot;:0,&quot;type&quot;:&quot;simple&quot;,&quot;unique_id&quot;:&quot;9jp5zmw5&quot;,&quot;mode&quot;:&quot;quantity&quot;,&quot;highlight_text&quot;:&quot;&quot;,&quot;quantity&quot;:&quot;1&quot;,&quot;default_quantity&quot;:1,&quot;original_price&quot;:&quot;1300&quot;,&quot;discounted_price&quot;:&quot;&quot;,&quot;total_discounted_price&quot;:&quot;&quot;,&quot;currency&quot;:&quot;&amp;#2547;&amp;nbsp;&quot;,&quot;cart_item_key&quot;:&quot;78d5d5d92f5b750e87e1b10f84ab4eb3&quot;,&quot;save_value&quot;:&quot;&quot;,&quot;save_percent&quot;:&quot;&quot;,&quot;sign_up_fee&quot;:0,&quot;subscription_price&quot;:&quot;1300&quot;,&quot;trial_period_string&quot;:&quot;&quot;}">

                                           <div class="wcf-item">
                                               <div class="wcf-item-selector wcf-item-multiple-sel">
                                                   <input class="wcf-multiple-sel" type="checkbox" name="wcf-multiple-sel" value="157258" checked="" disabled="">
                                               </div>

                                               <div class="wcf-item-image" style=""><img fetchpriority="high" decoding="async" width="430" height="430" src="https://falaqfood.com/wp-content/uploads/2025/04/Honey-combo2-430x430.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                   alt="হানি কম্বো"></div>
                                               <div class="wcf-item-content-options">
                                                   <div class="wcf-item-wrap">
                                                       <span class="wcf-display-title">হানি কম্বো - একসাথে চারটি ভিন্ন মধু (Honey Combo)</span><span class="wcf-display-title-quantity"><span class="dashicons dashicons-no-alt"></span>
                                                       <span
                                                       class="wcf-display-quantity">1</span>
                                                           </span>
                                                   </div>

                                                   <div class="wcf-qty  ">
                                                       <div class="wcf-qty-selection-wrap">
                                                           <span class="wcf-qty-selection-btn wcf-qty-decrement wcf-qty-change-icon" title="">−</span>
                                                           <input autocomplete="off" type="number" value="1" step="1" min="1" name="wcf_qty_selection" class="wcf-qty-selection" placeholder="1" data-sale-limit="false" title="">
                                                           <span class="wcf-qty-selection-btn wcf-qty-increment wcf-qty-change-icon" title="">+</span>
                                                       </div>
                                                   </div>
                                                   <div class="wcf-price">
                                                       <div class="wcf-display-price wcf-field-label"><span class="woocommerce-Price-amount amount">1,300&nbsp;<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></span>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>


                               <div class="wcf-order-wrap">



                                   <h3 id="order_review_heading">Your order</h3>


                                   <div id="order_review" class="woocommerce-checkout-review-order">
                                       <div class="wd-table-wrapper wd-manage-on">
                                           <table class="shop_table woocommerce-checkout-review-order-table" data-update-time="1746116364">
                                               <thead>
                                                   <tr>
                                                       <th class="product-name">Product</th>
                                                       <th class="product-total">Subtotal</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                               </tbody>
                                               <tfoot>
                                                   <tr class="cart-subtotal">
                                                       <th>Subtotal</th>
                                                       <td><span class="woocommerce-Price-amount amount"><bdi>1,300&nbsp;<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                           </span>
                                                       </td>
                                                   </tr>


                                                   <tr class="woocommerce-shipping-totals shipping">
                                                       <th>Shipping</th>
                                                       <td data-title="Shipping">
                                                           <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                               <li>
                                                                   <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1" class="shipping_method" checked="checked">
                                                                   <label for="shipping_method_0_flat_rate1">Inside Dhaka: <span class="woocommerce-Price-amount amount"><bdi>50&nbsp;<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                       </span>
                                                                   </label>
                                                               </li>
                                                               <li>
                                                                   <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate2" value="flat_rate:2" class="shipping_method">
                                                                   <label for="shipping_method_0_flat_rate2">Outside Dhaka: <span class="woocommerce-Price-amount amount"><bdi>80&nbsp;<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                       </span>
                                                                   </label>
                                                               </li>
                                                           </ul>


                                                       </td>
                                                   </tr>




                                                   <tr class="order-total">
                                                       <th>Total</th>
                                                       <td><strong><span class="woocommerce-Price-amount amount"><bdi>1,350&nbsp;<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>                                                                                                        </td>
                                                   </tr>


                                               </tfoot>
                                           </table>

                                       </div>
                                       <div id="payment" class="woocommerce-checkout-payment">
                                           <ul class="wc_payment_methods payment_methods methods">
                                               <li class="wc_payment_method payment_method_cod">
                                                   <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="" style="display: none;">

                                                   <label for="payment_method_cod">
                                                       Cash on delivery </label>
                                                   <div class="payment_box payment_method_cod">
                                                       <p>Pay with cash upon delivery.</p>
                                                   </div>
                                               </li>
                                           </ul>
                                           <div class="form-row place-order">
                                               <noscript>
                                                   Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You
                                                   may be charged more than the amount stated above if you fail to do so.
                                                   <br/>
                                                   <button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                               </noscript>

                                               <div class="woocommerce-terms-and-conditions-wrapper">
                                                   <div class="woocommerce-privacy-policy-text">
                                                       <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="https://falaqfood.com/privacy-policy/"
                                                           class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                                   </div>
                                               </div>

                                               <div class="wcf-bump-order-grid-wrap wcf-all-bump-order-wrap wcf-after-payment" data-update-time="1746116364"></div>
                                               <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="অর্ডার কনফার্ম করুন&nbsp;&nbsp;1,350&nbsp;৳&nbsp;" data-value="অর্ডার কনফার্ম করুন&nbsp;&nbsp;1,350&nbsp;৳&nbsp;">অর্ডার কনফার্ম করুন&nbsp;&nbsp;1,350&nbsp;৳&nbsp;</button>

                                               <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="ca03e9b665">
                                               <input type="hidden" name="_wp_http_referer" value="/step/honey-combo/?wc-ajax=update_order_review&amp;wcf_checkout_id=263154"> </div>
                                       </div>

                                   </div>


                               </div>
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
                    <div class="wd-negative-gap elementor-element elementor-element-61f7857 e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="61f7857" data-element_type="container" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-aa72ab5 elementor-widget elementor-widget-video" data-id="aa72ab5" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=E_suIRp2Rmc&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                            data-widget_type="video.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-wrapper elementor-open-inline">
                                        <iframe class="elementor-video" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="লিচু, সরিষা, কালোজিরা ফুলের মধুসহ ৪ ধরণের মধু পাচ্ছেন মাত্র ১৩০০ টাকায় | Falaq Food"
                                        width="640" height="360" src="https://www.youtube.com/embed/E_suIRp2Rmc?controls=1&amp;rel=0&amp;playsinline=0&amp;cc_load_policy=0&amp;autoplay=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Ffalaqfood.com&amp;widgetid=1&amp;forigin=https%3A%2F%2Ffalaqfood.com%2Fstep%2Fhoney-combo%2F%3Futm_medium%3Dpaid%26utm_source%3Dfb%26utm_id%3D120221651767020660%26utm_content%3D120221651767060660%26utm_term%3D120221651766990660%26utm_campaign%3D120221651767020660%23orders&amp;aoriginsup=1&amp;vf=1"
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
                                            <h2 class="elementor-heading-title elementor-size-large">ফালাক ফুড- যেভাবে কাস্টমারের আস্থার জায়গা করে নিয়েছে !!!</h2> </div>
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
                                                                        আমাদের পণ্য ভেজাল প্রমান করতে পারলে ফালাক ফুড দিবে এক লক্ষ টাকা । </p>

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
                                                                        ফালাক ফুড এর কোন পণ্য অর্ডার করতে এক টাকাও অগ্রিম দিতে হবে না। </p>

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
                                    <div class="elementor-element elementor-element-18fc336 elementor-widget__width-inherit ha-has-bg-overlay elementor-widget elementor-widget-heading" data-id="18fc336" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile_extra&quot;,&quot;mobile&quot;]}"
                                    data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-medium">হানিকম্বোতে কি কি পাবেন ?</h2> </div>
                                    </div>
                                    <section class="wd-negative-gap elementor-section elementor-inner-section elementor-element elementor-element-7635419 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7635419"
                                    data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5d498a6" data-id="5d498a6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-ed9b598 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="ed9b598" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">

                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon">
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>            </span>
                                                                </div>

                                                                <div class="elementor-icon-box-content">

                                                                    <h4 class="elementor-icon-box-title">
                  <span>
                     পাহাড়ি বন্য ফুলের মধু                  </span>
               </h4>

                                                                    <p class="elementor-icon-box-description">
                                                                        ৫০০ গ্রাম </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f62fc68" data-id="f62fc68" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-8c28992 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="8c28992" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">

                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon">
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>            </span>
                                                                </div>

                                                                <div class="elementor-icon-box-content">

                                                                    <h4 class="elementor-icon-box-title">
                  <span>
                     কালোজিরা  ফুলের মধু                 </span>
               </h4>

                                                                    <p class="elementor-icon-box-description">
                                                                        ৫০০ গ্রাম </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-981957c" data-id="981957c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-f9cf25d elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="f9cf25d" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">

                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon">
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>            </span>
                                                                </div>

                                                                <div class="elementor-icon-box-content">

                                                                    <h4 class="elementor-icon-box-title">
                  <span>
                     সরিষা ফুলের মধু                  </span>
               </h4>

                                                                    <p class="elementor-icon-box-description">
                                                                        ৫০০ গ্রাম </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2f6c809" data-id="2f6c809" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-eb5e3a7 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="eb5e3a7" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">

                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon">
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>            </span>
                                                                </div>

                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                  <span>
                     লিচু ফুলের মধু                   </span>
               </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        ৫০০ গ্রাম </p>

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
                    <section class="wd-negative-gap elementor-section elementor-top-section elementor-element elementor-element-29734c2 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeIn" data-id="29734c2" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200,&quot;_ha_eqh_enable&quot;:false}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4705ae7" data-id="4705ae7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-f3a16f3 elementor-widget__width-inherit ha-has-bg-overlay elementor-widget elementor-widget-heading" data-id="f3a16f3" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile_extra&quot;,&quot;mobile&quot;]}"
                                    data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">আরোও খুঁটিনাটি জেনে নিই চলুন</h3> </div>
                                    </div>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-ca1874f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca1874f" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3248561" data-id="3248561" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-ddcdfe0 elementor-widget elementor-widget-wd_text_block" data-id="ddcdfe0" data-element_type="widget" data-widget_type="wd_text_block.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wd-text-block reset-last-child text-left">

                                                                <p>� হানিকম্বো, এই কম্বো প্যাকেজটিতে আপনি এক অর্ডারের মাধ্যমে একসাথে ৪ টি ভিন্ন ভিন্ন মধুর স্বাদ নিতে পারবেন । বিশেষ করে যারা এক জিনিস বার বার খেতে পছন্দ করেন না , তাদের জন্য এই কম্বোটি বেশ
                                                                    সহায়ক। সকাল / বিকেল / সন্ধ্যায় বা রাতে আপনি একেক সময় একেক মধু খেতে পারেন। চিনির বিকল্প হিসেবে মধু খাওয়া শুরু করেছেন , সেক্ষেত্রে অল্টারনেট করে ভিন্ন ভিন্ন টেস্ট গ্রহণ করুন।</p>
                                                                <p>� হানিকম্বো, মধু লাভার কিংবা যারা আগে মধু টেস্ট করেনি তাদের জন্য বেটার অপশন। কোন মধুটা আপনার রুচির সাথে মানানসই তা আপনি মধুকম্বো ব্যবহারের মাধ্যমে অনুমান করতে পারবেন ।</p>
                                                                <p>� বোতলের ছিপি / ক্যাপ – সিকিউরিটি সিল দিয়ে ইনটেক্ট করা থাকবে
                                                                    <br>পণ্য ডেলিভারির সবকিছু চেক করে রিসিভ করবেন । ফালাক ফুড সবসময় আপনার পাশে আছে ইনশাআল্লাহ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-a4e896e elementor-widget elementor-widget-wd_text_block" data-id="a4e896e" data-element_type="widget" data-widget_type="wd_text_block.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wd-text-block reset-last-child text-center">

                                                                <p><a href="https://facebook.com/groups/falaqfoodcircle/" target="_blank" rel="noopener"><strong>আমাদের কাস্টমার রিভিউ গুলো দেখতে FB Group এ Join হতে পারেন।</strong></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3ef7fe9 elementor-widget elementor-widget-wd_button" data-id="3ef7fe9" data-element_type="widget" data-widget_type="wd_button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wd-button-wrapper text-center">
                                                                <a class="btn btn-style-default btn-shape-rectangle btn-size-default btn-icon-pos-right" href="https://facebook.com/groups/falaqfoodcircle/" target="_blank">
                                                                    <span class="wd-btn-text" data-elementor-setting-key="text">
               Facebook Group          </span>

                                                                    <span class="wd-btn-icon">
                  <svg class="wd-icon e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>             </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-c23424d elementor-align-center ha-has-bg-overlay elementor-widget elementor-widget-button animated zoomIn" data-id="c23424d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                    data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-md" href="#orders" id="01">
                                                    <span class="elementor-button-content-wrapper">
                  <span class="elementor-button-icon">
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-shopping-cart" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg>        </span>
                                                    <span class="elementor-button-text">অর্ডার করুন</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

            </article>
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
</script>
@endsection