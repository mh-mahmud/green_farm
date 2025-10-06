@extends('front.html.master')
@section('content')
   <style type="text/css">
      .unit {
        cursor:pointer;
        color:#222;
        border:1px solid #ddd;
        margin-right:10px;
      }
      .unit-select {
         border:1px solid #333;
      }
   </style>
   <!-- <link rel="stylesheet" href="{{url('/')}}/assets/dist/css/easyzoom.css" /> -->
   <div class="free">
      <!-- breadcrumb-area -->
      {{--
      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" style="background-color:#FFE0B2;">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <h2 class="tp-" style="text-align:center;">Product Details</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      --}}
      <!-- breadcrumb-area-end -->

      <!-- product-area-start -->
      <section class="product-area pt-90 pb-25">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-lg-6 col-md-12">
                  <div class="tpproduct-details__nab pr-50 mb-40">
                     <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                              <img src="{{url('/')}}/uploads/products/{{$product->img_path}}" alt="">
                           </button>

                           @if(!empty($product->img_path_2))
                          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                              <img src="{{url('/')}}/uploads/products/{{$product->img_path_2}}" alt="">
                           </button>
                           @endif

                           @if(!empty($product->img_path_3))
                          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                           <img src="{{url('/')}}/uploads/products/{{$product->img_path_3}}" alt="">
                           </button>
                           @endif

                           @if(!empty($product->img_path_4))
                          <button class="nav-link" id="v-pills-messages-tab2" data-bs-toggle="pill" data-bs-target="#v-pills-messages-4" type="button" role="tab" aria-controls="v-pills-messages-4" aria-selected="false">

                           <img src="{{url('/')}}/uploads/products/{{$product->img_path_4}}" alt="">

                           </button>
                           @endif

                        </div>

                        <div class="tab-content" id="v-pills-tabContent" style="width:100%;">

                          <div class=" tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                           
                              <img style="width:100% !important" class="zoomImage" src="{{url('/')}}/uploads/products/{{$product->img_path}}" style="cursor: zoom-in;" data-extm="large1.jpg">

                          </div>

                          @if(!empty($product->img_path_2))
                          <div class=" tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                           <img style="width:100% !important" class="zoomImage" src="{{url('/')}}/uploads/products/{{$product->img_path_2}}" style="cursor: zoom-in;">

                          </div>
                          @endif

                          @if(!empty($product->img_path_3))
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                           <img style="width:100% !important" class="zoomImage" src="{{url('/')}}/uploads/products/{{$product->img_path_3}}" style="cursor: zoom-in;">
                          </div>
                          @endif

                          @if(!empty($product->img_path_4))
                          <div class="tab-pane fade" id="v-pills-messages-4" role="tabpanel" aria-labelledby="v-pills-messages-tab2">
                           <img style="width:100% !important" class="zoomImage" src="{{url('/')}}/uploads/products/{{$product->img_path_4}}" style="cursor: zoom-in;">
                          </div>
                          @endif
                          
                        </div>
                      </div>
                  </div>
               </div>
               <div class="col-sm-12 col-lg-6 col-md-12">
                  <div class="tpproduct-details__content">

                     <div class="alert alert-success" role="alert" style="display:none"></div>

                     <div class="tpproduct-details__tag-area d-flex align-items-center mb-5">
                        <span class="tpproduct-details__tag">{{$product->category->category_name}}</span>
                        <div class="tpproduct-details__rating">
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        {{--<a class="tpproduct-details__reviewers">{{ $product->total_sell }}+ Total Sell</a>--}}
                     </div>
                     
                     <div class="tpproduct-details__title-area d-flex align-items-center flex-wrap mb-5">
                        <h3 class="tpproduct-details__title">{{$product->name}}</h3>
                        @if($product->stock_status=="In Stock")
                           <span class="tpproduct-details__stock" style="color:green">{{ $product->stock_status }}</span>
                        @else
                           <span class="tpproduct-details__stock">{{ $product->stock_status }}</span>
                        @endif
                        
                     </div>
                     <div id="errmsg" style="display:none;color:#DC4C64;font-size:13px;">please, select a weight from the list</div>
                     <input type="hidden" id="product_id" value="{{$product->id}}">
                     @if(!empty($pro_unit))
                     <div style="margin-bottom:30px;">
                        <input type="hidden" id="cart-weight">
                        @foreach($pro_values as $key=>$val)
                        <span data-weight="{{$key}}" class="unit tpproduct-details__stock" data-unitprice="{{$val}}">{{ $units[$key] }}</span>
                        @endforeach
                     </div>
                     @endif

                     <div class="tpproduct-details__price mb-30">
                        <div class="tpproduct-details__quantity" style="padding:3px 8px 3px 8px">
                           <span style="font-size:12px;color:#333" class="cart-minus"><i class="far fa-minus"></i></span>
                           <input id="cart-qty" class="tp-cart-input" type="text" value="1">
                           <span style="font-size:12px;color:#333" class="cart-plus"><i class="far fa-plus"></i></span>
                        </div>

                        <!-- <del>$9.35</del> -->
                        <span id="loka" style="color:#14A44D;">{{$product->product_value}}/-</span><span style="color:#14A44D;font-size:18px;">৳</span>
                        <input type="hidden" id="cart-val" value="{{$product->product_value}}">
                     </div>


                     {{--<div class="tpproduct-details__pera" style="max-width: 90%;">
                        <p>{!!$product->description!!}</p>
                     </div>--}}

                     <div class="tpproduct-details__count d-flex align-items-center flex-wrap mb-25">

                        <div class="tpproduct-details__cart ml-0" style="width:100%">
                           

                           @if($product->product_sell_type=='landing_page')
                              <button style="background-color:#332D2D;width:100%" data-cart-url="{{ URL::to('products/'.$product->id.'/landing-page/'.$product->name) }}" id="add-to-cart3"><i class="fal fa-shopping-cart"></i> Add To Cart</button>

                              <button style="background-color:#14A44D;width:100%;margin-top:20px" data-cart-url="{{ URL::to('products/'.$product->id.'/landing-page/'.$product->name) }}" id="add-to-cart2"><i class="fal fa-shopping-cart"></i> ক্যাশ অন ডেলিভারিতে অর্ডার করুন</button>
                           @else
                              <button style="background-color:#332D2D;width:100%" data-cart-url="{{ route('add-to-cart', $product->id) }}" id="add-to-cart"><i class="fal fa-shopping-cart"></i> Add To Cart</button>

                              <form method="POST" action="{{ route('prodetails-cash-on-delivery') }}">
                                 @csrf
                                 <input type="hidden" name="product_id" value="{{ $product->id }}">
                                 <!-- <input id="quantity-section-2" type="hidden" name="quantity" value="1"> -->

                                 <!-- <input id="d-productid" type="hidden" name="product_id" value=""> -->
                                 <input id="unit-quantity" type="hidden" name="quantity" value="">
                                 <input id="unit-weight" type="hidden" name="weight" value="">
                                 <input id="unit-price" type="hidden" name="price" value="">

                                 <button style="background-color:#14A44D;width:100%;margin-top:20px" data-cart-url="{{ route('add-to-cart', $product->id) }}" id="add-to-cart2"><i class="fal fa-shopping-cart"></i> ক্যাশ অন ডেলিভারিতে অর্ডার করুন</button>
                              </form>
                           @endif


                           
                        </div>

                        {{--
                        <div class="tpproduct-details__wishlist ml-20">
                           <a href="#"><i class="fal fa-heart"></i></a>
                        </div>
                        --}}

                     </div>

                     <div class="tpproduct-details__information tpproduct-details__code">
                        <p>SKU:</p><span>{{$product->product_code}}</span>
                     </div>
                     <div class="tpproduct-details__information tpproduct-details__categories">
                        <p>Categories:</p>
                        @php
                           $cat = explode(" ", strtolower($product->category->category_name));
                           $cat = implode("-", $cat);
                        @endphp
                        <span><a href="{{ route('product-category-wise', $cat) }}">{{ $product->category->category_name }}</a></span>
                     </div>

                     <div class="tpproduct-details__information tpproduct-details__categories">
                        <p>Brand Name:</p>
                        @php
                           $brand = explode(" ", strtolower($product->brand->brand_name));
                           $brand = implode("-", $brand);
                        @endphp
                        <span><a href="{{ route('product-brand-wise', $brand) }}">{{ $product->brand->brand_name }}</a></span>
                     </div>

                     {{--
                     <div class="tpproduct-details__information tpproduct-details__social">
                        <p>Share:</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                     </div>
                     --}}
                     <div class="details">
                        {!! $settings->product_contact_address !!}
                     </div>
                  </div>
               </div>

               {{--
               <div class="col-lg-2 col-md-5">
                  <div class="tpproduct-details__condation">
                     <ul>
                        <li>
                           <div class="tpproduct-details__condation-item d-flex align-items-center">
                              <div class="tpproduct-details__condation-thumb">
                                 <img src="{{url('/')}}/assets/theme/assets/img/icon/product-det-1.png" alt="" class="tpproduct-details__img-hover">
                              </div>
                              <div class="tpproduct-details__condation-text">
                                 <p>Free Shipping apply to all<br>orders over Tk 10000</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tpproduct-details__condation-item d-flex align-items-center">
                              <div class="tpproduct-details__condation-thumb">
                                 <img src="{{url('/')}}/assets/theme/assets/img/icon/product-det-2.png" alt="" class="tpproduct-details__img-hover">
                              </div>
                              <div class="tpproduct-details__condation-text">
                                 <p>Guranteed 100% Organic<br>from natural farmas</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tpproduct-details__condation-item d-flex align-items-center">
                              <div class="tpproduct-details__condation-thumb">
                                 <img src="{{url('/')}}/assets/theme/assets/img/icon/product-det-3.png" alt="" class="tpproduct-details__img-hover">
                              </div>
                              <div class="tpproduct-details__condation-text">
                                 <p>1 Day Returns if you change<br>your mind</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tpproduct-details__condation-item d-flex align-items-center">
                              <div class="tpproduct-details__condation-thumb">
                                 <img src="{{url('/')}}/assets/theme/assets/img/icon/product-det-4.png" alt="" class="tpproduct-details__img-hover">
                              </div>
                              <div class="tpproduct-details__condation-text">
                                 <p>Covid-19 Info: We keep<br>delivering.</p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               --}}
            </div>
         </div>
      </section>
      <!-- product-area-end -->

      <!-- product-details-area-start -->
      <div class="product-details-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tpproduct-details__navtab mb-60">
                     <div class="tpproduct-details__nav mb-30">
                        <ul class="nav nav-tabs pro-details-nav-btn" id="myTabs" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-links active" id="home-tab-1" data-bs-toggle="tab" data-bs-target="#home-1" type="button" role="tab" aria-controls="home-1" aria-selected="true">Description</button>
                           </li>

                           <li class="nav-item" role="presentation">
                              <button class="nav-links" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content tp-content-tab" id="myTabContent-2">
                        <div class="tab-para tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                           {!! $product->description !!}
                        </div>

                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">

                           <div class="product-details-review">
                              <h3 class="tp-comments-title mb-35">No review found on this product</h3>
                              {{--
                              <h3 class="tp-comments-title mb-35">3 reviews for “Wide Cotton Tunic extreme hammer”</h3>
                              <div class="latest-comments mb-55">
                                 <ul>
                                    <li>
                                       <div class="comments-box d-flex">
                                          <div class="comments-avatar mr-25">
                                             <img src="{{url('/')}}/assets/theme/assets/img/shop/reviewer-01.png" alt="">
                                          </div>
                                          <div class="comments-text">
                                             <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                <div class="avatar-name">
                                                   <b>Siarhei Dzenisenka</b>
                                                   <div class="comments-date mb-20">
                                                      <span>March 27, 2018 9:51 am</span>
                                                   </div>
                                                </div>
                                                <div class="user-rating">
                                                   <ul>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <p class="m-0">This is cardigan is a comfortable warm classic piece. Great to layer with a light top and you can dress up or down given the jewel buttons. I'm 5'8” 128lbs a 34A and the Small fit fine.</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="comments-box d-flex">
                                          <div class="comments-avatar mr-25">
                                             <img src="{{url('/')}}/assets/theme/assets/img/shop/reviewer-02.png" alt="">
                                          </div>
                                          <div class="comments-text">
                                             <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                <div class="avatar-name">
                                                   <b>Tommy Jarvis </b>
                                                   <div class="comments-date mb-20">
                                                      <span>March 27, 2018 9:51 am</span>
                                                   </div>
                                                </div>
                                                <div class="user-rating">
                                                   <ul>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <p class="m-0">This is cardigan is a comfortable warm classic piece. Great to layer with a light top and you can dress up or down given the jewel buttons. I'm 5'8” 128lbs a 34A and the Small fit fine.</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="comments-box d-flex">
                                          <div class="comments-avatar mr-25">
                                             <img src="{{url('/')}}/assets/theme/assets/img/shop/reviewer-03.png" alt="">
                                          </div>
                                          <div class="comments-text">
                                             <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                <div class="avatar-name">
                                                   <b>Johnny Cash</b>
                                                   <div class="comments-date mb-20">
                                                      <span>March 27, 2018 9:51 am</span>
                                                   </div>
                                                </div>
                                                <div class="user-rating">
                                                   <ul>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <p class="m-0">This is cardigan is a comfortable warm classic piece. Great to layer with a light top and you can dress up or down given the jewel buttons. I'm 5'8” 128lbs a 34A and the Small fit fine.</p>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="product-details-comment">
                                 <div class="comment-title mb-20">
                                    <h3>Add a review</h3>
                                    <p>Your email address will not be published. Required fields are marked*</p>
                                 </div>
                                 <div class="comment-rating mb-20 d-flex">
                                    <span>Overall ratings</span>
                                    <ul>
                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                       <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                 </div>
                                 <div class="comment-input-box">
                                    <form action="#">
                                       <div class="row">
                                          <div class="col-xxl-12">
                                             <div class="comment-input">
                                                <textarea placeholder="Your review..."></textarea>
                                             </div>
                                          </div>
                                          <div class="col-xxl-6">
                                             <div class="comment-input">
                                                <input type="text" placeholder="Your Name*">
                                             </div>
                                          </div>
                                          <div class="col-xxl-6">
                                             <div class="comment-input">
                                                <input type="email" placeholder="Your Email*">
                                             </div>
                                          </div>
                                          <div class="col-xxl-12">
                                             <div class="comment-submit">
                                                <button type="submit" class="tp-btn pro-submit">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- product-details-area-end -->

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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script> -->


<script>
   $(document).ready(function() {
      $('.cat-menu__category .category-menu').css('display', 'none');
   });
   $("#add-to-cart").on("click", function() {
      var url_data = $(this).data('cart-url');

      $("#errmsg").hide();
      let labib = $("#cart-weight").val();
      if(!labib) {
         $("#errmsg").show();
         return false;
      }

      let productId = $("#product_id").val();
      let unitWeight = $("#cart-weight").val();
      let cartQty = $("#cart-qty").val();
      let cartPrice = $("#cart-val").val();
      
      console.log(productId);
      console.log(unitWeight);
      console.log(cartQty);
      console.log(cartPrice);

      $.ajax({
        url: '{{ route("ajax.add.cart") }}',
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            productId: productId,
            unitWeight: unitWeight,
            cartQty: cartQty,
            cartPrice: cartPrice,
        },
        success: function(response) {
            if (response.status === 'success') {
               $(".alert-success").show().text(response.message);
               // $("#cartBox").addClass("tp-sidebar-opened");
               setTimeout(function() {
                  window.location.href = window.location.href;
               }, 2000);
            } else {
                alert(response.message);
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            alert('Something went wrong!');
        }
      });

   });

   // $("#add-to-cart2").on("click", function() {
   //    var url_data = $(this).data('cart-url');
   //    window.location.href = url_data;
   // });

   $("#add-to-cart2").on("click", function(e) {
      //e.preventDefault();
      $("#errmsg").hide();
      let labib = $("#cart-weight").val();
      let provalue = $("#cart-val").val();
      let unitQuantity = $("#cart-qty").val();

      if(!labib) {
         $("#errmsg").show();
         return false;
      }
      let action = $("#dcashondelivery").attr("action");
      actionVal = action + "/" + labib + "/" + provalue+"/";
      $("#dcashondelivery").attr("action", actionVal);


      $("#unit-quantity").val(unitQuantity);
      $("#unit-weight").val(labib);
      $("#unit-price").val(provalue);
   });

   // update cart count
   $(".cart-plus, .cart-minus").on("click", function() {
      $("#quantity-section-2").val($("#cart-qty").val());
   });



   $(".unit").on("click", function() {
      $("#errmsg").hide();
      $(".unit").removeClass('unit-select');

      var unitPrice = $(this).data('unitprice');
      var unitWeight = $(this).data('weight');
      $("#cart-weight").val(unitWeight);
      $("#cart-val").val(unitPrice);

      $("span#loka").text(unitPrice);
      $(this).addClass('unit-select');
   });


   // add to cart
   $(".wishlist").on("click", function(e) {
      e.preventDefault();

      let productId = $(this).data("product_id");

      $.ajax({
        url: '{{ route("wishlist.add") }}',
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            product_id: productId,
        },
        success: function(response) {
            if (response.status === 'success') {
                alert(response.message);
            } else {
                alert(response.message);
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            alert('Something went wrong!');
        }
      });
   });


</script>


<script src="{{url('/')}}/assets/dist-js/extm.js"></script>
<script>
$(document).ready(function () {
    // initialize for already visible images
    $('.zoomImage').each(function () {
        $(this).extm({
            position: 'overlay',
            lazy: true
        });
    });

    // when a tab is shown, re-init zoom for its images
    $('a[data-bs-toggle="pill"], button[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("data-bs-target"); // tab content id
        $(target).find('.zoomImage').each(function () {
            if (!$(this).data('extm-init')) {  // prevent duplicate init
                $(this).extm({
                    position: 'overlay',
                    lazy: true
                });
                $(this).data('extm-init', true);
            }
        });
    });
});
</script>





@endsection