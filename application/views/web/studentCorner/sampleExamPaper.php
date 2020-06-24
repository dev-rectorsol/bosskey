<!-- Start Banner -->
<div class="inner-banner contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-9">
                <div class="content">
                    <h1>Sample Exam Paper</h1>
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
            <h4>Download Sample of Examination Paper</h4>
            <hr>
        </div>
        <p><strong>For download Sample of Examination Paper, Please fill the form</strong></p>
        <div class="form-group">
            <form action="#">
                <div class="m-t-15 col-md-6">
                    <input type="text" name="name" value="" placeholder="Name" class="form-control">
                </div>
                <div class="m-t-15 col-md-6">
                    <input type="Email" name="email" value="" placeholder="Email" class="form-control">
                </div>
                <div class="m-t-15 col-md-6">
                    <input type="number" name="mobile" value="" placeholder="Mobile" class="form-control">
                </div>
                <div class="m-t-15 col-md-6">
                    <select name="Courses" class="form-control" aria-invalid="false">
                        <option value="Executive Certification">Executive Certification</option>
                        <option value="Certified Manager">Certified Manager</option>
                        <option value="International Courses">International Courses</option>
                        <option value="After 12th- DBA+Master Certification">After 12th- DBA+Master Certification</option>
                        <option value="Master Certification">Master Certification</option>
                        <option value="Executive Master Certification">Executive Master Certification</option><option value="Professional Certification">Professional Certification</option>
                        <option value="Human Resource Management">Human Resource Management</option>
                        <option value="Marketing Management">Marketing Management</option>
                    </select>
                </div>
                <div class="m-t-15 col-md-12">
                    <input type="submit" value="Submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</section>