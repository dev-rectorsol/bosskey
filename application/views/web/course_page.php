
      <!-- Start Banner -->

          <div class="inner-banner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-lg-9">
                                    <div class="content">
                                        <h1>

                                           <?php
                                              if(isset($subcategory_value)){
                                            foreach($subcategory_value as $value){
                                            if($value['id']==$course->subcategory_id)
                                            echo $value['subcategory'];
                                          } } else{
                                            foreach($category_value as $value){
                                            if($value['id']==$course->category_id)
                                            echo $value['category'];
                                          } } ;?>
                                        </h1>
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

                          <?php echo $course->courseoverview;?>
                        
                <!-- End Course Description -->

                <!-- Start Course Details Tab -->

                <!-- End Course Details Tab -->
