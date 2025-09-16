@extends('front.html.master')
@section('content')

<style>
   /* Modal Overlay */
   .modal {
     position: fixed;
     z-index: 9999;
     left: 0; top: 0;
     width: 100%; height: 100%;
     background: rgba(0,0,0,0.6);
     display: flex;
     justify-content: center;
     align-items: center;
   }
   .modal-dialog {
     max-width: 900px;
     width: 90%;
   }
   .modal-content {
     background: #fff;
     border-radius: 10px;
     overflow: hidden;
     position: relative;
   }
   .close-another {
     position: absolute;
     top: 15px; right: 20px;
     font-size: 25px;
     cursor: pointer !important;
     color: #333;
     border: 1px solid red;
   }
   .modal-body {
     display: flex;
     gap: 25px;
   /*     padding: 20px;*/
     padding: 30px;
   }
   .modal-image img {
     width: 350px;
     border-radius: 8px;
     object-fit: cover;
   }
   .modal-info {
     flex: 1;
     display: flex;
     flex-direction: column;
     justify-content: flex-start;
   }
   .modal-info h2 {
     font-size: 24px;
     margin-bottom: 10px;
   }
   .modal-price {
     font-size: 20px;
     font-weight: bold;
     color: #d32f2f;
     margin-bottom: 15px;
   }
   .modal-desc {
     font-size: 15px;
     color: #666;
     margin-bottom: 20px;
   }
   .modal-actions {
     display: flex;
     align-items: center;
     gap: 15px;
   }
   .modal-actions input {
     width: 60px;
     padding: 6px;
     text-align: center;
     font-size: 16px;
   }
   .modal-actions button {
     background: #333;
     color: #fff;
     border: none;
     padding: 10px 18px;
     border-radius: 5px;
     cursor: pointer;
     transition: 0.3s;
   }
   .modal-actions button:hover {
     background: #b71c1c;
   }
   .is-divider {
       background-color: #e8e8e8;
   }

   .is-divider {
       background-color: rgba(0, 0, 0, .1);
       display: block;
       height: 3px;
       margin: 1em 0;
       max-width: 30px;
       width: 100%;
   }
   .product_meta {
       font-size: .8em;
       margin-bottom: 1em;
   }
   .product_meta>span {
       border-top: 1px dotted #ddd;
       display: block;
       padding: 5px 0;
   }
</style>



   <div class="free">
      <!-- slider-area-start -->
      <section class="slider-area pb-25">
         <div class="container">
            <div class="row justify-content-xl-end">
               <div class="col-xl-12 col-xxl-12 col-lg-12">
                  <div class="tp-slider-area p-relative">
                     <div class="swiper-container slider-active">
                        <div class="swiper-wrapper">

                           @foreach($sliders as $slide)
                           <div class="swiper-slide">
                              <div class="tp-slide-item">
                                 <!-- <div class="tp-slide-item__content">
                                    <h4 class="tp-slide-item__sub-title">Accessories</h4>
                                    <h3 class="tp-slide-item__title mb-25">Up To 
                                       <i>40% Off 
                                          <img src="{{url('/')}}/assets/theme/assets/img/icon/title-shape-02.jpg" alt="">
                                       </i> 
                                       latest Creations</h3>
                                    <a class="tp-slide-item__slide-btn tp-btn" href="shop.html">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                 </div> -->
                                 <div class="tp-slide-item__img">
                                    <img src="{{url('/')}}/uploads/sliders/{{$slide->slider_image}}" alt="{{$slide->slider_title}}">
                                 </div>
                              </div>
                           </div>
                           @endforeach

                        </div>
                     </div>
                     <div class="slider-pagination"></div>
                  </div>
               </div>
               <!-- <div class="col-xl-3 col-xxl-3 col-lg-3 d-none d-md-block"> -->
               
               {{--
               <div class="col-xl-3 col-xxl-3 col-lg-3">
                  <div class="row">
                     <div class="col-lg-12 col-md-6 col-6">
                        <div class="tpslider-banner tp-slider-sm-banner mb-30">
                           <a href="#">
                              <div class="tpslider-banner__img">
                                 <img src="{{url('/')}}/assets/theme/assets/img/sticker-1.png" alt="">
                                 <!-- <div class="tpslider-banner__content">
                                    <span class="tpslider-banner__sub-title">Hand made</span>
                                    <h4 class="tpslider-banner__title">New Modern & Stylist <br> Crafts</h4>
                                 </div> -->
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-6 col-6">
                        <div class="tpslider-banner">
                           <a href="#">
                              <div class="tpslider-banner__img">
                                 <img src="{{url('/')}}/assets/theme/assets/img/sticker-3.png" alt="">
                                 <!-- <div class="tpslider-banner__content">
                                    <span class="tpslider-banner__sub-title">Popular</span>
                                    <h4 class="tpslider-banner__title">Energy with our <br> newest collection</h4>
                                 </div> -->
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               --}}
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

<style type="text/css">
.box, .box-image, .box-text {
    transition: opacity .3s, transform .3s, background-color .3s;
}
.has-hover .bg, .has-hover [class*=image-] img {
    transition: filter .6s, opacity .6s, transform .6s, box-shadow .3s;
}
</style>


      <!-- product-area-start -->
      <section class="product-area pt-65 pb-40">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="tpsection mb-40">
                     <h4 class="tpsection__title">আমাদের পণ্য</h4>
                  </div>
               </div>
               
            </div>
            <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                  <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-2">

                     @foreach($products as $product)
                     <div class="col">
                        <div class="box has-hover tpproduct pb-15 mb-30" style="border: 1px solid #ddd;">
                           <div class="tpproduct__thumb p-relative">
                              @if($product->stock_status == "Out of Stock")
                                 <span class="tpproduct__thumb-discount">{{$product->stock_status}}</span>
                              @endif
                              
                              <!-- image -->
                              <div class="box-image">
                              @if(file_exists(public_path('/uploads/products/'.$product->img_path)) )
                              <a href="{{route('product-details', $product->id)}}">
                                 <img style="max-height: 350px;padding:20px" src="{{url('/')}}/uploads/products/{{$product->img_path}}" alt="product-thumb">
                                 {{--<img class="product-thumb-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-three/product-44.jpg" alt="product-thumb">--}}
                              </a>
                              @else
                                 <a href="{{route('product-details', $product->id)}}">
                                    <img style="max-height: 350px;border:1px solid #ddd;padding:20px" src="{{url('/')}}/uploads/blank.png" alt="product-thumb">
                                 </a>
                              @endif
                              </div>


                              <div class="tpproduct__thumb-action">
                                 <!-- <a class="comphare" href="#"><i class="fal fa-exchange"></i></a> -->
                                 <!-- <a class="quckview" href="#"><i class="fal fa-eye"></i></a> -->

                                 <a href="#quick-view"
                                    class="quick-view-btn quick-view-added"
                                    role="button"
                                    data-stock_status="{{$product->stock_status}}"
                                    aria-haspopup="dialog"
                                    aria-expanded="false"
                                    data-name="{{ $product->name }}"
                                    data-price="Price: {{$product->product_value}} Tk"
                                    data-image="{{$product->img_path}}"
                                    data-sku="{{$product->product_code}}"
                                    data-category="{{$product->category->category_name}}"
                                    data-stock_status="{{$product->stock_status}}"
                                    data-href="{{ route('add-to-cart', $product->id) }}"
                                    
                                    data-flatsome-role-button="attached">Quick View</a>

                                 <!-- <a data-product_id="{{ $product->id }}" class="wishlist" href="#"><i class="fal fa-heart"></i></a> -->
                              </div>
                           </div>
                           <div class="tpproduct__content"  style="text-align:center;">
                              <h3 class="tpproduct__title" style="margin-bottom:20px;padding:10px"><a href="{{route('product-details', $product->id)}}">{{ $product->name }}</a></h3>
                              <div class="tpproduct__priceinfo p-relative">
                                 <div class="tpproduct__priceinfo-list--" style="margin-bottom:20px;">
                                    <span>Tk {{$product->product_value}}</span>
                                 </div>

                                    @if($product->product_sell_type=='landing_page')
                                    <a class="btn btn-danger" href="{{ URL::to('products/'.$product->id.'/landing-page/'.$product->name) }}"><i class="fal fa-shopping-cart"></i> Order Now</a>
                                    @else
                                    <a class="btn btn-warning" href="{{ route('add-to-cart', $product->id) }}"><i class="fal fa-shopping-cart"></i> Add To Cart</a>
                                    @endif
                                    
                                 <!-- </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach

                  </div>
               </div>

            </div>
         </div>

      </section>
      <!-- product-area-end -->

      <!-- testimonial-area-start -->
      <section class="testimonial-area pt-65 mb-80">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="tpsection mb-35">
                     <h4 class="tpsection__title">User Feedbacks</h4>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="tptestiarrow d-flex align-items-center justify-content-end">
                     <div class="tptestiarrow__prv"><i class="far fa-long-arrow-left"></i>Prev</div>
                        <div class="tptestiarrow__nxt">Next<i class="far fa-long-arrow-right"></i></div>
                  </div>
               </div>
            </div>
            <div class="swiper-container testi-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="review-image-slide">
                        <img src="https://hffoodservice.com/wp-content/uploads/2025/07/Review-5-1-681x800.jpg.webp">
                     </div>
                  </div>

                  <div class="swiper-slide">
                     <div class="review-image-slide">
                        <img src="https://hffoodservice.com/wp-content/uploads/2025/07/Review-6-2-681x800.jpg.webp">
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="review-image-slide">
                        <img src="https://hffoodservice.com/wp-content/uploads/2025/07/Review-7-2-681x800.jpg.webp">
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="review-image-slide">
                        <img src="https://hffoodservice.com/wp-content/uploads/2025/07/Review-7-2-681x800.jpg.webp">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      {{--
      <section class="testimonial-area pt-65 mb-80">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="tpsection mb-35">
                     <h4 class="tpsection__title">User Feedbacks</h4>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="tptestiarrow d-flex align-items-center justify-content-end">
                     <div class="tptestiarrow__prv"><i class="far fa-long-arrow-left"></i>Prev</div>
                        <div class="tptestiarrow__nxt">Next<i class="far fa-long-arrow-right"></i></div>
                  </div>
               </div>
            </div>
            <div class="swiper-container testi-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tptesti text-center">
                        <div class="tptesti__icon mb-25">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="16" viewBox="0 0 22 16">
                              <image id="testi-icon-01.svg" width="22" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAQCAYAAAAS7Y8mAAABcElEQVQ4jbXUPWtVQRDG8V9uJr4mSBRM4RvYJEEMiqLYhWAjCFamEVut/A52IZAyjYXmA4igRcBYCIqNFoKFkhSCVUBQQVAQTbyyYS9clj2HiDiwnGXmmf/szu6egYhQ2F5cx1VMYA8uYLUU9tkUbmIaY3hQUlPgHg5gGffxCesNwB2Yxy28xaP8XZNWnMe1iOhGxFJEjPX5m8ZQRKxExLeImC01vcnJDJ3bBrA3FiPia0SM1+K9Hj/HT1xs6WO/ncNLXMLjmiCBJ/EOZ/B6m+DUy0M42yTo4DI+/AV0Zz7kO22i1IdTucDttIMi/hvfsYTP2bcfwxl+uML8gTeRoUk4U4C7GMmFn/SBO7ngCRyp5JzG08gP4AWuVKofx/ucUO70Bl5Vcu7iYCcnDTa0aleDvy2WinY7LYn/ZP8dnA6jZr9acjca/Fus3q3Yh6MV0bEWcLpqtZzRrYeX/1zn8axhR1+KlW/iIxbyvLTdePgHAXhADHlkJs8AAAAASUVORK5CYII="/>
                           </svg>
                        </div>
                        <div class="tptesti__content pb-5">
                           <p>“ Providing insight-driven transfor- mation to investment banks, wealth and asset mana, exchanges, Finance. Must explain to you how all this mistaken. ”
                           </p>
                        </div>
                        <div class="tptesti__avata d-flex align-items-center justify-content-center">
                           <div class="tptesti__avata-icon mr-20">
                              <img src="https://testingbot.com/free-online-tools/random-avatar/70?u=u837kfei139jm" alt="avata">
                           </div>
                           <div class="tptesti__avata-content text-start">
                              <h5 class="tptesti__avata-content-title">Miranda H. Halim</h5>
                              <p>Manager</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tptesti text-center">
                        <div class="tptesti__icon mb-25">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="16" viewBox="0 0 22 16">
                              <image id="testi-icon-01.svg" width="22" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAQCAYAAAAS7Y8mAAABcElEQVQ4jbXUPWtVQRDG8V9uJr4mSBRM4RvYJEEMiqLYhWAjCFamEVut/A52IZAyjYXmA4igRcBYCIqNFoKFkhSCVUBQQVAQTbyyYS9clj2HiDiwnGXmmf/szu6egYhQ2F5cx1VMYA8uYLUU9tkUbmIaY3hQUlPgHg5gGffxCesNwB2Yxy28xaP8XZNWnMe1iOhGxFJEjPX5m8ZQRKxExLeImC01vcnJDJ3bBrA3FiPia0SM1+K9Hj/HT1xs6WO/ncNLXMLjmiCBJ/EOZ/B6m+DUy0M42yTo4DI+/AV0Zz7kO22i1IdTucDttIMi/hvfsYTP2bcfwxl+uML8gTeRoUk4U4C7GMmFn/SBO7ngCRyp5JzG08gP4AWuVKofx/ucUO70Bl5Vcu7iYCcnDTa0aleDvy2WinY7LYn/ZP8dnA6jZr9acjca/Fus3q3Yh6MV0bEWcLpqtZzRrYeX/1zn8axhR1+KlW/iIxbyvLTdePgHAXhADHlkJs8AAAAASUVORK5CYII="/>
                           </svg>
                        </div>
                        <div class="tptesti__content pb-5">
                           <p>“We are the preferred choice by many car owners because our experience and knowledge is self-evident.For your car we will do everything – advice ”
                           </p>
                        </div>
                        <div class="tptesti__avata d-flex align-items-center justify-content-center">
                           <div class="tptesti__avata-icon mr-20">
                              <img src="https://testingbot.com/free-online-tools/random-avatar/70?u=u837kfei139pi" alt="avata">
                           </div>
                           <div class="tptesti__avata-content text-start">
                              <h5 class="tptesti__avata-content-title">Cameron William</h5>
                              <p>Head Of Idea</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tptesti text-center">
                        <div class="tptesti__icon mb-25">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="16" viewBox="0 0 22 16">
                              <image id="testi-icon-01.svg" width="22" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAQCAYAAAAS7Y8mAAABcElEQVQ4jbXUPWtVQRDG8V9uJr4mSBRM4RvYJEEMiqLYhWAjCFamEVut/A52IZAyjYXmA4igRcBYCIqNFoKFkhSCVUBQQVAQTbyyYS9clj2HiDiwnGXmmf/szu6egYhQ2F5cx1VMYA8uYLUU9tkUbmIaY3hQUlPgHg5gGffxCesNwB2Yxy28xaP8XZNWnMe1iOhGxFJEjPX5m8ZQRKxExLeImC01vcnJDJ3bBrA3FiPia0SM1+K9Hj/HT1xs6WO/ncNLXMLjmiCBJ/EOZ/B6m+DUy0M42yTo4DI+/AV0Zz7kO22i1IdTucDttIMi/hvfsYTP2bcfwxl+uML8gTeRoUk4U4C7GMmFn/SBO7ngCRyp5JzG08gP4AWuVKofx/ucUO70Bl5Vcu7iYCcnDTa0aleDvy2WinY7LYn/ZP8dnA6jZr9acjca/Fus3q3Yh6MV0bEWcLpqtZzRrYeX/1zn8axhR1+KlW/iIxbyvLTdePgHAXhADHlkJs8AAAAASUVORK5CYII="/>
                           </svg>
                        </div>
                        <div class="tptesti__content pb-5">
                           <p>“ Wualitative and quantitative data from customers on their likes, dislikes,
                              impressions, and requests about popular product. ”
                           </p>
                        </div>
                        <div class="tptesti__avata d-flex align-items-center justify-content-center">
                           <div class="tptesti__avata-icon mr-20">
                              <img src="https://testingbot.com/free-online-tools/random-avatar/70?u=u837kfei139kn" alt="avata">
                           </div>
                           <div class="tptesti__avata-content text-start">
                              <h5 class="tptesti__avata-content-title">Robertia</h5>
                              <p>CEO</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      --}}
      <!-- testimonial-area-end -->

      <!-- banner-area-start -->
      {{--
      <section class="banner-area pb-20">
        <div class="tpbanneritem__thumb mb-20">  
        <img style="width:100%;" src="{{url('/')}}/assets/theme/assets/img/banner/green-farm.jpg" alt="banner-img">
        </div>
      </section>--}}
      <!-- banner-area-end -->



      <!-- white-product-area-start -->
      <section class="white-product-area grey-bg-2 pt-20 pb-50 fix p-relative" style="background-color:#fc8934">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6 col-12">
                  <div class="tpsection mb-20">
                     <h4 class="tpsection__title">COLLECTION</h4>
                  </div>
               </div>

               {{--
               <div class="col-md-6 col-sm-6">
                  <div class="tpproductarrow d-flex align-items-center">
                     <div class="tpproductarrow__prv"><i class="far fa-long-arrow-left"></i>Prev</div>
                     <div class="tpproductarrow__nxt">Next<i class="far fa-long-arrow-right"></i></div>
                  </div>
               </div>
               --}}
            </div>
            <div class="swiper-container product-active">
               <div class="swiper-wrapper">

                  @foreach($cats as $cat)
                  @php
                     $cat_link = explode(" ", strtolower($cat->category_name));
                     $cat_link = implode("-", $cat_link);
                  @endphp
                  <div class="swiper-slide">
                     <div class="whiteproduct">
                        <div class="whiteproduct__thumb">
                           <a href="{{ route('product-category-wise', $cat_link) }}"><img style="max-height: 350px;" src="{{url('/')}}/public/uploads/categories/{{$cat->category_image}}" alt="product-thumb"></a>
                        </div>
                        <div class="whiteproduct__content d-flex justify-content-between align-items-center">
                           <div class="whiteproduct__text">
                              {{--<h5 class="whiteproduct__title"><a href="shop-details-2.html">{{ $cat->category_name }}</a></h5>--}}
                              <span>{{$cat->category_name}}</span>
                           </div>
                           <div class="whiteproduct__rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <!-- <span>({{$cat->category_name}})</span> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach


               </div>
            </div>
         </div>

         {{--
         <div class="banner-shape">
            <img src="{{url('/')}}/assets/theme/assets/img/banner/green-farm-dates.png" alt="shape" class="banner-shape-primary">
            <img src="{{url('/')}}/assets/theme/assets/img/banner/product-shape-02.png" alt="shape" class="banner-shape-secondary">
         </div>
         --}}
      </section>
      <!-- white-product-area-end -->



   </div>


<!-- Quick View Modal -->
<!-- Quick View Modal -->
<div id="quickViewModal" class="modal" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <span class="close-another">&times;</span> -->
      <div class="modal-body">
        
        <!-- Left: Product Image -->
        <div class="modal-image">
          <img id="qvImage" src="" alt="Product Image">
        </div>

        <!-- Right: Product Info -->
        <div class="modal-info">
          <h2 id="qvName"></h2>
          <div class="is-divider small"></div>
          <p class="modal-price" id="qvPrice"></p>
          <p class="modal-desc" id="qvDescription"></p>

          <div class="modal-actions">
            <form id="modal-form" method="GET" action="">
               <input type="number" id="qvQty" value="1" min="1">
               <button type="submit" id="addToCartBtn">🛒 Add to Cart</button>
            </form>
          </div>
          <button style="background-color:#333;color:#fff;margin-top:20px;margin-bottom:30px;" type="submit" name="wc-quick-buy-now" value="168027" class="btn btn-default">ক্যাশ অন ডেলিভারিতে অর্ডার করুন</button>

         <div class="product_meta">
            <span class="sku_wrapper">Stock Status: <span id="stock-status"></span></span>
            <span class="sku_wrapper">SKU: <span id="skuname"></span></span>
            <span class="posted_in">Category: <span id="catname"></span></span>
         </div>
        </div>



      </div>
    </div>
  </div>
</div>

@endsection
@section('custom_js')
<script type="text/javascript">
   $(".wishlist").on("click", function(e) {
      e.preventDefault();
      // var pro_id = $(this).data("product_id");
      // alert(pro_id);

      let productId = $(this).data("product_id"); // Get the product ID from the data-id attribute

      $.ajax({
        url: '{{ route("wishlist.add") }}', // Laravel route for adding to wishlist
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
            product_id: productId,
        },
        success: function(response) {
            if (response.status === 'success') {
                alert(response.message); // Success message
            } else {
                alert(response.message); // Error message
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText); // Log the error
            alert('Something went wrong!');
        }
      });
   });

   $("#addToCartBtn").on("click", function(e) {
      e.preventDefault();

      alert("ami asi");
   });
</script>
<script type="text/javascript">
$(document).ready(function(){
  // Open modal with product data
  $(".quick-view-btn").click(function(){
    $("#qvName").text($(this).data("name"));
    $("#qvPrice").text($(this).data("price"));
    $("#qvDescription").html($(this).data("description"));

    $("#catname").text($(this).data("category"));
    $("#skuname").text($(this).data("sku"));
    $("#stock-status").text($(this).data("stock_status"));
    $("#modal-form").attr("action", $(this).data("href"));

    var img_link = "uploads/products/"+$(this).data("image");

    console.log($(this).data("category"));
    console.log($(this).data("sku"));
    $("#qvImage").attr("src", img_link);
    $("#quickViewModal").fadeIn();
  });

  // Close modal
  $(".close-another").on("click", function(){
    $("#quickViewModal").fadeOut();
  });

  // Outside click close
  $(window).click(function(e){
    if($(e.target).is("#quickViewModal")) {
      $("#quickViewModal").fadeOut();
    }
  });
});
</script>
@endsection