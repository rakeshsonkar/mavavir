@include('frontend.header')
<!--Page Header Start-->
<section class="page-header">
   <div class="page-header-bg" style="background-image:url(public/frontend/assets/images/backgrounds/page-header-bg-brands.jpg)"></div>
   <div class="page-header__ripped-paper"
      style="background-image: url(public/frontend/assets/images/shapes/page-header-ripped-paper.png);"></div>
   <div class="container">
      <div class="page-header__inner">
         <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>/</span></li>
            <li>Certifications</li>
         </ul>
         <h2>Brands</h2>
      </div>
   </div>
</section>
<!--Page Header End-->
<!--News Sidebar Start-->
<section class="news-sidebar pb-120">
   <div class="container">
      <div class="row">
         <div class="section-title text-center pb-50">
            <h2 class="section-title__title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Brands</h2>
         </div>
         <div class="row pb-50">
            @foreach($brandData AS $row)
         <div class="col-xl-4 col-lg-4 col-md-6 col-12 ">
            <div class="news-sidebar__left">
               <div class="news-sidebar__content">
                  <!--News Sidebar Single Start-->
                  <div class="news-sidebar__single">
                     <div class="news-sidebar__img">
                        <img src="{{url('/').'/'. $row->banner}}" alt="{{$row->meta_title}}">
                        <div class="news-sidebar__date">
                           <p>{{$row->name}}</p>
                        </div>
                     </div>
                  </div>
                  <!--News Sidebar Single End-->
               </div>
            </div>
         </div>
         @endforeach
         <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-12 ">
            <div class="news-sidebar__left">
               <div class="news-sidebar__content">
                 
                  <div class="news-sidebar__single">
                     <div class="news-sidebar__img">
                        <img src="assets/images/brands/2.jpg" alt="">
                        <div class="news-sidebar__date">
                           <p>Pearl </p>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-12 ">
            <div class="news-sidebar__left">
               <div class="news-sidebar__content">
                 
                  <div class="news-sidebar__single">
                     <div class="news-sidebar__img">
                        <img src="assets/images/brands/3.jpg" alt="">
                        <div class="news-sidebar__date">
                           <p>Diamond</p>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
         </div>
         <div class="row">
         <div class="col-xl-4 col-lg-4 col-md-6 col-12 ">
            <div class="news-sidebar__left">
               <div class="news-sidebar__content">
                 
                  <div class="news-sidebar__single">
                     <div class="news-sidebar__img">
                        <img src="assets/images/brands/4.jpg" alt="">
                        <div class="news-sidebar__date">
                           <p>Ruby</p>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-12 ">
            <div class="news-sidebar__left">
               <div class="news-sidebar__content">
                 
                  <div class="news-sidebar__single">
                     <div class="news-sidebar__img">
                        <img src="assets/images/brands/5.jpg" alt="">
                        <div class="news-sidebar__date">
                           <p>Topaz</p>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-12 ">
            <div class="news-sidebar__left">
               <div class="news-sidebar__content">
                
                  <div class="news-sidebar__single">
                     <div class="news-sidebar__img">
                        <img src="assets/images/brands/6.jpg" alt="">
                        <div class="news-sidebar__date">
                           <p>Zircon</p>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div> -->
         </div>
        

      </div>
   </div>
</section>
<!--News Sidebar End-->
<!--Subscribe One End-->
@include('frontend.footer')
