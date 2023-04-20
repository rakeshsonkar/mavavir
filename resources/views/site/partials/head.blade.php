<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="HTML5 Template" />
    <meta
      name="description"
      content="Rice - Industry & Factory HTML Template"
    />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>Rice - Industry & Factory</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('site/assets/images/favicon.png') }}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/bootstrap.min.css') }}" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/animate.css') }}" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/owl.carousel.css') }}" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/font-awesome.css') }}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/themify-icons.css') }}" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/flaticon.css') }}" />

    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/revolution/css/layers.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/revolution/css/settings.css') }}" />

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/prettyPhoto.css') }}" />

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/shortcodes.css') }}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/main.css') }}" />

    <!--Color Switcher Mockup-->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/color-switcher.css') }}" />

    <!--Color Themes-->
    <link
      id="switcher-color"
      href="{{ asset('site/assets/css/colors/default-color.css') }}"
      rel="stylesheet"
    />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/responsive.css') }}" />
    @stack('stylesheets')  
</head>

  <body>
    <!--page start-->
    <div class="page">
      <!-- preloader start -->
      <!--<div id="preloader">-->
      <!--  <div id="status">&nbsp;</div>-->
      <!--</div>-->
      <!-- preloader end -->


<!--header start-->
<header id="ttm-home" class="header ttm-header-style-classic">
        <!-- ttm-topbar-wrapper -->
        <div
          class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix"
        >
          <div class="container">
            <div class="ttm-topbar-content">
              <ul class="top-contact text-left">
                <li class="list-inline-item">
                  Your Trusted 24 Hours Service Provider!
                </li>
              </ul>
              <div class="topbar-right text-right">
                <div class="ttm-social-links-wrapper list-inline">
                  <ul class="social-icons">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="ttm-rt-contact float-right">
                  <div class="ttm-custombutton ttm-btn-bgcolor-skincolor">
                    <a href="contact-us.html">Get a Quote</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ttm-topbar-wrapper end -->
        <!-- ttm-header-wrap -->
        <div class="ttm-header-wrap">
          <!-- ttm-stickable-header-w -->
          <div
            id="ttm-stickable-header-w"
            class="ttm-stickable-header-w clearfix"
          >
            <div id="site-header-menu" class="site-header-menu">
              <div class="site-header-menu-inner ttm-stickable-header">
                <div class="container">
                  <!-- site-branding -->
                  <div class="site-branding">
                    <a
                      class="home-link"
                      href="index.html"
                      title="Rice"
                      rel="home"
                    >
                      <img
                        id="logo-img"
                        class="img-center"
                        src="site/assets/images/logo-img.png"
                        alt="logo-img"
                      />
                    </a>
                  </div>
                  <!-- site-branding end -->
                  <!-- header-icins -->
                  <div class="ttm-header-icons">
                    <!-- <span class="ttm-header-icon ttm-header-cart-link">
                                        <a href="#"><i class="fa fa-shopping-cart"></i>
                                            <span class="number-cart">0</span>
                                        </a>
                                    </span> -->
                    <div class="ttm-header-icon ttm-header-search-link">
                      <a href="#"><i class="ti ti-search"></i></a>
                      <div class="ttm-search-overlay">
                        <form
                          method="get"
                          class="ttm-site-searchform"
                          action="#"
                        >
                          <div class="w-search-form-h">
                            <div class="w-search-form-row">
                              <div class="w-search-input">
                                <input
                                  type="search"
                                  class="field searchform-s"
                                  name="s"
                                  placeholder="Type Word Then Enter..."
                                />
                                <button type="submit">
                                  <i class="ti ti-search"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- header-icons end -->
                  <!--site-navigation -->
                  <div id="site-navigation" class="site-navigation">
                    <div class="ttm-menu-toggle">
                      <input type="checkbox" id="menu-toggle-form" />
                      <label
                        for="menu-toggle-form"
                        class="ttm-menu-toggle-block"
                      >
                        <span class="toggle-block toggle-blocks-1"></span>
                        <span class="toggle-block toggle-blocks-2"></span>
                        <span class="toggle-block toggle-blocks-3"></span>
                      </label>
                    </div>
                    <nav id="menu" class="menu">
                      <ul class="dropdown">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li>
                          <a href="#">About Us</a>
                          <ul>
                            <li><a href="whyRice.html">why Rice</a></li>
                            <li>
                              <a href="overvision.html">Vision & mission</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="menufacturing.html"
                            >Manufacturing facilities</a
                          >
                          <!--<ul>-->
                          <!--    <li><a href="fabrication.html">Fabrication shop</a></li>-->
                          <!--    <li><a href="machine.html">Machine shop</a></li>-->
                          <!--    <li><a href="assemble.html">Assemble shop</a></li>-->
                          <!--    <li><a href="packaging.html">Packaging & dispatch-->
                          <!--            Products</a></li>-->
                          <!--</ul>-->
                        </li>
                        <li>
                          <a href="product.html">Products</a>
                          <ul>
                            <li>
                              <a href="continuous_solvent_extraction_plant.html"
                                >Continuous Solvent Extraction Plant</a
                              >
                            </li>
                            <li>
                              <a href="non_edible.html"
                                >Non Edible Oil Refinery Machinery</a
                              >
                            </li>
                            <li>
                              <a href="oil_recovery_plant.html"
                                >Oil Recovery Plant</a
                              >
                            </li>
                            <li>
                              <a href="oil_refineries.html" target="_blank"
                                >Oil Refineries</a
                              >
                              <ul>
                                <li>
                                  <a
                                    href="chemical_&_physical_oil_refinery.html"
                                    >Chemical & Physical Oil Refinery</a
                                  >
                                </li>
                                <li>
                                  <a href="edible_oil_refinery.html"
                                    >Edible Oil Refinery</a
                                  >
                                </li>
                                <li>
                                  <a href="oil_mill_refineries.html"
                                    >Oil Mill Refineries</a
                                  >
                                </li>
                                <li>
                                  <a href="oil_processing_plant.html"
                                    >Oil Processing Plant</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="refinery_plant.html">Refinery Plant</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="quality.html">Quality</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                      </ul>
                    </nav>
                  </div>
                  <!-- site-navigation end-->
                </div>
              </div>
            </div>
          </div>
          <!-- ttm-stickable-header-w end-->
        </div>
        <!--ttm-header-wrap end -->
      </header>
      <!--header end-->

