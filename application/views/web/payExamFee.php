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
                        <input type="text" name="amount" value="" placeholder="Amount" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="text" name="name" value="" placeholder="Name" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="text" name="address" id="" value="" placeholder="Address" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="text" name="city" value="" placeholder="City" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="text" name="state" value="" placeholder="State" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="text" name="postalCode" id="" value="" placeholder="Postal Code" class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <select id="" name="country" class="form-control" aria-required="true" required="required">
                            <option value=""> --- Select Country --- </option>
                            <?php foreach ($country as $value): ?>
                                <option value="<?php echo $value['name']?>"><?php echo $value['name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="number" name="phoneNo" value="" placeholder="Phone No." class="form-control" required="required">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 m-t-30">
                        <input type="Email" name="email" value="" placeholder="Email" class="form-control" required="required">
                    </div>
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