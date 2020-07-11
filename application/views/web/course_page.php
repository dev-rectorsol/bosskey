
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

                        <div class="leftsidebar">
                          <?php echo $course->courseoverview;?>
                        </div>
                          <div class="col-md-siderbar" id="hidden-template" style="display:none;">
                            <?php include('courselist.php'); ?>
                        </div>

                        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
                        <script>
                        $(document).ready(function(){
                          var template = $('#hidden-template').html();
                          $("#courseList").append(template);
                        });
                        </script>
                        <script>
                        $(document).ready(function(){
                        var url = '<?php echo base_url('onlineapply') ?>' ;
                          $("#apply").attr("href", url);
                        });
                        </script>



                <!-- End Course Description -->
