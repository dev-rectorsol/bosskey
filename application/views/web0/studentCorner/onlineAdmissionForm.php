<style>
.contact-bottom { background: #d81a1c;}
</style>
<!-- Start Banner -->
<div class="inner-banner contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-9">
                <div class="content">
                    <h1>Online Admission Form</h1>
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
<!-- Start Alumni Speak -->
<section>
    <div class="container">
        <div class="m-t-30">
            <h4>Online Admission Form</h4>
            <hr>
        </div>
        <form action="#">
            <div class="row input-row">
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="counselorName" value="" placeholder="Counselor Name" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="Email" name="counselorEmail" value="" placeholder="Counselor Email" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="firstName" value="" placeholder="First Name" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="middleName" value="" placeholder="Middle Name" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="lastName" value="" placeholder="Last Name" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="date" name="dob" value="" placeholder="Date Of Birth" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <select name="studentCategory" id="studentCategory" class="form-control" required="required">
                        <option value="indian"> Indian </option>
                        <option value="NRI/international"> NRI/International </option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30" required="required">
                    <select name="gender" id="" class="form-control">
                        <option value="male"> Male </option>
                        <option value="female"> Female </option>
                    </select>
                </div>
            </div><hr>
            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <label for="">Address</label>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="address" id="" value="" placeholder="Address" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="city" id="" value="" placeholder="City" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="state" id="" value="" placeholder="State" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="country" id="" value="" placeholder="Country" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="number" name="pincode" id="" value="" placeholder="Pin Code" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="number" name="std" id="" value="" placeholder="Telephone STD" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="number" name="mobile" id="" value="" placeholder="Mobile No." class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="Email" name="email" id="" value="" placeholder="Email" class="form-control" required="required">
                </div>
            </div><hr>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <label for="">Your Current Organization Details</label>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="nameOfOrganization" id="" value="" placeholder="Name Of The Organization" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="number" name="totalService" id="" value="" placeholder="Total Service (Years)" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="currentDesignation" id="" value="" placeholder="Current Designation" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="text" name="yourCountry" id="" value="" placeholder="Country" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="number" name="yourPincode" id="" value="" placeholder="Pin Code" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="number" name="YourStd" id="" value="" placeholder="Telephone STD" class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="number" name="yourMobile" id="" value="" placeholder="Mobile No." class="form-control" required="required">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                    <input type="Email" name="yourEmail" id="" value="" placeholder="Email" class="form-control" required="required">
                </div>
            </div><hr>
            <div class="row">
                <h4>Course Selected: (Please refer to the Information Brochure or ask your Counsellor)</h4>
            </div>
            <div class="row form-group m-t-30">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <label for="dualPro">Dual Program</label>
                    <select name="dualPro" id="dualPro" class="form-control" required="required">
                        <option value="" selected=""> -- Select Program -- </option>
                        <option value="">Post Graduate Diploma in Management + Master Program in Business Administration - 2 Year</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <lable for="" id="">MANAGEMENT CERTIFICATION PROGRAMS<span style="font-size:12px; color:#666;margin-left:8px"><i>(Press Ctrl for multiple selection)</i></span></lable>
                    <select name="managementpro[]" multiple="multiple" class="form-control" required="required">
                        <option value="Executive Program in Business Administration - 1 Year">Executive Program in Business Administration - 1 Year</option>
                        <option value="Executive Program in Business Administration - 1Year + 4 Certification">Executive Program in Business Administration - 1Year + 4 Certification</option>
                        <option value="Master Program in Business Administration - 1 Year">Master Program in Business Administration - 1 Year</option>
                        <option value="Master Program in Human Resource Management - 1Year">Master Program in Human Resource Management - 1Year</option>
                        <option value="Master Program in International Business - 1 Year Master">Master Program in International Business - 1 Year Master</option>
                        <option value="Program in Supply Chain Management - 1Year">Program in Supply Chain Management - 1Year</option>
                        <option value="Master Program in Business Administration - 1 Year + 3 Certifications">Master Program in Business Administration - 1 Year + 3 Certifications</option>
                        <option value="Master Program in Business Administration - 2Year">Master Program in Business Administration - 2Year</option>
                        <option value="Master Program in Business Administration - 2 Year +3 Certifications">Master Program in Business Administration - 2 Year +3 Certifications</option>
                        <option value="Executive Master Program in Business Administration - 1Year">Executive Master Program in Business Administration - 1Year</option>
                        <option value="Executive Master Program in Business Administration - 1 Year +4 Certifications">Executive Master Program in Business Administration - 1 Year +4 Certifications</option>
                        <option value="Certif1ied Manager - 6 Months">Certif1ied Manager - 6 Months</option>
                        <option value="Associate Certified Manager - 6 Months">Associate Certified Manager - 6 Months</option>
                        <option value="Certified Manager + 3 Certifications - 6Months">Certified Manager + 3 Certifications - 6Months</option>
                        <option value="Associate Certified Manager + 3 Certifications- 6Months">Associate Certified Manager + 3 Certifications- 6Months</option>
                        <option value="Certification in Human Resources Management - 6 Months">Certification in Human Resources Management - 6 Months</option>
                        <option value="Executive Program in Strategic Human Resources Management - 11 Months">Executive Program in Strategic Human Resources Management - 11 Months</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <lable>DIPLOMA PROGRAMS <span style="font-size:12px; color:#666;margin-left:8px"><i>(Press Ctrl for multiple selection)</i></span></lable><br>
                    <select name="dilomapro[]" class="form-control" aria-invalid="false" multiple="multiple" required="required">
                        <option value="Diploma in Business Administration - 6Months">Diploma in Business Administration - 6Months</option>
                            <option value="Advance Diploma in Business Administration - 6Months">Advance Diploma in Business Administration - 6Months</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <lable>INTEGRATED CERTIFICATION PROGRAMS<span style="font-size:12px; color:#666;margin-left:8px"><i>(Press Ctrl for multiple selection)</i></span></lable>
                    <select name="integratedpro[]" class="form-control" aria-invalid="false" multiple="multiple" required="required">
                        <option value="Diploma in Business Administration + Master Program in Business Administration - 1 Year">Diploma in Business Administration + Master Program in Business Administration - 1 Year</option>
                        <option value="Diploma in Business Administration + Master Program in Business Administration - 1 Year + 3 Certifications">Diploma in Business Administration + Master Program in Business Administration - 1 Year + 3 Certifications</option>
                        <option value="Diploma in Business Administration + Master Program in Business Administration - 2 Year">Diploma in Business Administration + Master Program in Business Administration - 2 Year</option>
                        <option value="Diploma in Business Administration + Master Program in Business Administration - 2 Year + 3 Certifications">Diploma in Business Administration + Master Program in Business Administration - 2 Year + 3 Certifications</option>
                        <option value="Diploma in Business Administration + Executive Master Program in Business Administration - 1 Year">Diploma in Business Administration + Executive Master Program in Business Administration - 1 Year</option>
                        <option value="Diploma in Business Administration + Executive Master Program in Business Administration - 1 Year + 4 Certifications">Diploma in Business Administration + Executive Master Program in Business Administration - 1 Year + 4 Certifications</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <lable>POST GRADUATE CERTIFICATION PROGRAMS<span style="font-size:12px; color:#666;margin-left:8px"><i>(Press Ctrl for multiple selection)</i></span></lable><br>
                    <select name="postgraduate[]" class="form-control" aria-invalid="false" multiple="multiple" required="required">
                        <option value="Post Graduate Diploma in Management – 1 Year">Post Graduate Diploma in Management – 1 Year</option>
                        <option value="Post Graduate Diploma in Management + 3 certifications– 1 Year">Post Graduate Diploma in Management + 3 certifications– 1 Year</option>
                        <option value="Post Graduate Diploma in Management + Certified Manager + Best Manager Award– 1 Year">Post Graduate Diploma in Management + Certified Manager + Best Manager Award– 1 Year</option>
                        <option value="Post Graduate Diploma in Management + Certified Manager + 3 Certifications + Best Manager Award– 1 Year">Post Graduate Diploma in Management + Certified Manager + 3 Certifications + Best Manager Award– 1 Year</option>
                        <option value="Post Graduate Program in Human Resources Management - 6 Months">Post Graduate Program in Human Resources Management - 6 Months</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <label for="internationalpro">INTERNATIONAL PROGRAMS</label>
                    <select name="internationalpro" id="internationalpro" class="form-control" required="required">
                        <option value=""> --- Select Program --- </option>
                        <option value="Post Graduate Diploma in Management- IPMA, UK">Post Graduate Diploma in Management- IPMA, UK</option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <lable for="masterpro">MASTER PROGRAM</lable>
                    <select name="masterpro" id="masterpro" class="form-control" aria-invalid="false" required="required">
                        <option value=""> --- Select Program --- </option>
                        <option value="Master Program in Computer Application - 1 Year">Master Program in Computer Application - 1 Year</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <textarea name="Speci" cols="40" rows="5" class="form-control" aria-invalid="false" placeholder="Specialization"></textarea>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <textarea name="specialnew" cols="40" rows="5" class="form-control" aria-invalid="false" placeholder="Specialization"></textarea>
                </div>
            </div>
            
            <div class="row form-group">
               <div class="col-md-6 col-lg-6 col-xl-6">
                    <lable for="creditbase">Opted For Credit Based System</lable><br>
                    <select name="creditbase" id="creditbase" class="form-control" aria-invalid="false" required="required">
                        <option value="---">---</option><option value="Yes">Yes</option><option value="No">No</option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <lable for="PaymentMethod">Payment Method</lable><br>
                    <select name="PaymentMethod" id="PaymentMethod" class="form-control" aria-required="true" aria-invalid="false" required="required">
                        <option value="---">---</option>
                        <option value="Lumpsum">Lumpsum</option>
                        <option value="Installment">Installment</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
               <div class="col-md-6 col-lg-6 col-xl-6">
                    <lable for="ExaminationMethod">Examination Method</lable>
                    <select name="ExaminationMethod" id="ExaminationMethod" class="form-control" aria-invalid="false" required="required">
                        <option value="---">---</option>
                        <option value="Online">Online</option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <lable for="Paymentmode">Mode of Payment</lable>
                    <select name="Paymentmode" id="Paymentmode" class="form-control" aria-required="true" aria-invalid="false" required="required">
                        <option value="---">---</option>
                        <option value="DD/Cheque">DD/Cheque</option>
                        <option value="Online Transaction">Online Transaction</option>
                        <option value="Cash Deposit">Cash Deposit</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
               <div class="col-md-12 col-lg-12 col-xl-12">
                    <h4>SELF ATTESTED PHOTO COPY OF FOLLOWING DOCUMENTS ATTACHED HEREWITH (PLEASE MARK)<span style="font-size:12px; color:#666; margin-left:8px;"><i>(Press Ctrl for multiple selection)</i></span></h4>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-12 m-t-30">
                    <select name="selfattested[]" class="form-control" aria-invalid="false" multiple="multiple" required="required">
                        <option value="Graduation 3rd Year Marksheet / Diploma">Graduation 3rd Year Marksheet / Diploma</option>
                        <option value="4 Photographs">4 Photographs</option>
                        <option value="Experience Certificate">Experience Certificate</option>
                        <option value="CV">CV</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <input type="file" name="file-275" size="40" class="form-control" accept=".pdf,.tx,.doc,.jpg,.png" aria-invalid="false" required="required"></span>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <h4 style="text-align:center;">Certificate of Undertaking</h4>
                    <p class="m-t-30">I have carefully read the rules and regulations as given in this Application and agree to abide by the same.I understand these rules are only indicative and may be modified/changed/revised from time to time. I agree not to countermand and to honor all the post dated cheques enclosed by me towards the Installment Facility.I understand that in case I withdraw from the program I will not been titled to claim any refund of amount paid.I agree that I will settle the amount with BIMT whether or not I continue in the program, I understand the Jurisdiction for alldisputes (if any) relating to the Institute is only/exclusively Meerut, Uttar Pradesh. I hereby declare that the information provided by me in the Application is true and correct to the best of my knowledge. My signature below certifies that I have read understood and agree to the rules and regulations,including “Legal Aspects” and my financial responsibilities</p>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <h4 style="text-align:center;">Rules &amp; Regulation of Institute </h4>
                    <p class="m-t-30">The Institute reserves the right to accept or reject an application without assigning any reason whatsoever.The necessary fee to be paid would be in favour of “BIMT Institute of Business Management” Payable at NewDelhi/Meerut will have to be sent along with the filled up application form. Allotment of examination centre in a particular place will be at the discretion of the Board of  Examination of the Institute which reserves the right to cancel any centre if there is insufficient number of students.BIMT courses are industry endorsed certificate courses, not degrees.The Institute reserves the right to change the course details without notice as per the prevailing conditions Service Tax of 15% is applicable on all the course.</p>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <input type="submit" value="SUBMIT" class="btn btn-success" id="submit">
                </div>
            </div>

        </form>
    </div>
</section>
    <!-- end Alumni Speak -->