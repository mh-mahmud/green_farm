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
                  @php
                     
                     if(!empty($product->unit_wise_price)) {
                        $pro_unit = json_decode($product->unit_wise_price, true);
                        $pro_values = !empty($pro_unit) ? array_filter($pro_unit) : null;
                        $pro_values = json_encode($pro_values);
                     }
                     else {
                        $pro_values = null;
                     }

                  @endphp
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

                              {{--
                              <div class="tpproduct__thumb-action">
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
                                    data-unitweight="{{ $pro_values }}"
                                    data-unitdata="{{$units}}"
                                    
                                    data-flatsome-role-button="attached">Quick View</a>
                              </div>
                              --}}
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


<!-- Quick View Modal -->
<div id="quickViewModal" class="modal" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <span class="close-another">&times;</span> -->
      <div class="modal-body">
        
        <div class="row">
           <div class="col-md-6">
           <!-- Left: Product Image -->
           <div class="modal-image">
             <img id="qvImage" src="" alt="Product Image">
           </div>
           </div>

           <div class="col-md-6">
           <!-- Right: Product Info -->
           <div class="modal-info">
             <h2 id="qvName"></h2>
             <div class="is-divider small"></div>


             <div id="errmsg" style="display:none;color:#DC4C64;font-size:13px;">please, select a weight from the list</div>
             <div id="weight-container" style="margin-bottom:20px"></div>

             <p class="modal-price" id="qvPrice"></p>
             <p class="modal-desc" id="qvDescription"></p>

             <div class="modal-actions">
               <form method="POST" action="{{ route('add-to-cart-modal') }}">
                  @csrf
                  <input id="modal_product_id" type="hidden" name="modal_product_id" value="">
                  <input type="hidden" id="cart-weight" name="cart_weight">
                  <input type="hidden" id="cart-val" name="cart_value">
                  <input name="quantity" type="number" id="qvQty" value="1" min="1">
                  <button type="submit" id="addToCartBtn">🛒 Add to Cart</button>
               </form>
             </div>

            <!-- <form id="dcashondelivery" method="GET" action="">
               <button id="direct" style="background-color:#333;color:#fff;margin-top:20px;margin-bottom:30px;" type="submit" name="wc-quick-buy-now" value="168027" class="btn btn-default">ক্যাশ অন ডেলিভারিতে অর্ডার করুন</button>
            </form> -->

            <form method="POST" action="{{ route('prodetails-cash-on-delivery') }}">
               @csrf
               <input id="d-productid" type="hidden" name="product_id" value="">
               <input id="unit-quantity" type="hidden" name="quantity" value="">
               <input id="unit-weight" type="hidden" name="weight" value="">
               <input id="unit-price" type="hidden" name="price" value="">
               <button id="direct" style="background-color:#333;color:#fff;margin-top:20px;margin-bottom:30px;" type="submit" name="wc-quick-buy-now" value="168027" class="btn btn-default">ক্যাশ অন ডেলিভারিতে অর্ডার করুন</button>
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
  </div>
</div>

