<!-- Start Preloader -->
<div id="loading">
  <div class="element">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>
</div>
<!-- End Preloader -->
<!-- Start Header -->
<header class="hdbg">
  <!-- Start Header top Bar -->
  <div class="header-top">
    <div class="container clearfix">
      <ul class="follow-us hidden-xs">
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
      <div class="right-block clearfix">
        <ul class="top-nav hidden-xs">
          <!-- <li><a href="register.html">Register</a></li> -->
          <li><a href="<?php echo base_url('home/onlineapply');?>">Apply Online</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <li><a href="<?php echo base_url('faq'); ?>">FAQs</a></li>
        </ul>

        <div class="select-lang2">
          <select class="custom_select">
            <option value="en">English</option>

          </select>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Header top Bar -->
<!-- Start Header Middle -->
<div class="container header-middle">
  <div class="row"><div class="col-xs-6 col-sm-4"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url()?>assets/images/logo2.png" class="img-responsive logo" alt=""></a></div>
    <!-- <div class="col-xs-6 col-sm-3"></div> -->
    <div class="col-xs-6 col-sm-8">
      <div class="row">
        <div class="contact clearfix">
          <div class="col-sm-12">
            <ul class="hidden-xs">
              <li> <span>Email</span> <a href="mailto:info@bimtinstitute.com">info@bimtinstitute.com</a> </li>
              <li> <span>Toll Free</span> +91-9044075515 </li>
            </ul>
          </div>
        </div>

        <div class="contact clearfix m-t-15">
          <div class="col-sm-12">
            <ul class="hidden-xs" >
              <li style="font-size: 15px;"><a href="<?php echo base_url('eLearning');?>">Get E-Learning Apps</a> </li>
              <li style="font-size: 15px;"><a href="<?php echo base_url('applyPayOnlineFees');?>">Apply Online</a> </li>
              <li style="font-size: 15px;"><a href="<?php echo base_url('studentLogin');?>">Student Login</a> </li>
              <li style="font-size: 15px;"><a href="<?php echo base_url('payExamFee');?>">Pay Exam Fees</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Header Middle -->
<!-- Start Navigation -->
<nav class="navbar navbar-inverse">
<div class="container">
  <div class="navbar-header">
    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  </div>
  <div class="navbar-collapse collapse" id="navbar">
    <!-- <form class="navbar-form navbar-right">
      <input type="text" placeholder="Search Now" class="form-control">
      <button class="search-btn"><span class="icon-search-icon"></span></button>
    </form> -->
    <ul class="nav navbar-nav">
      <li> <a href="<?php echo base_url(); ?>">Home</a></li>

      <li class="dropdown"> <a data-toggle="dropdown" href="<?php echo base_url('about'); ?>">About <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        <ul class="dropdown-menu">
        <li > <a href="<?php echo base_url('vision');?>">Vision, Mision & Values </a></li>
        <li > <a href="<?php echo base_url('whytrustbimt');?>">Why Trust IBMT</a></li>
        <li > <a href="<?php echo base_url('theteam');?>">The Team</a></li>
        <li > <a href="<?php echo base_url('members');?>">Membership & Approvals</a></li>
        <li class="dropdown-submenu"> <a href="#"> IBMT Institute Collaborations</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('collaboration');?>">Collaboration with IBMT institute of business management</a></li>
            <li><a href="<?php echo base_url('ibmtinstitue');?>">IBMT institute  </a></li>
          </ul>
        </li>
        <li > <a href="<?php echo base_url('ibmtinstituecredentials');?>">IBMT Institute Credentials</a></li>

        <li > <a href="<?php echo base_url('ourAlumni');?>">Our Alumni</a></li>

      </ul>


      </li>

        <li class="dropdown"> <a data-toggle="dropdown" href="#">Our Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>

          <ul class="dropdown-menu">
                     <?php foreach($menus as $menu):?>
                       <?php if(!isset($menu->children))
                       {?>
                         <li> <a href="<?php echo base_url('home/categoryDetails/'.$menu->id);?>"><?php echo $menu->category;?> </a></li>
                    <?php } else{?>
                     <li class="dropdown-submenu" > <a href="<?php echo base_url('home/courseDetail/').$menu->id;?>"><?php echo $menu->category;?> </a>

                       <?php  if(isset($menu->children)){ ?>
                          <ul class="dropdown-menu">
                              <?php foreach ($menu->children as $child_menu) { ?>
                                  <li  style=""><a href="<?php echo base_url('home/businessadministration/'.$child_menu->id);?>"><?php echo $child_menu->subcategory;?></a></li>
                              <?php  } ?>

                          </ul>
                             <?php }
                              else{?>
                                 <li> <a href="<?php echo base_url('home/businessadministration/'.$menu->id);?>"></a>
                            <?php  }
                             ?>

                     </li>
                   <?php }endforeach; ?>
           </ul>

       </li>
  </li>
  <!--<li> <a href="<?php echo base_url('coursedetail');?>">Specialization</a></li>-->
  <li> <a href="<?php echo base_url('specialization'); ?>">Specialization</a></li>
  <li> <a href="<?php echo base_url('alumniSpeak'); ?>">Alumni Speak</a></li>
  <li class="dropdown"> <a data-toggle="dropdown" href="#">Student Corner <i class="fa fa-angle-down" aria-hidden="true"></i></a>
      <ul class="dropdown-menu">
        <li > <a href="<?php echo base_url('onlineAdmissionForm');?>">Online Admission Form</a></li>
      <li > <a href="<?php echo base_url('applyPayOnlineFees');?>">Apply & Pay Online</a></li>
      <li > <a href="<?php echo base_url('studentLogin');?>">Student Login</a></li>
      <li > <a href="<?php echo base_url('facultyDetails');?>">Faculty Details</a></li>
      <li > <a href="<?php echo base_url('studentFacility');?>">Student Facility</a></li>
      <li > <a href="<?php echo base_url('aboutExam');?>">About Exam</a></li>
      <li > <a href="#">Live Lecture Calendar</a></li>
      <li > <a href="<?php echo base_url('alumniSpeak');?>">Alumni Speak</a></li>
      <li > <a href="<?php echo base_url('studentGuidelines');?>">Student Guidelines</a></li>
      <li > <a href="<?php echo base_url('studentFAQ');?>">Student FAQ’s</a></li>
      <li > <a href="<?php echo base_url('specimenCertificate');?>">Specimen Certificate</a></li>
      <li > <a href="<?php echo base_url('sampleExamPaper');?>">Sample Exam Paper</a></li>
    </ul>
  </li>
  <li> <a href="#">Library</a></li>
  <li> <a href="<?php echo base_url('studentPlacement'); ?>">Student Placement</a></li>
  <li> <a href="#">Blog</a></li>
  <li> <a href="<?php echo base_url('contact'); ?>">Contact</a></li>
</ul>
</div>
</div>
</nav>



<!-- End Navigation -->
</header>
<!-- End Header-->
