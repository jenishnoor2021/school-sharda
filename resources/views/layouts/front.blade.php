<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<!-- Mirrored from modinathemes.com/kidza-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2026 11:24:14 GMT -->

<head>
   @include('includes.head')
</head>

<body>
   <!-- Preloader Start -->
   <div id="preloader" class="preloader">
      <div class="animation-preloader">
         <div class="spinner-block">
            <div class="spinner">
            </div>
            <img src="{{asset('assets/img/logo/logo.png')}}" alt="img">
         </div>
         <div class="txt-loading">
            <span data-text-preloader="S" class="letters-loading">
               S
            </span>
            <span data-text-preloader="H" class="letters-loading">
               H
            </span>
            <span data-text-preloader="A" class="letters-loading">
               A
            </span>
            <span data-text-preloader="R" class="letters-loading">
               R
            </span>
            <span data-text-preloader="D" class="letters-loading">
               D
            </span>
            <span data-text-preloader="A" class="letters-loading">
               A
            </span>
         </div>
         <div class="txt-loading">
            <span data-text-preloader="V" class="letters-loading">
               V
            </span>
            <span data-text-preloader="I" class="letters-loading">
               I
            </span>
            <span data-text-preloader="D" class="letters-loading">
               D
            </span>
            <span data-text-preloader="H" class="letters-loading">
               H
            </span>
            <span data-text-preloader="Y" class="letters-loading">
               Y
            </span>
            <span data-text-preloader="A" class="letters-loading">
               A
            </span>
            <span data-text-preloader="L" class="letters-loading">
               L
            </span>
            <span data-text-preloader="A" class="letters-loading">
               A
            </span>
            <span data-text-preloader="Y" class="letters-loading">
               Y
            </span>
            <span data-text-preloader="A" class="letters-loading">
               A
            </span>
         </div>
         <p class="text-center">Loading</p>
      </div>
      <div class="loader">
         <div class="row">
            <div class="col-3 loader-section section-left">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
               <div class="bg"></div>
            </div>
         </div>
      </div>
   </div>

   <!-- Back To Top Start -->
   <button id="back-top" class="back-to-top">
      <i class="far fa-arrow-up"></i>
   </button>

   <!-- MouseCursor Start -->
   <div class="mouseCursor cursor-outer"></div>
   <div class="mouseCursor cursor-inner"></div>

   <!-- Offcanvas Area Start -->
   <div class="fix-area">
      <div class="offcanvas__info">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo">
                     <a href="{{ url('/') }}">
                        <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo-img">
                     </a>
                  </div>
                  <div class="offcanvas__close">
                     <button>
                        <i class="fas fa-times"></i>
                     </button>
                  </div>
               </div>
               <div class="mobile-menu fix mt-3"></div>
               <div class="social-icon d-flex align-items-center">
                  <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                  <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                  <a href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                  <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
               </div>

               <div class="offcanvas__contact">
                  <h3>Contact Us</h3>
                  <ul class="contact-list">
                     <li>
                        <div class="icon">
                           <i class="far fa-phone-alt"></i>
                        </div>
                        <div class="content">
                           <p>Call Us</p>
                           <h4><a href="tel:+917861988622">+91 78619 88622</a></h4>
                        </div>
                     </li>
                     <li>
                        <div class="icon">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="content">
                           <p>Send Email</p>
                           <h4><a href="mailto:support@shardavidhyalya.com">support@shardavidhyalya.com</a></h4>
                        </div>
                     </li>
                     <li>
                        <div class="icon">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                           <p>Location</p>
                           <h4>
                              <a href="https://maps.app.goo.gl/JKNTHdowWxLR4QNH9">Jalaram Society 3, Sadar patel circle, Model Town Rd, Dumbhal, Parvat Patiya, Surat, Gujarat 395010</a>
                           </h4>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas__overlay"></div>

   <!-- Header Section Start -->
   <header class="header-section">
      @include('includes.header')
   </header>
   <!-- header area end here -->

   <!-- Sidebar Area Here -->

   @yield('content')

   <footer class="footer-section">
      @include('includes.footer')
   </footer>

   <!--<< All JS Plugins >>-->
   <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
   <!--<< Bootstrap Js >>-->
   <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
   <!--<< Nice Select Js >>-->
   <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
   <!--<< Odometer Js >>-->
   <script src="{{asset('assets/js/odometer.min.js')}}"></script>
   <!--<< Appear Js >>-->
   <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
   <!--<< Swiper Slider Js >>-->
   <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
   <!--<< MeanMenu Js >>-->
   <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
   <!--<< Magnific Popup Js >>-->
   <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
   <!--<< Wow Animation Js >>-->
   <script src="{{asset('assets/js/wow.min.js')}}"></script>
   <!--<< Gsap Animation Js >>-->
   <script src="{{asset('assets/js/gsap.min.js')}}"></script>
   <!--<< ScrollTrigger Js >>-->
   <script src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>
   <!--<< SplitText Js >>-->
   <script src="{{asset('assets/js/SplitText.min.js')}}"></script>
   <!--<< splitType Js >>-->
   <script src="{{asset('assets/js/splitType.js')}}"></script>
   <!--<< Main.js >>-->
   <script src="{{asset('assets/js/main.js')}}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

   <script>
      var targetDiv = document.getElementById("displayhide");
      $(document).on('click', '#hidAlert', function() {
         targetDiv.style.display = "none";
      });
   </script>
   <script>
      $(document).ready(function() {
         $("#contact_form").validate();
         $("#inquiry_form").validate();
         $("#admission_form").validate();
         $("#career_form").validate();
         $("#appoinment_form").validate();
      });
   </script>
   @yield('script')
</body>

<!-- Mirrored from modinathemes.com/kidza-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2026 11:24:48 GMT -->

</html>