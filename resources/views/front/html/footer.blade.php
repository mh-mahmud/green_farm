   <!-- footer-area-start -->

   <footer>
      <div class="footer-area theme-bg pt-65">
         <div class="container">
            <div class="main-footer pb-15 mb-30">
               <div class="row">
                  <div class="col-lg-e3 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-1 mb-40">
                        <div class="footer-logo mb-30">
                           <a href="{{ route('index') }}"><img style="width:120px" src="{{url('/')}}/assets/theme/assets/img/logo/logo.webp" alt="Green Farm Logo"></a>
                        </div>
                        <div class="footer-content">
                           {!! $footer_msg !!}
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-2 ml-30 mb-40">
                        <h4 class="footer-widget__title mb-30">Information</h4>
                        <div class="footer-widget__links">
                           <ul>
                              <!-- <li><a href="#">Custom Service</a></li> -->
                              <li><a href="{{ route('faq') }}">গ্রাহক সেবা</a></li>
                              <li><a href="{{ route('track-your-order') }}">Ordering Tracking</a></li>
                              <li><a href="{{ route('contact-us') }}">Contacts</a></li>
                              <!-- <li><a href="#">Events</a></li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-3 mb-40">
                        <h4 class="footer-widget__title mb-30">My Account</h4>
                        <div class="footer-widget__links">
                           <ul>
                              <li><a href="{{ route('about-us') }}">About Us</a></li>
                              <li><a href="{{ route('return-policy') }}">রিটার্ন পলিসি</a></li>
                              <!-- <li><a href="#">Discount</a></li> -->
                              <!-- <li><a href="#">Custom Service</a></li> -->
                              <li><a href="{{ route('terms-and-conditions') }}">রিফান্ড পলিসি</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  {{--
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-4 mb-40">
                        <h4 class="footer-widget__title mb-30">Social Network</h4>
                        <div class="footer-widget__links">
                           <ul>
                              <li><a target="_blank" href="{{ $set_fb }}"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                              <li><a target="_blank" href="{{ $set_twitter }}"><i class="fab fa-twitter"></i>Twitter</a></li>
                              <li><a target="_blank" href="{{ $set_youtube }}"><i class="fab fa-youtube"></i>Youtube</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  --}}
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-4 mb-40">
                        <h4 class="footer-widget__title mb-30">Like Us On Facebook</h4>
                        <div class="footer-widget__links">
                           <!-- <iframe src="https://www.facebook.com/profile.php?id=61558593165818"></iframe> -->
                              <div id="fb-root"></div>
                              <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0"></script>

                              <div class="fb-page" 
                                   data-href="https://www.facebook.com/profile.php?id=61558593165818" 
                                   data-tabs="timeline" 
                                   data-width="400" 
                                   data-height="100" 
                                   data-small-header="false" 
                                   data-adapt-container-width="true" 
                                   data-hide-cover="false" 
                                   data-show-facepile="true">
                              </div>
                        </div>
                     </div>
                  </div>

                  
                  {{--
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-5 mb-40">
                        <h4 class="footer-widget__title mb-30">Get Newsletter</h4>
                        <p>Get on the list and get 10% off your first order!</p>
                        <div class="footer-widget__newsletter">
                           <form action="#">
                              <input required type="email" name="email_subs" placeholder="Enter email address">
                              <button class="btn btn-danger">Subscribe Now &nbsp;<i class="fal fa-long-arrow-right"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
                  --}}
                  

               </div>
            </div>

            {{--
            <div class="footer-cta pb-20">
               <div class="row justify-content-between">
                  <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6">
                     <div class="footer-cta__contact">
                        <div class="footer-cta__icon">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="footer-cta__text">
                           <a href="tel:0123456">980. 029. 666. 99</a>
                           <span>Working 24/7</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-8 col-md-8 col-sm-6">
                     <div class="footer-cta__source">
                        <div class="footer-cta__source-content">
                           <h4 class="footer-cta__source-title">Download App on Mobile</h4>
                           <p>15% discount on your first purchase</p>
                        </div>
                        <div class="footer-cta__source-thumb">
                           <a href="#"><img src="{{url('/')}}/assets/theme/assets/img/footer/f-google.jpg" alt="google"></a>
                           <a href="#"><img src="{{url('/')}}/assets/theme/assets/img/footer/f-app.jpg" alt="app"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            --}}
         </div>
         <div class="footer-copyright" style="background-color:#fc8934">
         <!-- <div class="footer-copyright" style="background-color:#4FBB7A"> -->
            <div class="container">
               <div class="row align-items-center" style="font-size:14px;">
                  <div class="col-xl-6 col-lg-7 col-md-5">
                     <div class="footer-">
                        <span>Copyright 2025 <a href="{{ route('index') }}">&copy; Green Farm</a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-5 col-md-7">
                     <div class="footer-copyright__brand">
                        Powered by <a target="_blank" href="https://foxtechnologies.net">Fox Technologies</a>.</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer-area-end -->