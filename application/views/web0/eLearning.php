<div class="inner-banner contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-9">
                <div class="content">
                    <h1>BIMT Apps</h1>
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

<section>
    <div class="container">
        <div class="row m-y-30">
            <div class="col-sm-6">
                <div class="singe_image_wrapper">
                    <img width="387" height="302" src="https://www.iibmindia.in/wp-content/uploads/2019/04/android-11.jpg" class="attachment-full" alt="" srcset="https://www.iibmindia.in/wp-content/uploads/2019/04/android-11.jpg 387w, https://www.iibmindia.in/wp-content/uploads/2019/04/android-11-300x234.jpg 300w" sizes="(max-width: 387px) 100vw, 387px">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="singe_image_wrapper">
                    <img width="387" height="302" src="https://www.iibmindia.in/wp-content/uploads/2019/04/moodleapp11.jpg" class="attachment-full" alt="" srcset="https://www.iibmindia.in/wp-content/uploads/2019/04/moodleapp11.jpg 387w, https://www.iibmindia.in/wp-content/uploads/2019/04/moodleapp11-300x234.jpg 300w" sizes="(max-width: 387px) 100vw, 387px">
                </div>
            </div>
        </div>
    </div>
</section>