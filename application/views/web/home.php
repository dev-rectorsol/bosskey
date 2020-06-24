<div class="homequickform">
<button id="quickform" class="btn">
Enquire now
 </button>
</div>


<div class="enquire-now custom-equery" id="enquery">
<div class="close-btn" id="closeenquery">X</div>
<form class="forms-sample" action="<?php echo base_url('home/add_enquire');?>" method="post" enctype="multipart/form-data">
                            <div class="inner">
                                <h3>Enquire now </h3>
                                <div class="row1">
                                    <input name="name"  placeholder="Name" type="text">
                                </div>
                                <div class="row1 clearfix">
                                    <input name="email" placeholder="Email" type="text">

                                </div>
                                   <div class="row3 clearfix">
                                <select name="country" class="states order-alpha" id="country">
                                <option value="101">India</option>
                                 <?php foreach ($country as  $value):?>
                                 <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                                  <?php endforeach;?>
                                </select>

                                </div>
                                <div class="row2">
                                <select name="phonecode" class="countries order-alpha" id="phonecode">
                                  <option value="101">In (+91)</option>
                                </select>
                                  <input name="phone" placeholder="phone" type="text">
                                </div>



                                <!-- <div class="row3 clearfix"> -->
                                <!-- <select id="country" name ="country"></select> -->
                                <!-- <select name="country" class="countries order-alpha" id="country">
                                  <option>Select country</option>
                                  <?php foreach ($country as  $value):?>
                                 <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                  <?php endforeach;?>
                                </select>
                                </div> -->

                                    <div class="row3 clearfix">
                                    <select name="state" class="states order-alpha" id="addstates">
                                    <?php foreach ($state as $value):?>
                                 <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                  <?php endforeach;?>
                                    <option value="">Select State</option>
                                    </select>
                                    </div>
                                    <div class="row3 clearfix">
                                        <select name="city" class="cities order-alpha" id="addcity">
                                        <option value="">Select City</option>
                                        </select>
                                </div>

                                <div class="row3 clearfix">
                                    <select name="certificate">
                                            <option value="Executive Certification">Executive Certification</option>
                                            <option value="Certified Manager">Certified Manager</option>
                                            <option value="International Courses">International Courses</option>
                                            <option value="After 12th- DBA+Master Certification">After 12th- DBA+Master Certification</option>
                                            <option value="Master Certification">Master Certification</option>
                                            <option value="Executive Master Certification">Executive Master Certification</option>
                                            <option value="Professional Certification">Professional Certification</option>
                                     </select>

                                </div>
                            </div>
                          <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                          <button type="submit" class="enquire-btn">Enquire now<span class="icon-more-icon"></span> </button>
                            <!-- <button class="">Enquire now <span class="icon-more-icon"></span></button> -->
                          </form>
            </div>

            <!-- enquery form-->
 <!-- Start Banner Carousel -->
 <div class="banner-outer">
            <div class="banner-slider">
                <div class="slide1">
                    <div class="container">
                        <div class="content animated fadeInRight">
                            <div class="fl-right">
                                <h1 class="animated fadeInRight">Explore the World of <span class="animated fadeInRight">Our Graduates</span> </h1>
                                <!-- <p class="animated fadeInRight">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                                <a href="#" class="btn animated fadeInRight">Know More <span class="icon-more-icon"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="slide2">
                    <div class="container">
                        <div class="content">
                            <h1 class="animated fadeInUp">MBA Marketing</h1>
                            <a href="#" class="btn animated fadeInUp">Know More <span class="icon-more-icon"></span></a>  </div>
                    </div>
                </div>
                <div class="slide3">
                    <div class="container">
                        <div class="content animated fadeInLeft">
                            <h1 class="animated fadeInLeft">Online MBA</h1>
                            
                            <a href="#" class="btn animated fadeInLeft">Know More <span class="icon-more-icon"></span></a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Carousel -->

        <!-- Start About Section -->
        <section class="about">
            <div class="container">
                <ul class="row our-links">
                    <li class="col-sm-4 apply-online clearfix equal-hight">
                        <div class="icon"><img src="<?php echo base_url()?>assets/images/apply-online-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3>Apply Online</h3>

                            <a href="javascript:void(0);" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
                    </li>
                    <li class="col-sm-4 prospects clearfix equal-hight">
                        <div class="icon"><img src="<?php echo base_url()?>assets/images/prospects-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3><span>Download</span>Prospects</h3>

                            <a href="javascript:void(0);" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
                    </li>
                    <li class="col-sm-4 certification clearfix equal-hight">
                        <div class="icon"><img src="<?php echo base_url()?>assets/images/certification-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3>Certification</h3>
                            <a href="javascript:void(0);" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-sm-push-5 left-block home-about"> <span class="sm-head">We rise for you</span>
                        <h2>BIMT About</h2>
                        <p> BIMT institute  is a global award-winning online management education training and certification provider. BIMT offers various certification courses that teach the concepts of management through case studies, thus providing a broader exposure to its students.</p>

                        <p> BIMT institute  provides excellent opportunities to aspiring management students who don’t have access to traditional learning methods through its open and flexible approach to learning. Being a fast growing leader in online education,  BIMT institute  is immensely passionate about delivering high-quality education to its students who aspire to move ahead in their career through additional management skill acquisition.</p>

<p>At  BIMT institute  we are a group of educators who are on a mission to train the next generation of managers and entrepreneurs.</p>
                        <div class="know-more-wrapper"> <a href="about.html" class="know-more">Know More <span class="icon-more-icon"></span></a> </div>
                    </div>
                    <div class="col-sm-5 col-sm-pull-7">
                        <div class="video-block">
                            <div id="thumbnail_container"> <img src="<?php echo base_url()?>assets/images/programmes.jpg" id="thumbnail" class="img-responsive" alt=""> </div>
                            <a href="#" class="start-video video"><img src="images/play-btn.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Start Cources Section -->
        <section class="our-cources padding-lg">
            <div class="container">

                <h2> <span>Unique Features of our programs</span> What do you want to study?</h2>
                <ul class="course-list owl-carousel">
                    <li>
                        <div class="inner">
                            <figure><img src="<?php echo base_url()?>assets/images/course-img1.jpg" alt=""></figure>
                            <h3>Master Program in<span>Business Administration</span></h3>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>11 Months</h4>
                                    <span> Courses</span> </div>
                                <a href="<?php echo base_url('businessadministration');?>"><span class="icon-more-icon"></span></a> </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <figure><img src="<?php echo base_url()?>assets/images/course-img2.jpg" alt=""></figure>
                            <h3>Master Program In <span>International Business</span></h3>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>11 Months</h4>
                                    <span> Courses</span> </div>
                                <a href="<?php echo base_url('masterprograminternationalbusiness');?>"><span class="icon-more-icon"></span></a> </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <figure><img src="<?php echo base_url()?>assets/images/course-img3.jpg" alt=""></figure>
                            <h3>Certificate in <span>financial Analysis</span></h3>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>6 Months</h4>
                                    <span> Courses</span> </div>
                                <a href="<?php echo base_url('CertificateInfinancialAnalysis6Months');?>"><span class="icon-more-icon"></span></a> </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <figure><img src="<?php echo base_url()?>assets/images/course-img4.jpg" alt=""></figure>
                            <h3>Business <span> Analytics</span><span>Certification</span></h3>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>6 Months</h4>
                                    <span> Courses</span> </div>
                                <a href="<?php echo base_url('BusinessAnalyticsCertification6Months');?>"><span class="icon-more-icon"></span></a> </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Cources Section -->


        <section class="browse-teacher grey-bg padding-lg pd-0">
            <div class="container">
                <h2>Faculty of BIMT  Institute</h2>
                <ul class="row browse-teachers-list clearfix">
                    <li class="col-xs-6 col-sm-3">
                        <figure> <img src="<?php echo base_url()?>assets/images/teacher/Bryan_Tyler.jpg" width="123" height="124" alt=""> </figure>
                        <h3>Bryan Tyler</h3>
                        <span class="designation"><strong>Qualification:</strong> Ph.D (H.R), MBA (H.R)</span>
                       

                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <figure> <img src="<?php echo base_url()?>assets/images/teacher/Mike_dikson.jpg" width="123" height="124" alt=""> </figure>
                        <h3>Mike Dikson</h3>
                        <span class="designation"><strong>Qualification:</strong> MBA(Digital Marketing)</span>
                        
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <figure> <img src="<?php echo base_url()?>assets/images/teacher/Mukesh_Saxena.png" width="123" height="124" alt=""> </figure>
                        <h3>Mukesh Saxena</h3>
                        <span class="designation"><strong>Qualification:</strong> Ph.D (IT)</span>
                        
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <figure> <img src="<?php echo base_url()?>assets/images/teacher/Xiang_Hou.jpeg" width="123" height="124" alt=""> </figure>
                        <h3>Xiang Hou</h3>
                        <span class="designation"><strong>Qualification:</strong> Ph.D,MBA (Finance)</span>
                        

                    </li>
                </ul>
                <div class="row">
            <div class="col-md-12"><a href="#" class="btn viewprofile">View All Faculty</a></div>
            </div>
            </div>

        </section>

        <!-- Start Testimonial -->
        <section class="testimonial padding-lg">
            <div class="container">
                <div class="wrapper">
                    <h2> Our Testimonials</h2>
                    <ul class="testimonial-slide">
                        <li>
                            <p>Techies need to up-skill 15-20 times to achieve career growth...<a href="#"></a></p>
                            <span>Bryan Tyler, <span>London</span></span> </li>
                        <li>
                            <p>How learning Bitcoin’s backbone tech can boost your career...<a href="#"></a></p>
                            <span>Mike Dikson, <span>Chine</span></span> </li>
                        <li>
                            <p>Top 10 courses you should take in 2019 for a great career aheady...<a href="#">Read more</a></p>
                            <span>Xiang Hou, <span>Japan</span></span> </li>
                    </ul>
                    <!--<div id="bx-pager"> <a data-slide-index="0" href="#"><img src="<?php echo base_url()?>assets/images/images.png" class="img-circle" alt=""/></a> <a data-slide-index="1" href="#"><img src="images/images.png" class="img-circle" alt="" /></a> <a data-slide-index="2" href="#"><img src="images/images.png" class="img-circle" alt="" /></a> </div>-->
                </div>
            </div>
        </section>
        <!-- End Testimonial -->
