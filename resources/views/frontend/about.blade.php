@include('frontend.header')
<!--Page Header Start-->
<section class="page-header">
   <div class="page-header-bg" style="background-image: url(public/frontend/assets/images/backgrounds/page-header-bg-about.jpg)">
   </div>
   <div class="page-header__ripped-paper"
      style="background-image: url(public/frontend/assets/images/shapes/page-header-ripped-paper.png);"></div>
   <div class="container">
      <div class="page-header__inner">
         <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>/</span></li>
            <li>About</li>
         </ul>
         <h2>About us</h2>
      </div>
   </div>
</section>
<!--Page Header End-->
<!--About Three Start-->
<section class="about-three">
   <div class="container">
      <div class="row">
         <div class="col-xl-6">
            <div class="about-three__left">
               <div class="about-three__shape-2 float-bob-x wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                  <img src="public/frontend/assets/images/shapes/about-two-shape-4.png" alt="">
               </div>
               <div class="section-title text-left">
                  <span class="section-title__tagline wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">ABOUT US</span>
                  <h2 class="section-title__title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Welcome to Mahavir Global INC.</h2>
               </div>
               <p class="about-three__text-1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">{{$about[0]->title}}</p>
               <p class="about-three__text-2 text-justify wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">{!! $about[0]->description !!}
               </p>
            </div>
         </div>
         <div class="col-xl-6">
            <div class="about-three__right">
               <div class="about-three__img-box wow slideInRight" data-wow-delay="100ms"
                  data-wow-duration="2500ms">
                  <div class="about-three__shape-1 float-bob-y">
                     <img src="public/frontend/assets/images/shapes/about-three-shape-1.png" alt="">
                  </div>
                  <div class="about-three__img">
                     <img src="public/frontend/assets/images/resources/about-three-img-1.jpg" alt="">
                  </div>
                  <div class="about-three__experience">
                     <div class="about-three__experience-shape-1">
                        <img src="public/frontend/assets/images/shapes/about-three-experience-shape-1.png" alt="">
                     </div>
                     <div class="about-three__experience-inner">
                        <div class="about-three__experience-shape-2">
                           <img src="public/frontend/assets/images/shapes/about-three-experience-shape-2.png" alt="">
                        </div>
                        <div class="about-three__experience-year">
                           <h3>58</h3>
                        </div>
                        <div class="about-three__experience-text">
                           <p>Years of <br> experience</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-12">
            <div class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
               <p class="about-three__text-2 text-justify"> Over the years, we have earned a reputation of a company that symbolizes quality, consistency and innovation through continuous process improvement and organizational development. The company has evolved under the capable leadership and guidance of Late Lala Jai Kumar Garg, a veteran in rice milling industry with 39 years of experience in the field. Over the past 39 years, it's been our constant endeavor to provide the best to our customers which has enabled us to build and maintain a longstanding and strong relationship with them.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--About Three End-->
<!--Services Details page Start-->
<section class="service-details">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6">
            <div class="service-details__right">
               <div class="service-details__faq">
                  <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                     <div class="accrodion active wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                           <h4>Our Mission:</h4>
                        </div>
                        <div class="accrodion-content">
                           <div class="inner">
                              <p>
                                 Mahavir Global Inc. is one of the  India’s leading boiled/ parboiled rice production company Our mission of “ Nutrition Life with boiled Rice” is to provide nutritious and healthiest boiled rice.
                              </p>
                           </div>
                           <!-- /.inner -->
                        </div>
                     </div>
                     <div class="accrodion wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                           <h4>
                              Our Vision & Values:
                           </h4>
                        </div>
                        <div class="accrodion-content">
                           <div class="inner">
                              <p>
                                 To be the leading top quality rice supplier, Competitive, Nutrition, Health & Wellness Company having improved stakeholder value by being a preferred corporate citizen, and preferred supplier.
                              </p>
                           </div>
                           <!-- /.inner -->
                        </div>
                     </div>
                     <div class="accrodion wow slideInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                           <h4>
                              Best & Excellent Services:
                           </h4>
                        </div>
                        <div class="accrodion-content">
                           <div class="inner">
                              <p>
                                 Our service meets the customer’s needs & expectations & we provide best service.
                              </p>
                           </div>
                           <!-- /.inner -->
                        </div>
                     </div>
                     <div class="accrodion wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                           <h4>
                              Customer Satisfaction:
                           </h4>
                        </div>
                        <div class="accrodion-content">
                           <div class="inner">
                              <p>
                                 We are focused towards customer satisfaction form the beginning of our firm.
                              </p>
                           </div>
                           <!-- /.inner -->
                        </div>
                     </div>
                     <div class="accrodion last-chiled wow slideInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                           <h4>
                              Reasonable Price:
                           </h4>
                        </div>
                        <div class="accrodion-content">
                           <div class="inner">
                              <p>
                                 Our company’s motive is to provide best quality rice at a competitive price against our competitors. 
                              </p>
                           </div>
                           <!-- /.inner -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6">
            <div class="section-title text-left wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
               <span class="section-title__tagline font-35">Quality Control</span>
            </div>
            <p class="about-three__text-2 text-justify  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Numbers of quality checks have been done Starting from purchasing to the whole process up to the sales undergo. We have appointed authorized representatives who travel extensively through the paddy fields during harvest season and proper care is taken to see that only the best available paddy is purchased. The paddy purchased is properly dried, transported and stocked in the paddy warehouses. </p>
            <div class="section-title text-left mt-30  wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
               <span class="section-title__tagline font-35">Research & Development:</span>
            </div>
            <p class="about-three__text-2 text-justify  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
               "The best way to be ready for future is to invest in it”.
               We regularly invest in R & D as a part of our ever-growing commitment to one and all. In spite of having latest machinery and well-trained manpower to match the growing demand for rice, we also invest a fair amount of our income in R & D. In order to keep pace with the international trends in rice technology, we keep on  encouraging our technocrats to participate in various seminars and conventions all over the world
            </p>
         </div>
      </div>
   </div>
</section>

<section class="pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="section-title text-center">
               <h2 class="section-title__title  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Overseas Address
               </h2>
            </div>
            <video width="100%" height="auto" autoplay muted>
  <source src="public/frontend/assets/images/video.mp4" type="video/mp4">
</video>
         </div>
      </div>
   </div>
</section>
<!--Services Details page End-->
@include('frontend.footer')