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
                  
                  @foreach($sug_products as $product)
                  <div class="swiper-slide">

                        <div class="box tpproduct pb-15 mb-30" style="border: 1px solid #ddd;">
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

                                 <a href=""
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
                                    data-href="{{ route('direct-cash-on-delivery', $product->id) }}"
                                    data-product-id-m="{{$product->id}}"
                                    
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