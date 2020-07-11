<!-- Start Banner -->
<div class="inner-banner contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-9">
                <div class="content">
                    <h1>Student Login</h1>
                </div>
                <?php $msg = $this->session->flashdata('msg'); ?>
                <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i>
                    <?php echo $msg; ?> &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
<!-- Start Course Details Tab -->
<section class="details-tab">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                    <ul class="nav nav-tabs course-tab" id="myTabs" role="tablist">
                        <li role="presentation" class="active"> <a href="#curriculam" id="curriculam-tab" role="tab" data-toggle="tab" aria-controls="curriculam" aria-expanded="true">
                            OLD STUDENTS </a> </li>
                        <li role="presentation" class=""> <a href="#schedule" role="tab" id="schedule-tab" data-toggle="tab" aria-controls="schedule" aria-expanded="false">
                        2018 ONWARDS REGISTERED STUDENTS</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent" style="background-color:white;">
                    <div class="tab-pane fade semester active in" role="tabpanel" id="curriculam" aria-labelledby="curriculam-tab">
                        <div class="row m-y-30 ">
                            <div class="col-sm-8 m-y-30">
                                <p><strong>E-Learning Portal</strong></p>
                                <p>A learning portal is a gateway to all the courses, resources, and instruments that facilitate teaching and learning. How to Login on E-learning following Steps are given below:-</p>
                                <p><strong>Step 1:</strong> Go to the URL bimtonline.in / E-Learning</p>
                                <p><strong>Step 2:</strong> You need to enter your User Name and Password.</p>
                                <p><strong>Step 3:</strong> Hit your enter key or click LOGIN.</p>
                                <p><strong>Step 4:</strong> If all is well, you should now be at the HOME PAGE of bimtonline.in Portal/eLearning. It even has your name on it!</p>
                                <p><strong>Step 5:</strong> On the page you will see a blocks of E-Book, Video Lecture, Personality Development Videos and other. Select the Blocks you want to work on, click and you’ll be taken to the Blocks home page.</p>
                                <p>&nbsp;</p>
                                <p><strong>Benefits of E-learning Portal</strong></p>
                                <ul>
                                    <li>E- Learning Accommodates Everyone’s Needs</li>
                                    <li>Lectures Can Be Taken Any Number Of Times</li>
                                    <li>Offers Access To Updated Content</li>
                                    <li>Quick Delivery Of Lessons</li>
                                    <li>Consistency</li>
                                </ul>
                            </div>
                            <div class="col-sm-4 m-y-30">
                                <div class="text-center">
                                    <img width="128" height="128" src="<?php echo base_url('assets/images/old.jpg'); ?>" class="attachment-full" alt="" srcset="https://www.iibmindia.in/wp-content/uploads/2017/12/login.png 128w, https://www.iibmindia.in/wp-content/uploads/2017/12/login-70x70.png 70w, https://www.iibmindia.in/wp-content/uploads/2017/12/login-50x50.png 50w" sizes="(max-width: 128px) 100vw, 128px">
                                </div>
                                <div class="">
                                    <h2 style="text-align: center;"><strong>OLD REGISTERED STUDENTS</strong></h2>
                                </div>
                                <div class="">
                                    <p style="text-align: center;"><a href="#">CLICK HERE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="schedule" aria-labelledby="schedule-tab">
                        <div class="row p-l-20">
                            <div class="col-sm-8 m-y-30">
                                <div class="">
                                    <p><strong>Moodle</strong></p>
                                    <p><strong>&nbsp;</strong></p>
                                    <p>Moodle is a learning platform designed to provide educators, administrators and learners with a single robust, secure and integrated system to create personalised learning environments. How to Login on Moodle following Steps are given below:-</p>
                                    <p><strong>Step 1:</strong> Go to the URL mybimtindia.in/ E-Learning</p>
                                    <p><strong>Step 2:</strong> You need to enter your User Name and Password.</p>
                                    <p><strong>Step 3:</strong> After Login you will be at HOME PAGE display containing a list of&nbsp; all your courses in which you are enrolled. of http://mybimtindia.in/elearning/. It even has your name on it!</p>
                                    <p><strong>Key Benefits to Students </strong></p>
                                    <p>For students, Moodle offers students an e-learning platform and with its flexibility and intuitive user interface, provides a number of benefits. Students may for example develop or submit solutions directly online. In this way Moodle supports and makes the students’ self study easier.</p>
                                    <p>Students become familiar with standard teaching software that is in wide use at schools internationally and via distance learning systems on the Web.</p>
                                    <ul>
                                        <li>Gives students immediate, detailed washback</li>
                                        <li>They see their results immediately. They don’t have to wait.</li>
                                        <li>Their grades are centralized and accessible to them (during class) and easy for them to keep track of.</li>
                                    </ul>
                                    <p>Computer tests are easy to repeat. A student can take a learning quiz twice in a row and you can give him the higher score, or you can give him an adaptive quiz in which he can respond more than once to a question, but is penalized for any incorrect response. These can be used for learning.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 m-y-30">
                                <div class="text-center">
                                    <img width="128" height="128" src="<?php echo base_url('assets/images/onwords.jpg'); ?>" class="attachment-full" alt="" srcset="https://www.iibmindia.in/wp-content/uploads/2017/12/login-1.png 128w, https://www.iibmindia.in/wp-content/uploads/2017/12/login-1-70x70.png 70w, https://www.iibmindia.in/wp-content/uploads/2017/12/login-1-50x50.png 50w" sizes="(max-width: 128px) 100vw, 128px">
                                </div>
                                <div class="">
                                    <h2 style="text-align: center;"><strong>2018 ONWARDS REGISTERED STUDENTS&nbsp;</strong></h2>
                                </div>
                                <div class="">
                                    <p style="text-align: center;"><a href="#">CLICK HERE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>