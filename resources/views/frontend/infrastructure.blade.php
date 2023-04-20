@include('frontend.header')
<!--Page Header Start-->
<section class="page-header">
   <div class="page-header-bg" style="background-image: url(public/frontend/assets/images/backgrounds/page-header-bg-infra.jpg)">
   </div>
   <div class="page-header__ripped-paper"
      style="background-image: url(public/frontend/aassets/images/shapes/page-header-ripped-paper.png);"></div>
   <div class="container">
      <div class="page-header__inner">
         <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>/</span></li>
            <li>Infrastructure</li>
         </ul>
         <h2>Infrastructure</h2>
      </div>
   </div>
</section>
<!--Page Header End-->
<!--About Three Start-->
<section class="about-three ">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
           <?php echo $infrastructure[0]->description; ?>
         </div>
      </div>
   </div>
</section>
<!--Portfolio page Start-->
<section class="portfolio-page pb-120 pt-0">
   <div class="container">
      <div class="row">
         <!--infra One Single Start-->
         <div class="col-xl-4 col-lg-6 col-md-6 mt-30 wow fadeInUp" data-wow-delay="100ms">
            <div class="gallery-one__single">
               <div class="gallery-one__img-box">
                  <div class="gallery-one__img">
                     <img src="public/frontend/assets/images/infra/infra-1.jpg">
                  </div>
               </div>
            </div>
         </div>
         <!--infra One Single End-->
         <!--infra One Single Start-->
         <div class="col-xl-4 col-lg-6 col-md-6  mt-30 wow fadeInUp" data-wow-delay="200ms">
            <div class="gallery-one__single">
               <div class="gallery-one__img-box">
                  <div class="gallery-one__img">
                     <img src="public/frontend/assets/images/infra/infra-2.jpg">
                  </div>
               </div>
            </div>
         </div>
         <!--infra One Single End-->
         <!--infra One Single Start-->
         <div class="col-xl-4 col-lg-6 col-md-6 mt-30 wow fadeInUp" data-wow-delay="300ms">
            <div class="gallery-one__single">
               <div class="gallery-one__img-box">
                  <div class="gallery-one__img">
                     <img src="public/frontend/assets/images/infra/infra-3.jpg">
                  </div>
               </div>
            </div>
         </div>
         <!--infra One Single End-->
         <!--infra One Single Start-->
         <div class="col-xl-4 col-lg-6 col-md-6 mt-30 wow fadeInUp" data-wow-delay="400ms">
            <div class="gallery-one__single">
               <div class="gallery-one__img-box">
                  <div class="gallery-one__img">
                     <img src="public/frontend/assets/images/infra/infra-4.jpg">
                  </div>
               </div>
            </div>
         </div>
         <!--infra One Single End-->
         <!--infra One Single Start-->
         <div class="col-xl-4 col-lg-6 col-md-6 mt-30 wow fadeInUp" data-wow-delay="500ms">
            <div class="gallery-one__single">
               <div class="gallery-one__img-box">
                  <div class="gallery-one__img">
                     <img src="public/frontend/assets/images/infra/infra-5.jpg">
                  </div>
               </div>
            </div>
         </div>
         <!--infra One Single End-->
         <!--infra One Single Start-->
         <div class="col-xl-4 col-lg-6 col-md-6 mt-30 wow fadeInUp" data-wow-delay="600ms">
            <div class="gallery-one__single">
               <div class="gallery-one__img-box">
                  <div class="gallery-one__img">
                     <img src="public/frontend/assets/images/infra/infra-6.jpg">
                  </div>
               </div>
            </div>
         </div>
         <!--infra One Single End-->
      </div>
   </div>
</section>
<!--Portfolio page End-->
@include('frontend.footer')