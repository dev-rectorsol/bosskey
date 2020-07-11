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
          <li><a href="<?php echo base_url('onlineapply');?>">Apply Online</a></li>
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
  <div class="row"> <span class="col-xs-6 col-sm-3"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url()?>assets/images/logo2.png" class="img-responsive logo" alt=""></a></span>
  <div class="col-xs-6 col-sm-3"></div>
  <div class="col-xs-6 col-sm-9">
    <div class="contact clearfix">
      <ul class="hidden-xs">
        <li> <span>Email</span> <a href="mailto:info@bosssky.com">info@bosssky.com</a> </li>
        <li> <span>Toll Free</span> 1800 000 0000 </li>
      </ul>
      <!-- <a href="javascript:void(0);" class="login">Student Login <span class="icon-more-icon"></span></a> -->
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
      <li> <a href="<?php echo base_url('about'); ?>">About</a></li>
      <li class="dropdown"> <a data-toggle="dropdown" href="#">Our Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">

             <?php foreach ($menus as $menu): ?>
            <li class="dropdown-submenu" id="cut_menu" > <a href="home/businessadministration/"><?php echo $menu->category;?> </a>
              <?php  if (isset($menu->children)) {
                  foreach ($menu->children as $child) {
                    if($menu->id==$child->category_id){
                      ?>

                      <ul class="dropdown-menu">

                         <li  style=""><a href="<?php echo base_url('home/businessadministration/'.$child->id);?>"><?php echo $child->subcategory;?></a></li>

                      </ul>
              <?php
            }
            }
            }
            ?>

            </li>
            <?php endforeach; ?>

         </ul>
     </li>
  <li> <a href="<?php echo base_url('coursedetail');?>">Specialization</a></li>
  <li> <a href="<?php echo base_url('contact'); ?>">Contact</a></li>
</ul>

</div>
</div>
</nav>
<!-- End Navigation -->
</header>
<!-- End Header-->
