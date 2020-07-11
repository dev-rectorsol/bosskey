<!-- Start Banner -->
<div class="inner-banner contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-9">
                <div class="content">
                    <h1>Apply and pay fees online</h1>
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
<section class="m-y-30">
    <div class="container">
        <div class="m-t-30">
            <h4>Apply and pay fees online</h4>
            <hr>
        </div>
        <div class="">
            <form action="#">
                <div class="row input-row">
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="text" name="firstName" value="" placeholder="First Name" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="Email" name="email" value="" placeholder="Email" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="number" name="mobile" id="" value="" placeholder="Mobile No." class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <select id="" name="course" class="form-control" required="" aria-required="true" required="required">
                            <option value="Master Program In Business Administration-11 Months ">Master Program In Business Administration-11 Months </option>
                            <option value="Master Program In Human Resource Management- 11 Months">Master Program In Human Resource Management- 11 Months</option>
                            <option value="Master Program In Supply Chain Management- 11 Months ">Master Program In Supply Chain Management- 11 Months </option>
                            <option value="Master Program In International Business- 11 Months ">Master Program In International Business- 11 Months </option>
                            <option value="Master Program In Business Administration + 3 Certifications-11 Months">Master Program In Business Administration + 3 Certifications-11 Months</option>
                            <option value="Master Program In Business Administration -2 Year ">Master Program In Business Administration -2 Year </option>
                            <option value="Master Program In Business Administration- 2 Year + 3 Certifications ">Master Program In Business Administration- 2 Year + 3 Certifications </option>
                            <option value="Executive Master Program In Business Administration- 11 Months ">Executive Master Program In Business Administration- 11 Months </option>
                            <option value="Executive Master Program In Business Administrationr + 4 Certifications 11 Months ">Executive Master Program In Business Administrationr + 4 Certifications 11 Months </option>
                            <option value="Executive Program in Business Management -11 Months + MSME Certified Manager ">Executive Program in Business Management -11 Months + MSME Certified Manager </option><option value="Executive Program in Business Management -11 Months + 3 Certification +MSME Certified Manager">Executive Program in Business Management -11 Months + 3 Certification +MSME Certified Manager</option>
                            <option value="Diploma In Business Administration + Master Program In Business Administration - 2 Year">Diploma In Business Administration + Master Program In Business Administration - 2 Year</option>
                            <option value="Diploma In Business Administration + Master Program In Business Administration -11 Months ">Diploma In Business Administration + Master Program In Business Administration -11 Months </option>
                            <option value="Diploma In Business Administration + Executive Master Program In Business Administration + 4 Certifications ">Diploma In Business Administration + Executive Master Program In Business Administration + 4 Certifications </option>
                            <option value="Diploma In Business Administration + Executive Master Program In Business Administration -11 Months ">Diploma In Business Administration + Executive Master Program In Business Administration -11 Months </option>
                            <option value="Diploma In Business Administration + Master Program In Business Administration + 3 Certifications -11 Months ">Diploma In Business Administration + Master Program In Business Administration + 3 Certifications -11 Months </option>
                            <option value="Diploma In Business Administration + Master Program In Business Administration - 2 Year + 3 Certifications ">Diploma In Business Administration + Master Program In Business Administration - 2 Year + 3 Certifications </option>
                            <option value="Certificate in financial Analysis-6 Months ">Certificate in financial Analysis-6 Months </option>
                            <option value="Executive Program in Financial Analysis-11 Months ">Executive Program in Financial Analysis-11 Months </option>
                            <option value="Post Graduate Program in Financial Analysis-11 Months ">Post Graduate Program in Financial Analysis-11 Months </option>
                            <option value="Business Analytics Certification - 6 Months ">Business Analytics Certification - 6 Months </option>
                            <option value="Executive Program in Business Analytics-11 Months ">Executive Program in Business Analytics-11 Months </option>
                            <option value="Post Graduate Program in Business Analytics-11 Months ">Post Graduate Program in Business Analytics-11 Months </option>
                            <option value="Certification in Human resource management - 6 Months ">Certification in Human resource management - 6 Months </option>
                            <option value="Post Graduate Program in Human resource management -11 Months ">Post Graduate Program in Human resource management -11 Months </option>
                            <option value="Executive Program in strategic Human resource management -11 Months ">Executive Program in strategic Human resource management -11 Months </option>
                            <option value="Digital Marketing Certification-6 Months ">Digital Marketing Certification-6 Months </option>
                            <option value="Executive Program In Digital Marketing -11 Months ">Executive Program In Digital Marketing -11 Months </option>
                            <option value="Post Graduate Program In Digital Marketing 11 Months ">Post Graduate Program In Digital Marketing 11 Months </option>
                            <option value="Data Science Certification ">Data Science Certification </option>
                            <option value="Executive Program in Data science ">Executive Program in Data science </option><option value="POST GRADUATE PROGRAM IN DATA SCIENCE">POST GRADUATE PROGRAM IN DATA SCIENCE</option>
                            <option value="Post Graduate Program in Management -11 Months ">Post Graduate Program in Management -11 Months </option>
                            <option value="Post Graduate Program in Management -11 Months + 3 Certification ">Post Graduate Program in Management -11 Months + 3 Certification </option>
                            <option value="Post Graduate Program in Management 11 Months + 3 Certification + Best Manager Award ">Post Graduate Program in Management 11 Months + 3 Certification + Best Manager Award </option>
                            <option value="Post Graduate Program In Business Administration -11 Months ">Post Graduate Program In Business Administration -11 Months </option>
                            <option value="Post Graduate Program In Management + Master Program In Business Administration -2 Years">Post Graduate Program In Management + Master Program In Business Administration -2 Years</option>
                            <option value="Diploma In Business Administration-6 Months ">Diploma In Business Administration-6 Months </option>
                            <option value="Advanced Diploma In Business Administration-6 Months ">Advanced Diploma In Business Administration-6 Months </option>
                            <option value="TUV SUD Post Graduate Certificate in Business Management+2 Certification ">TUV SUD Post Graduate Certificate in Business Management+2 Certification </option>
                            <option value="TUV SOD Post Graduate Certificate In Business Management ">TUV SOD Post Graduate Certificate In Business Management </option>
                            <option value="Post Graduate Diploma In Management- IPMA, UK">Post Graduate Diploma In Management- IPMA, UK</option>
                            <option value="Six Sigma Green Belt Professional -6 Months ">Six Sigma Green Belt Professional -6 Months </option>
                            <option value="Six Sigma Black Belt Professional ">Six Sigma Black Belt Professional </option>
                            <option value="Project Management Certification - 4 Months ">Project Management Certification - 4 Months </option>
                            <option value="Six Sigma Green Belt Professional + Six Sigma Black Belt Professional ">Six Sigma Green Belt Professional + Six Sigma Black Belt Professional </option>
                            <option value="Six Sigma Black Belt Professional + Total Quality Management Professional ">Six Sigma Black Belt Professional + Total Quality Management Professional </option>
                            <option value="SSGB + SSBB + TQM + PM ">SSGB + SSBB + TQM + PM </option>
                            <option value="Web Analytics Professional Certification ">Web Analytics Professional Certification </option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="number" name="courseFees" value="" placeholder="Course Fees" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <select name="" id="" class="form-control" required="required">
                            <option value="">INR (₹)</option>
                            <option value="">Dollar ($)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-12 m-t-30">
                    <p>DECLARATION : I have read and understood the rules and regulations of BIMT Institute of Business Management given in the prospectus and I do hereby agree to abide by the same.</p>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-12 m-t-30">
                    <input type="submit" value="Submit" class="btn btn-secondary">
                </div>
            </div><hr>
        </form>
    </div>
</div>
</section>
<!-- End Banner -->