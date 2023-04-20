@include('frontend.header')
<!--Page Header Start-->
<section class="page-header">
   <div class="page-header-bg" style="background-image: url(public/frontend/assets/images/backgrounds/page-header-bg-products.jpg)">
   </div>
   <div class="page-header__ripped-paper"
      style="background-image: url(public/frontend/assets/images/shapes/page-header-ripped-paper.png);"></div>
   <div class="container">
      <div class="page-header__inner">
         <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>/</span></li>
            <li>Shop</li>
         </ul>
         <h2>Product details</h2>
      </div>
   </div>
</section>
<!--Page Header End-->
<!--Product Details Start-->
<section class="product-details pb-120">
   <div class="container">
      <div class="section-title text-center pb-50">
         <span class="section-title__tagline wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">We are Traders & Suppliers Of :</span>
         <h2 class="section-title__title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">1121 Steam Basmati Rice</h2>
      </div>
      <div class="row">
         <div class="col-xl-3 col-lg-3">
            <div class="product__sidebar">
               <div class="shop-category product__sidebar-single">
                  <h3 class="product__sidebar-title pb-30">Products Categories</h3>
                  <ul class="list-unstyled">
                     <li class="active  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms"><a href="#">1121 Raw Basmati Rice </a></li>
                     <li class=" wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><a href="#">1121 Steam Basmati Rice </a></li>
                     <li class=" wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><a href="#">1121 Sella Basmati Rice  </a></li>
                     <li class=" wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"><a href="#">1121 Golden Sella Basmati Rice</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-xl-4">
            <div class="product-details__img  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
               <img src="public/frontend/assets/images/products_page/products-1.jpg" alt="" />
            </div>
         </div>
         <div class="col-lg-5 col-xl-5">
            <div class="product-details__content">
               <h3 class="product-details__title wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">Specifications</h3>
               <table class="table table-striped table-hover table-responsive mt-30">
                  <tbody>
                     <tr class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="500ms">
                        <th scope="row">Purity</th>
                        <td>95%</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="700ms" data-wow-duration="500ms">
                        <th scope="row">Natural Admixture</th>
                        <td>5%</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="800ms" data-wow-duration="500ms">
                        <th scope="row">Natural Admixture</th>
                        <td>5%</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="900ms" data-wow-duration="500ms">
                        <th scope="row">Average Grain Length  </th>
                        <td>8.35 MM</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="500ms">
                        <th scope="row">Moisture </th>
                        <td>12.5% Max</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1100ms" data-wow-duration="500ms">
                        <th scope="row">Broken Grain  </th>
                        <td>1% Max.</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="500ms">
                        <th scope="row">Damage/Discolour Grain  </th>
                        <td>1% Max</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1300ms" data-wow-duration="500ms">
                        <th scope="row">Immature Grain </th>
                        <td>1% Max.</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1400ms" data-wow-duration="500ms">
                        <th scope="row">Foreign Matter </th>
                        <td>Nil</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="500ms">
                        <th scope="row"> Packaging Type</th>
                        <td>Jute bag, PP bag, Non-woven bag or as per buyer's choice</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1600ms" data-wow-duration="500ms">
                        <th scope="row">Supply Ability  </th>
                        <td>2000 tons Per Week</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1700ms" data-wow-duration="500ms">
                        <th scope="row">Main Export Market(S)</th>
                        <td>Europe, USA, Australia, Saudi Arabia, Kuwait, Egypt, UAE, Jordan, Oman, Bahrain, Yemen, Syria, Iraq, Libya, Turkey.</td>
                     </tr>
                     <tr class="wow fadeInUp" data-wow-delay="1800ms" data-wow-duration="500ms">
                        <th scope="row">Delivery Time</th>
                        <td>15 Days</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Product Details End-->
@include('frontend.footer')