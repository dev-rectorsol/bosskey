<style>
    .register .regiter-inner {
    max-width: 1260px;
}
select#phonecode {
    height: 46px;
    margin-bottom: 30px;
    padding: 0px 5px;
    background: none;
    border: none;
    border-left: 1px #dae4e8 solid;
    border-bottom: 1px #dae4e8 solid;
    font-size: 12px;
    font-weight: 700;
    color: #7f8385;
    z-index: 2;
    position: relative;
}
</style>
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
                            <input name="fname" type="text" placeholder="First Name" required="">
                        </div>
                        <div class="col-sm-6">
                            <input name="lname" type="text" placeholder="Last Name" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input name="street" type="text" placeholder="Street" required="">
                        </div>
                        <div class="col-sm-6">
                            <input name="apartment" type="text" placeholder="Apartment" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input name="zipcode" type="text" placeholder="Zip Code" required="">
                        </div>
                        <div class="col-sm-6">
                            
                            <select class="custom_select" name="country" id="country" required="">
                                <option value="101">India</option>
                                <?php foreach ($country as  $value):?>
                                <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <select class="custom_select" name="state" id="addstates" required="">
                                <?php foreach ($state as $value):?>
                                <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                <?php endforeach;?>
                                <option value="">Select State</option>
                            </select>
                        </div>
                        <div class="col-sm-6 clearfix">
                            <select name="phonecode" name="country_code" id="phonecode" required="">
                                <option value="101">In(+91)</option>
                            </select>
                            
                            
                            <input name="phone_number" type="text" placeholder="000-000-0000" class="phone-no" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input name="email" type="text" placeholder="Email" required="">
                        </div>
                        <div class="col-sm-6">
                            <select class="custom_select" name="program" required="">
                                <option value="Master Program In Business Administratio-11 Months">Master Program In Business Administratio-11 Months</option>
                                <option value="Master Program In Business Administration + 3 Certification -11 Months">Master Program In Business Administration + 3 Certification -11 Months</option>
                                <option value="Master Program In Human Resource Management -11 Months">Master Program In Human Resource Management -11 Months</option>
                                <option value="Master Program In International Business - 11 Months">Master Program In International Business - 11 Months</option>
                                <option value="Master Program In Supply Chain Management - 11 Months">Master Program In Supply Chain Management - 11 Months</option>
                                <option value="Master Program In Business Administration - 2 Years">Master Program In Business Administration - 2 Years</option>
                                <option value="Master Program In Business Administration - 2 Years + 3 Certifications">Master Program In Business Administration - 2 Years + 3 Certifications</option>
                                <option value="Executive Master Program In Business Administration- 11 Months">Executive Master Program In Business Administration- 11 Months</option>
                                <option value="Executive Master Program In Business Administration + 4 Certifications – 11 Months">Executive Master Program In Business Administration + 4 Certifications – 11 Months</option>
                                <option value="Executive Program in Business Management -11 Months">Executive Program in Business Management -11 Months</option>
                                <option value="Executive Program in Business Management -11 Months + 3 Certification">Executive Program in Business Management -11 Months + 3 Certification</option>
                                <option value="Diploma In Business Administration + Master Program In Business Administration – 2 Year">Diploma In Business Administration + Master Program In Business Administration – 2 Year</option>
                                <option value="Diploma In Business Administration(DBA) + Master Program In Business Administration – 11 Months">Diploma In Business Administration(DBA) + Master Program In Business Administration – 11 Months</option>
                                <option value="Diploma In Business Administration + Executive Master Program In Business Administration + 4 Certifications">Diploma In Business Administration + Executive Master Program In Business Administration + 4 Certifications</option>
                                <option value="Diploma In Business Administration(DBA) + Executive Master Program In Business Administration – 11 Months">Diploma In Business Administration(DBA) + Executive Master Program In Business Administration – 11 Months</option>
                                <option value="Diploma In Business Administration + Master Program In Business Administration + 3 Certifications -11 Months">Diploma In Business Administration + Master Program In Business Administration + 3 Certifications -11 Months</option>
                                <option value="Diploma In Business Administration + Master Program In Business Administration – 2 Year + 3 Certifications">Diploma In Business Administration + Master Program In Business Administration – 2 Year + 3 Certifications</option>
                                <option value="Certificate in financial Analysis-6 Months">Certificate in financial Analysis-6 Months</option>
                                <option value="Executive Program in Financial Analysis-11 Months">Executive Program in Financial Analysis-11 Months</option>
                                <option value="Post Graduate Program in Financial Analysis-11Months">Post Graduate Program in Financial Analysis-11Months</option>
                                <option value="Business Analytics Certification – 6 Months">Business Analytics Certification – 6 Months</option>
                                <option value="Executive Program in Business Analytics-11 Months">Executive Program in Business Analytics-11 Months</option>
                                <option value="Post Graduate Program in Business Analytics-11Months">Post Graduate Program in Business Analytics-11Months</option>
                                <option value="Certification in Human Resource Management – 6 Months">Certification in Human Resource Management – 6 Months</option>
                                <option value="Post Graduate Program in Human Resource Management – 11 Months">Post Graduate Program in Human Resource Management – 11 Months</option>
                                <option value="Executive Program in strategic Human resource management – 11 Months">Executive Program in strategic Human resource management – 11 Months</option>
                                <option value="Digital Marketing Certification-6 Months">Digital Marketing Certification-6 Months</option>
                                <option value="Executive Program In Digital Marketing -11 Months">Executive Program In Digital Marketing -11 Months</option>
                                <option value="Post Graduate Program In Digital Marketing 11 Months">Post Graduate Program In Digital Marketing 11 Months</option>
                                <option value="Certified Industrial Accountant +2 Certification - 6 Months">Certified Industrial Accountant +2 Certification - 6 Months</option>
                                <option value="Data Science Certification – 6 Months">Data Science Certification – 6 Months</option>
                                <option value="Executive Program in Data science – 11 Months">Executive Program in Data science – 11 Months</option>
                                <option value="Post Graduate Program In Data Science -11 Months">Post Graduate Program In Data Science -11 Months</option>
                                <option value="Post Graduate Program In Management- 11 Months">Post Graduate Program In Management- 11 Months</option>
                                <option value="Post Graduate Program in Management – 11 Months + 3 Certification">Post Graduate Program in Management – 11 Months + 3 Certification</option>
                                <option value="Post Graduate Program in Management -11-Months -3-Certification Best Manager Award">Post Graduate Program in Management -11-Months -3-Certification Best Manager Award</option>
                                <option value="Post Graduate Program In Management + Master Program In Business Administration – 2 Years">Post Graduate Program In Management + Master Program In Business Administration – 2 Years</option>
                                <option value="Diploma In Business Administration-6 Months">Diploma In Business Administration-6 Months</option>
                                <option value="Advanced Diploma In Business Administration-6 Months">Advanced Diploma In Business Administration-6 Months</option>
                                <option value="TÜV SÜD Post Graduate Certificate in Business Management + 2 Certification">TÜV SÜD Post Graduate Certificate in Business Management + 2 Certification</option>
                                <option value="TÜV SÜD Post Graduate Certificate In Business Management">TÜV SÜD Post Graduate Certificate In Business Management</option>
                                <option value="Post Graduate Diploma in Management in IPMA UK">Post Graduate Diploma in Management in IPMA UK</option>
                                <option value="Six Sigma Green Belt Professional 6 Months">Six Sigma Green Belt Professional 6 Months</option>
                                <option value="Six Sigma Black Belt Professional">Six Sigma Black Belt Professional</option>
                                <option value="Project Management Certification 4 Months">Project Management Certification 4 Months</option>
                                <option value="Six Sigma Green Belt + Six Sigma Black Belt Professional">Six Sigma Green Belt + Six Sigma Black Belt Professional</option>
                                <option value="Six Sigma Master Black Belt Professional">Six Sigma Master Black Belt Professional</option>
                                <option value="Six Sigma Black Belt Professional + Total Quality Management Professional">Six Sigma Black Belt Professional + Total Quality Management Professional</option>
                                <option value="SSGB+SSBB+TQM+PM Certification">SSGB+SSBB+TQM+PM Certification</option>
                                <option value="Web Analytics Professional Certification">Web Analytics Professional Certification</option>
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
                            <button type="submit" class="btn">Apply now<span class="icon-more-icon"></span> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End apply online -->