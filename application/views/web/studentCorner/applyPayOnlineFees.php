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
                          <option>Select Cource</option>
                          <?php foreach($course as $value):?>
                           <option value="<?php echo $value['subcategory'];?>"><?php echo $value['subcategory'];?></option>
                        <?php endforeach;?>
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
