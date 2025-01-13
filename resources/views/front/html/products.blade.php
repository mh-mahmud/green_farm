@extends('front.html.master')
@section('content')

   <div class="free">
      <!-- breadcrumb-area -->
      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" style="background-color:#FFE0B2;">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <h2 class="tp-" style="text-align:center;">{{ strtoupper($cat) }}</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- product-filter-area-start -->
      <div class="product-filter-area pt-65 pb-80">
         <div class="container">
            <div class="product-filter-content mb-40">
               <div class="row align-items-center">
                  <div class="col-sm-6">
                     <div class="product-item-count">
                        <span>Total <b>{{ $count }}</b> Items On List</span>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="product-navtabs d-flex justify-content-end align-items-center">
                        <div class="tp-shop-selector">
                           <select>
                              <option>Show 30</option>
                              <option>Show 50</option>
                              <option>Show 100</option>
                              <option>Show 200</option>
                           </select>
                        </div>
                        <div class="tpproductnav tpnavbar product-filter-nav">
                           <nav>
                              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                 <button class="nav-link" id="nav-all-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                    aria-selected="true"><i class="fal fa-list-ul"></i></button>
   
                                 <button class="nav-link active" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                                    aria-selected="false"><i class="fal fa-th"></i></button>
                              </div>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mb-50">
               <div class="col-lg-12">
                  <div class="tab-content" id="nav-tabContent">
                     {{--<div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="row mb-40">
                           <div class="col-lg-4 col-md-12">
                              <div class="tpproduct__thumb">
                                 <div class="tpproduct__thumbitem p-relative">
                                    <a href="shop-details.html">
                                       <img src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-21.jpg" alt="product-thumb">
                                       <img class="thumbitem-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-22.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-12">
                              <div class="filter-product ml-20 pt-30">
                                 <h3 class="filter-product-title"><a href="shop-details.html">Miko Wooden Bluetooth Shirt</a></h3>
                                 <div class="tpproduct__ammount">
                                    <span>$31.00</span>
                                    <del>$25.00</del>
                                 </div>
                                 <div class="tpproduct__rating mb-15">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="far fa-star"></i></a>
                                       </li>
                                       <li>
                                          <span>(81)</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                 <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                 <div class="tpproduct__action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-40">
                           <div class="col-lg-4 col-md-12">
                              <div class="tpproduct__thumb">
                                 <div class="tpproduct__thumbitem p-relative">
                                    <a href="shop-details-2.html">
                                       <img src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-23.jpg" alt="product-thumb">
                                       <img class="thumbitem-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-24.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-12">
                              <div class="filter-product ml-20 pt-30">
                                 <h3 class="filter-product-title"><a href="shop-details.html">Gorgeous Aluminum Table</a></h3>
                                 <div class="tpproduct__ammount">
                                    <span>$31.00</span>
                                    <del>$25.00</del>
                                 </div>
                                 <div class="tpproduct__rating mb-15">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="far fa-star"></i></a>
                                       </li>
                                       <li>
                                          <span>(81)</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                 <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                 <div class="tpproduct__action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-40">
                           <div class="col-lg-4 col-md-12">
                              <div class="tpproduct__thumb">
                                 <div class="tpproduct__thumbitem p-relative">
                                    <a href="shop-details-2.html">
                                       <img src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-25.jpg" alt="product-thumb">
                                       <img class="thumbitem-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-26.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-12">
                              <div class="filter-product ml-20 pt-30">
                                 <h3 class="filter-product-title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a></h3>
                                 <div class="tpproduct__ammount">
                                    <span>$31.00</span>
                                    <del>$25.00</del>
                                 </div>
                                 <div class="tpproduct__rating mb-15">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="far fa-star"></i></a>
                                       </li>
                                       <li>
                                          <span>(81)</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                 <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                 <div class="tpproduct__action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-40">
                           <div class="col-lg-4 col-md-12">
                              <div class="tpproduct__thumb">
                                 <div class="tpproduct__thumbitem p-relative">
                                    <a href="#">
                                       <img src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-27.jpg" alt="product-thumb">
                                       <img class="thumbitem-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-28.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-12">
                              <div class="filter-product ml-20 pt-30">
                                 <h3 class="filter-product-title"><a href="shop-details.html">Progash Durable Granite Hat</a></h3>
                                 <div class="tpproduct__ammount">
                                    <span>$31.00</span>
                                    <del>$25.00</del>
                                 </div>
                                 <div class="tpproduct__rating mb-15">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="far fa-star"></i></a>
                                       </li>
                                       <li>
                                          <span>(81)</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                 <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                 <div class="tpproduct__action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>--}}

                     <div class="tab-pane fade show active" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                        <div
                           class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct">

                           @foreach($products as $product)
                           <div class="col" style="border:1px solid #ddd;padding:20px;margin: 0 30px 30px 0;border-radius:5px">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="{{ route('product-details', $product->id) }}">
                                          <img  style="max-height:300px" src="{{url('/')}}/uploads/products/{{$product->img_path}}" alt="product-thumb">
                                          {{--<img class="thumbitem-secondary" src="{{url('/')}}/assets/theme/assets/img/product/home-two/product-22.jpg" alt="product-thumb">--}}
                                       </a>

                                       {{--
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="{{ route('add-to-cart', $product->id) }}"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="{{ route('product-details', $product->id) }}"><i class="fal fa-eye"></i></a>
                                             <a href="{{ route('add-to-wishlist', $product->id) }}"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                       --}}
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="{{ route('product-details', $product->id) }}">{{$product->name}}</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>Tk. {{ $product->product_value }}</span>
                                       </div>
                                    </div>
                                    <div style="margin-top: 20px;">
                                       <a style="width:100%;" class="btn btn-warning" href="{{ route('add-to-cart', $product->id) }}"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                                    </div>
                                    
                                 </div>
                                 
                              </div>
                           </div>
                           @endforeach

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="basic-pagination text-center">
                     <nav>
                        @include('components.front_pagination', ['paginator' => $products])
                      </nav>
                  </div>
               </div>
            </div>
          </div>
      </div>
      <!-- product-filter-area-end -->
   </div>

@endsection
@section('custom_js')
   <script type="text/javascript">
      $(document).ready(function() {
         $('.cat-menu__category .category-menu').css('display', 'none');
      })
   </script>
@endsection