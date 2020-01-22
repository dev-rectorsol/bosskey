
       <!-- Start Banner -->
       <div class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <h1>Online Apply</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Banner -->
    <!-- Start apply online -->
        <section class=" register">
            <div class="inner">
                <div class="regiter-inner">

                     <div class="head-block text-center">
                        <h3>Apply Now</h3>
                    </div>

          <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
            <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i>
              <?php echo $msg; ?> &nbsp;
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
            </div>
        <?php endif ?>
                    <div class="cnt-block">
                        <form action="<?php echo base_url('home/submit_onlineform');?>" method="post" class="form-outer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input name="fname" type="text" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input name="lname" type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input name="street" type="text" placeholder="Street">
                                </div>
                                <div class="col-sm-6">
                                    <input name="apartment" type="text" placeholder="Apartment">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input name="zipcode" type="text" placeholder="Zip Code">
                                </div>
                                <div class="col-sm-6">
                                    <select class="custom_select" name="state">
                                        <option value="State">State</option>
                                        <option value="Tamilnadu">Tamilnadu</option>
                                        <option value="Karnataka">Karnataka</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="custom_select" name="country">
                                        <option value="Country">Country</option>
                                        <option value="UK">INDIA</option>
                                        <option value="UK">UK</option>
                                        <option value="USA">USA</option>
                                        <option value="UAE">UAE</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 clearfix">
                                    <input name="country_code" type="text" placeholder="+91" class="country-code">
                                    <input name="phone_number" type="text" placeholder="000-000-0000" class="phone-no">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input name="email" type="text" placeholder="Email">
                                </div>
                                <div class="col-sm-6">
                                    <select class="custom_select" name="program">
                                        <option value="Program">Program</option>
                                        <option value="Program">Program2</option>
                                        <option value="Program">Program3</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm-6">
                                    <select class="custom_select">
                                        <option value="How did you hear about us?">How did you hear about us?</option>
                                        <option value="How did you hear about us?">How did you hear about us?</option>
                                        <option value="How did you hear about us?">How did you hear about us?</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="date">
                                        <input type='text' class="datepicker" placeholder="Graduation Year" />
                                        <span class="icon-calander-icon"></span> </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-sm-6 clearfix">
                                    <div class="col-left">
                                        <h2>Gender</h2>
                                        <ul class="select-opt clearfix">
                                            <li>
                                                <input id="f-option" name="selector" type="radio">
                                                <label for="f-option">Male</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input id="s-option" name="selector" type="radio">
                                                <label for="s-option">Female</label>
                                                <div class="check">
                                                    <div class="inside"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <div class="col-md-12">
                                <p><strong>DECLARATION :</strong>I have read and understood the rules and regulations of IIBM Institute of Business Management given in the prospectus and I do hereby agree to abide by the same.</p>
                            </div>
                            </div>
                            <div class="button-outer text-center">
                              <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                              <button type="submit" class="enquire-btn">Enquire now<span class="icon-more-icon"></span> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End apply online -->
