<!-- Start Banner -->
        <div class="inner-banner contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <h1>Contact Us</h1>
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

        <!-- Start Contact Us -->
        <section class="form-wrapper padding-lg">
            <div class="container">

                    <form action="<?php echo base_url('home/submit_contact');?>" method="post" class="form-outer" id="ContactForm">
                    <div class="row input-row">
                        <div class="col-sm-6">
                            <input name="first_name" type="text" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <input name="last_name" type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row input-row">
                    <div class="col-sm-6">
                            <input name="business_email" type="text" placeholder="Business Email">
                        </div>
                        <div class="col-sm-6">
                            <input name="phone_number" type="text" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="row input-row">

                        <div class="col-sm-12">
                            <input name="job_title" type="text" placeholder="Message">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 m-t-20">
                            <!-- <button class="btn m-t-30">Apply Now <span class="icon-more-icon"></span></button> -->
                            <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <button type="submit" class="enquire-btn">Apply Now<span class="icon-more-icon"></span> </button>
                            <div class="msg"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end Contact Us -->

        <!-- Start Google Map -->
        <section class="google-map">
            <div id="map"><iframe src="https://snazzymaps.com/embed/21734" style="border:none;"></iframe></div>
            <div class="container">
                <div class="contact-detail">
                    <div class="address">
                        <div class="inner">
                            <h3>Bosssky</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>
                        </div>
                        <div class="inner">
                            <h3>000 0000 000</h3>
                        </div>
                        <div class="inner"> <a href="mailto:info@edumart.com">info@bosssky.com</a> </div>
                    </div>
                    <div class="contact-bottom">
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Google Map -->
