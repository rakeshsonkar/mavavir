@include('frontend.header')
<!--Page Header Start-->
<section class="page-header">
   <div class="page-header-bg" style="background-image:url(public/frontend/assets/images/backgrounds/page-header-bg-certificate.jpg)"></div>
   <div class="page-header__ripped-paper"
      style="background-image: url(public/frontend/assets/images/shapes/page-header-ripped-paper.png);"></div>
   <div class="container">
      <div class="page-header__inner">
         <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>/</span></li>
            <li>Certifications</li>
         </ul>
         <h2>Certifications</h2>
      </div>
   </div>
</section>
<!--Page Header End-->
<!--News Sidebar Start-->
<section class="news-sidebar pb-120">
   <div class="container">
      <div class="row">
         <div class="section-title text-center pb-50">
            <h2 class="section-title__title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Certifications</h2>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-12 ">
            <div class="news-sidebar__left">
               <div class="news-sidebar__content">
                  <!--News Sidebar Single Start-->
                  <div class="news-sidebar__single">
                     <div class="news-sidebar__img">
                        <img src="public/frontend/assets/images/certificate/certificate-1.jpg" alt="">
                        <div class="news-sidebar__date">
                           <p>Certificate Of Assurance </p>
                        </div>
                     </div>
                  </div>
                  <!--News Sidebar Single End-->
               </div>
            </div>
         </div>
         <div class="col-xl-7 col-lg-6 col-md-6 col-12 ">
            <div class="news-sidebar__left">
               <div class="news-sidebar__content">
                  <!--News Sidebar Single Start-->
                  <div class="news-sidebar__single">
                     <div class="news-sidebar__img">
                        <img src="public/frontend/assets/images/certificate/certificate-2.jpg" alt="">
                        <div class="news-sidebar__date">
                           <p>Certificate Of Membership</p>
                        </div>
                     </div>
                  </div>
                  <!--News Sidebar Single End-->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--News Sidebar End-->
<!--Subscribe One End-->
@include('frontend.footer')