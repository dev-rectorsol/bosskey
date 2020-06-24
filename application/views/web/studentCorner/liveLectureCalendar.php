<!-- Start Banner -->
<div class="inner-banner contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-9">
                <div class="content">
                    <h1>Alumni Speak</h1>
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
<section class="details-tab">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                        <li role="presentation" class="active"> <a href="#October" id="October-tab" role="tab" data-toggle="tab" aria-controls="curriculam" aria-expanded="true">
                        October </a> </li>
                        <li role="presentation" class=""> <a href="#November" role="tab" id="November-tab" data-toggle="tab" aria-controls="schedule" aria-expanded="false">
                        November</a> </li>
                        <li role="presentation" class=""> <a href="#December" role="tab" id="December-tab" data-toggle="tab" aria-controls="semester" aria-expanded="false">
                        December</a> </li>
                        <li role="presentation" class=""> <a href="#January" role="tab" id="January-tab" data-toggle="tab" aria-controls="teachers" aria-expanded="false">
                        January</a> </li>
                        <li role="presentation" class=""> <a href="#February" role="tab" id="February-tab" data-toggle="tab" aria-controls="career" aria-expanded="false">
                        February</li>
                        <li role="presentation" class=""> <a href="#March" role="tab" id="March-tab" data-toggle="tab" aria-controls="career1" aria-expanded="false">
                        March</li>
                        <li role="presentation" class=""> <a href="#April" role="tab" id="April-tab" data-toggle="tab" aria-controls="career2" aria-expanded="false">
                        April</li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade semester active in" role="tabpanel" id="October" aria-labelledby="October-tab">
                            <div class="row">
                                <p>Data Not Found</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="November" aria-labelledby="November-tab">
                            <div class="row">
                                <p>Data Not Found</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="December" aria-labelledby="December-tab">
                            <div class="row">
                                <div class="row">
                                    <p>Data Not Found</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane semester fade" role="tabpanel" id="January" aria-labelledby="January-tab">
                            <div class="row">
                                <div class="row">
                                    <p>Data Not Found</p>
                                </div>  
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="career" aria-labelledby="career-tab">
                            <div class="row">
                                <p>Data Not Found</p>
                            </div>
                        </div>
                        <div class="tab-pane semester fade" role="tabpanel" id="March" aria-labelledby="March-tab">
                            <div class="row">
                                <p>Data Not Found</p>
                            </div>
                        </div>
                        <div class="tab-pane semester fade" role="tabpanel" id="April" aria-labelledby="April-tab">
                            <div class="row">
                                <p>Data Not Found</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>