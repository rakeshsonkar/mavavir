@extends('site.layouts.app')
@section('content')

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(site/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>About Us</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-section -->
        <section class="about-section sec-pad">
            <div class="pattern-layer-2" style="background-image: url(site/assets/images/shape/shape-24.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    
                    <div class="col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box p_relative d_block ml_30">
                                <div class="sec-title p_relative mb_25">
                                   <br>
                                    <h2 class="d_block fs_40 lh_50 fw_bold">Our Company <hr></h2>
                                </div>
                                <br>
                                <div class="text p_relative d_block mb_30">
                                    <p>Established in 1996, Vastav Anand electric Co. is a leading manufacturer of Switch gear and panel board accessories manufacturer in India. We endeavour to provide high-quality products along with creating and cultivating long-term relationships with our clients.
Our cutting-edge products are manufactured using state-of-the-art infrastructure which is fully equipped with modern amenities to enable us to deliver the most efficient, accurate and user friendly products. Our products are impeccable and reliable by the virtue of our futuristic R&D department and Test Labs.
Since inception, we have strived in delivering the best quality which are also environment-friendly with the most competitive pricing. We respond immediately to the changing needs of our clients and are continuously working to the meet the diverse needs of our customers by taking in their valuable feedback. We have a wide dealer network across the country and we intend to grow our family by always serving better.</p>

<br><br>

<table>
  <tr>
    <th>Business Type</th>
    <th>Manufacturer, Supplier</th>
  </tr>
  <tr>
    <td>Year of Establishment</td>
    <td>1996</td>
  
  </tr>
  <tr>
    <td>No of Production Lines</td>
    <td>4</td>
  
  </tr>
  <tr>
    <td>Production Type</td>
    <td>Semi-Automatic</td>
    
  </tr>
  <tr>
    <td>No of Engineers</td>
    <td>5</td>
   
  </tr>
  <tr>
    <td>Monthly Production Capacity</td>
    <td>As Per Requirement</td>
   
  </tr>
  <tr>
    <td>Primary Competitive Advantages</td>
    <td> <li> R&D testing</li>
<li> Innovative team</li>
<li> Quality Product</li>
  <li>Timely Delivery</li>
<li> Cost-effective</li>
<li> Market Goodwill</li>
<li> Quality assurance</li>
</td>  
  </tr>
  <tr>
      <td>Product Range</td>
      <td><li> Submersible Starter Panel Accessories</li>
<li>   Electrical Control Panel Accessories</li>
<li>   All Types of Electrical Machinery Panel Accessories</li>
</td>

  </tr>
</table>





                                </div>
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


 <!-- working-style-two -->
        <section class="working-style-two p_relative sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                         <div class="sec-title p_relative">
                            <h5 class="d_block fs_17 lh_25 fw_medium mb_9">How It’s Work</h5>
                            <h4 class="d_block fs_40 lh_50 fw_bold">Best switch gear and panel board accessories manufacturer in haryana india.</h4>
                        </div>
                    </div>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box centred">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn" data-tab="#tab-1"><i class="icon-49"></i></li>
                            <li class="tab-btn active-btn" data-tab="#tab-2"><i class="icon-50"></i></li>
                            <li class="tab-btn" data-tab="#tab-3"><i class="icon-51"></i></li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="text mr_30">
                                        <h3><i class="icon-45"></i>Make An Appointment</h3>
                                        <p>Vastav Anand electric co. prefer to use their phone for appointment customer can send an appointment email as well because it will help with editing the template and reduce the possibility of miscommunication so, you can make an appointment and we schedule it according to requirement of the customer.</p>
                                        <a href="contact.html" class="theme-btn btn-one">Appointment</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_120">
                                        <div class="shape" style="background-image: url(site/assets/images/shape/shape-33.png);"></div>
                                        <figure class="image"><img src="{{asset('site/assets/images/project/project-3.jpg') }}" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab active-tab" id="tab-2">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="text mr_30">
                                        <h3><i class="icon-45"></i>Select Your Service</h3>
                                        <p>You can select your products we shown on business profile along with their descriptions and prices. customers on mobile devices can also find all services under “products section”. Our aim is to attract new customers & prospects by providing high quality services & solve problems of customers free of cost.</p>
                                        <a href="contact.html" class="theme-btn btn-one">Appointment</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_120">
                                        <div class="shape" style="background-image: url(site/assets/images/shape/shape-33.png);"></div>
                                        <figure class="image"><img src="{{asset('site/assets/images/project/project-2.jpg') }}" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="text mr_30">
                                        <h3><i class="icon-45"></i>Handover Service</h3>
                                        <p>A good sale to service hand off is very important. We strive to part our best foot forward for the customer. Our handover service is well coordinated, materials are shared is advance and the experience is customized rather than the standard fare.</p>
                                        <a href="contact.html" class="theme-btn btn-one">Appointment</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_120">
                                        <div class="shape" style="background-image: url(site/assets/images/shape/shape-33.png);"></div>
                                        <figure class="image"><img src="{{asset('site/assets/images/project/project-1.jpg') }}" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working-style-two end -->

        <!-- testimonial-style-two -->
        <section class="testimonial-style-two about-page p_relative">
            <div class="bg-layer"></div>
            <div class="auto-container">
                <div class="sec-title light p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Testimonials</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">What Our Client Say <br />About Vastav Anand electric Co.</h2>
                </div>
                <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="{{asset('site/assets/images/icons/icon-3.png') }}" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{asset('site/assets/images/resource/testimonial-1.jpg') }}" alt=""></figure>
                                <h5>Rachel McAdams</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{asset('site/assets/images/resource/testimonial-2.jpg') }}" alt=""></figure>
                                <h5>Jhon Haris</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="{{asset('site/assets/images/icons/icon-3.png') }}" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{asset('site/assets/images/resource/testimonial-1.jpg') }}" alt=""></figure>
                                <h5>Rachel McAdams</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="{{asset('site/assets/images/icons/icon-3.png') }}" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{asset('site/assets/images/resource/testimonial-2.jpg') }}" alt=""></figure>
                                <h5>Jhon Haris</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="{{asset('site/assets/images/icons/icon-3.png') }}" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{asset('site/assets/images/resource/testimonial-1.jpg') }}" alt=""></figure>
                                <h5>Rachel McAdams</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                            <p>Adipisicing elit sed do eiusmod tempor incid labore et dolore magna aliqua enim minim quis veniam nostrud exercition ulamco laboris nis aliquip commodo.</p>
                            <div class="author-box p_relative d_block">
                                <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{asset('site/assets/images/resource/testimonial-2.jpg') }}" alt=""></figure>
                                <h5>Jhon Haris</h5>
                                <span class="designation p_relative d_block">Electrician</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->




        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

        
@endsection