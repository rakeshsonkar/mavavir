<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Welcome to Mahavir Global INC.  </title>
      <!-- favicons Icons -->
      <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
      <link rel="manifest" href="assets/images/favicons/site.webmanifest">
      <!-- fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
      <link
         href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap"
         rel="stylesheet">
         <link rel="stylesheet" href="{{url('public/frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/animate/animate.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/animate/custom-animate.css') }}">
         <link rel="stylesheet" href="{{asset('public/fronend/assets/vendors/fontawesome/css/all.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/jarallax/jarallax.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/nouislider/nouislider.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/nouislider/nouislider.pips.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/odometer/odometer.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/swiper/swiper.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/ogenix-icons/style.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/tiny-slider/tiny-slider.min.css') }}">

         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/reey-font/stylesheet.css') }}"> 
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/owl-carousel/owl.carousel.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/owl-carousel/owl.theme.default.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/bxslider/jquery.bxslider.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/vegas/vegas.min.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/jquery-ui/jquery-ui.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/timepicker/timePicker.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/nice-select/nice-select.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/css/mahavir.css') }}">
         <link rel="stylesheet" href="{{asset('public/frontend/assets/css/mahavir-responsive.css') }}">
   <style>
   #loadsubcategory{
      position: absolute;
    left: 273px;
   }
   #loadproduct{
      position: absolute;
    left: 545px;
   }
   .dropdowncategory ::hover {
      display: none;
   }
   
   </style>
      </head>
   
   <body class="custom-cursor">
      <div class="custom-cursor__cursor"></div>
      <div class="custom-cursor__cursor-two"></div>
      <div class="preloader">
         <div class="preloader__image"></div>
      </div>
      <!-- /.preloader -->
      <div class="page-wrapper">
      <header class="main-header-three">
         <div class="main-header-three__wrapper">
            <div class="container">
               <div class="main-header-three__wrapper-inner clearfix">
                  <div class="main-header-three__logo">
                     <a href="#"><img src="public/frontend/assets/images/resources/logo-3.png" class="img_lg" alt=""></a>
                  </div>
                  <div class="main-header-three__right">
                     <div class="main-header-three__top">
                        <div class="main-header-three__top-inner">
                           <div class="main-header-three__top-right">
                              <ul class="list-unstyled main-header-three__contact-list">
                                 <li>
                                    <div class="icon">
                                       <i class="fas fa-mobile"></i>
                                    </div>
                                    <div class="text">
                                       <p><a href="tel:+">Phone :+91 99 9661 7999
92 1509 9998
</a></p>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="icon">
                                       <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="text">
                                       <p><a href="mailto:info@mgiglobal.com">
                                          info@mgiglobal.com</a>
                                       </p>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="main-header-three__bottom">
                        <nav class="main-menu main-menu-three">
                           <div class="main-menu-three__wrapper">
                              <div class="main-menu-three__wrapper-inner">
                                 <div class="main-menu-three__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                       <li>
                                          <a href="{{url('/home')}}">Home </a>
                                       </li>
                                       <li>
                                          <a href="{{url('/aboutus')}}">About Us</a>
                                       </li>
                                       <li class="dropdowncategory">
                                          <a href="#">Our Products</a>
                                          <ul class="sub-menu" id="loadcategory">
                                             
                                          </ul>
                                          <ul class="sub-menu" id="loadsubcategory"></ul>
                                          <ul class="sub-menu" id="loadproduct"></ul>
                                       <li>
                                          <a href="{{url('/certification')}}">Certifications</a>
                                       </li>
                                       <li>
                                          <a href="{{url('/infrastructure')}}">Infrastructure</a>
                                       </li>
                                       <li>
                                          <a href="{{url('/brands')}}">Brands</a>
                                       </li>
                                       <li>
                                          <a href="{{url('/gallery')}}">Gallery</a>
                                       </li>
                                       <li>
                                          <a href="{{url('/recipes')}}">Recipes</a>
                                       </li>
                                       <li>
                                          <a href="{{url('/blog')}}">Blog</a>
                                       </li>

                                       <li>
                                          <a href="{{url('/contact')}}">Contact Us</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="stricky-header stricked-menu main-menu main-menu-three">
         <div class="sticky-header__content"></div>
         <!-- /.sticky-header__content -->
      </div>
      <!-- /.stricky-header -->