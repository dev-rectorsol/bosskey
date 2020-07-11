

<!-- Start Banner -->
         <div class="inner-banner">
                  <div class="container">
                      <div class="row">
                          <div class="col-sm-8 col-lg-9">
                              <div class="content">
                                  <h1>
                                  </h1>
                                  <p ><a href=''>Home</a> /   <?php  echo $category_value->category;?></p>
                              </div>
                          </div>
                          <div class="col-sm-4 col-lg-3"> <a href="apply-online.html" class="apply-online clearfix">

                              <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                              </a> <a href="#" class="download-prospects brochure"> <span class="icon-brochure-icon"></span> <span class="small">Download:</span>Course Brochure</a> </div>
                      </div>
                  </div>
              </div>
          <!-- End Banner -->
          <!-- Start Course Description -->
          <style>


    .box {
      display: flex;
      align-items: center;
      justify-content: center;
      background: #646162;
      margin: 20px 0;
      padding: 10px;
      width: 100%;
      min-height: 200px;
      border: 2px #ccc solid;
      color: #fff;
    }
    .cource_icon{
      font-size:30px;
      color:red;
      margin: 20px 0;
    }
          </style>

          <section class="about inner padding-lg">
              <div class="container">
                  <div class="row">
                    <div class="col-md-3 ">
                        <?php include('courselist.php'); ?>
                    </div>
                      <div class="col-md-9  left-block"><br><br>
                          <h4 style="color:red">
                            <?php  echo $category_value->category;?>
                          </h4><br>
                          <div style="border:1px solid black;"></div>

                            <div class="row">
                               <?php foreach($Allcource as $value):?>
                                 <div class="col-xs-12 col-sm-6 col-md-4">
                                   <!-- <i class="fa fa-book cource_icon" aria-hidden="true"></i> -->
                                   <a href="<?php echo base_url('home/businessadministration/').$value['id'];?>">
                                       <div class="box">
                                         <p class="text-center"><?php echo $value['subcategory']?></p>
                                       </div>
                                     </div>
                                  </a>
                               <?php endforeach;?>
                            </div>
                      </div>

               </div>
          </section>


          <!-- End Course Description -->
