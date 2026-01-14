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

   .tpproduct {
     border: 1px solid #ddd;
     transition: all 0.3s ease-in-out; /* smooth hover animation */
   }

   .tpproduct:hover {
     box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15); /* shadow effect */
     transform: translateY(-10px); /* optional: lifts the box slightly */
     border-color: #ccc; /* optional: changes border on hover */
   }
</style>

   <div class="free">
      <!-- breadcrumb-area -->
      {{--<section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" style="background-color:#FFE0B2;">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <h2 class="tp-" style="text-align:center;">{{ strtoupper($cat) }}</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>--}}
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
                        <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1">

                     @foreach($products as $product)
                     <div class="col">
                        <div class="box tpproduct pb-15 mb-30">
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

                                 <a class="quick-view-btn quick-view-added"
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
                                    data-href="{{ route('direct-cash-on-delivery', $product->id) }}"
                                    data-product-id-m="{{$product->id}}"
                                    
                                    data-flatsome-role-button="attached">Quick View</a>

                                 <!-- <a data-product_id="{{ $product->id }}" class="wishlist" href="#"><i class="fal fa-heart"></i></a> -->
                              </div>
                           </div>
                           <div class="tpproduct__content"  style="text-align:center;">
                              <h3 class="tpproduct__title" style="margin-bottom:20px;padding:10px"><a href="{{route('product-details', $product->id)}}">{{ $product->name }}</a></h3>
                              <div class="tpproduct__priceinfo p-relative">
                                 <div class="tpproduct__priceinfo-list--" style="margin-bottom:0px;">
                                    <span>Tk {{$product->product_value}}</span>
                                 </div>

                                    @if($product->product_sell_type=='landing_page')
                                    <a class="btn btn-danger" href="{{ URL::to('products/'.$product->id.'/landing-page/'.$product->name) }}"><i class="fal fa-shopping-cart"></i> Order Now</a>
                                    @else
                                    {{--<a class="btn btn-warning" href="{{ route('add-to-cart', $product->id) }}"><i class="fal fa-shopping-cart"></i> Add To Cart</a>--}}
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
               <form method="POST" action="{{ route('add-to-cart-modal') }}">
                  @csrf
                  <input id="modal_product_id" type="hidden" name="modal_product_id" value="">
                  <input name="quantity" type="number" id="qvQty" value="1" min="1">
                  <button type="submit" id="addToCartBtn">🛒 Add to Cart</button>
               </form>
             </div>

            <form id="dcashondelivery" method="GET" action="">
               <button style="background-color:#333;color:#fff;margin-top:20px;margin-bottom:30px;" type="submit" name="wc-quick-buy-now" value="168027" class="btn btn-default">ক্যাশ অন ডেলিভারিতে অর্ডার করুন</button>
            </form>

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
      $(document).ready(function() {
         $('.cat-menu__category .category-menu').css('display', 'none');
      })
   </script>
   <script type="text/javascript">
      $(document).ready(function() {
         // Open modal with product data
         $(".quick-view-btn").click(function(e) {
            e.preventDefault();

            $("#qvName").text($(this).data("name"));
            $("#qvPrice").text($(this).data("price"));
            $("#qvDescription").html($(this).data("description"));

            $("#catname").text($(this).data("category"));
            $("#skuname").text($(this).data("sku"));
            $("#stock-status").text($(this).data("stock_status"));
            $("#dcashondelivery").attr("action", $(this).data("href"));
            $("#modal_product_id").attr("value", $(this).data("product-id-m"));

            var base = "{{ url('/') }}";
            var img_link = base+"/uploads/products/"+$(this).data("image");

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