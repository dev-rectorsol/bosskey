
      <!-- Start Banner -->

          <div class="inner-banner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-lg-9">
                                    <div class="content">
                                        <h1>
                                           <?php foreach($subcategory_value as $value):
                                            if($value['id']==$course->subcategory_id)
                                            echo $value['subcategory'];
                                            endforeach;?>
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
                <section class="about inner padding-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9  left-block">
                                <?php echo $course->courseoverview?>
                            </div>
                            <div class="col-md-3 right-block">
                                <?php include('layout/courselist.php'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="course-detail clearfix">
                                  <?php echo $course->shortdetails?>
                                    <a href="<?php echo base_url('onlineapply') ?>" class="btn">apply now <span class="icon-more-icon"></span></a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Course Description -->

                <!-- Start Course Details Tab -->
                <section class="details-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                                    <ul class="nav nav-tabs course-tab" id="myTabs" role="tablist">
                                        <li role="presentation" class="active"> <a href="#curriculam" id="curriculam-tab" role="tab" data-toggle="tab" aria-controls="curriculam" aria-expanded="true"> <span class="icon-curriculam-icon"></span>
                                            <div class="block">COURSE</div>
                                            CURRICULUM </a> </li>
                                        <li role="presentation" class=""> <a href="#schedule" role="tab" id="schedule-tab" data-toggle="tab" aria-controls="schedule" aria-expanded="false"> <span class="icon-schedule-icon"></span>
                                            <div class="block">FEES</div>
                                             DETAILS</a> </li>
                                        <li role="presentation" class=""> <a href="#semester" role="tab" id="semester-tab" data-toggle="tab" aria-controls="semester" aria-expanded="false"> <span class="icon-semester-icon"></span>
                                            <div class="block">Key TAKE AWAY</div>
                                             </a> </li>
                                        <li role="presentation" class=""> <a href="#teachers" role="tab" id="teachers-tab" data-toggle="tab" aria-controls="teachers" aria-expanded="false"> <span class="icon-parents-icon"></span>
                                            <div class="block">WHO </div>
                                            SHOULD ATTEND </a> </li>

                                            <li role="presentation" class=""> <a href="#career" role="tab" id="career-tab" data-toggle="tab" aria-controls="career" aria-expanded="false"> <span class="icon-student-icon"></span>
                                            <div class="block">POTENTIAL</div>
                                            CAREER GROWTH</a> </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                         <div class="tab-pane fade semester active in" role="tabpanel" id="curriculam" aria-labelledby="curriculam-tab">


                                            <div class="row">
                                                <?php echo $course->curriculam;?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpanel" id="schedule" aria-labelledby="schedule-tab">
                                            <?php echo $course->feesdetails;?>
                                        </div>
                                        <div class="tab-pane fade" role="tabpanel" id="semester" aria-labelledby="semester-tab">
                                            <div class="row">
                                              <?php echo $course->keytakeaway;?>

                                            </div>
                                        </div>
                                        <div class="tab-pane semester fade" role="tabpanel" id="teachers" aria-labelledby="teachers-tab">
                                        <div class="row">
                                              <?php echo $course->whoshouldattend;?>

                                            </div>
                                        </div>

                                        <!-- add new contant-->
                                        <div class="tab-pane fade" role="tabpanel" id="career" aria-labelledby="career-tab">
                                            <div class="row">
                                                <?php echo $course->Potentialcarrergroth;?>

                                            </div>
                                        </div>
                                        <!-- add new contant-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Course Details Tab -->
