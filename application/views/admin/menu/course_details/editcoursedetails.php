
          <div class="content-wrapper">
            <div class="row heading-bg">
          <!-- Breadcrumb -->
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12" >

                <ol class="breadcrumb" style="border:none;">
                <li><a href="<?php echo base_url('admin/Dashboard')?>">Dashboard / </a></li>
                <li  class="active"><span> <?php echo $page?></span></li>
                <!-- <li class="active"><span>data-table</span></li> -->
                </ol>
              </div>
              <!-- /Breadcrumb -->
              <div class="span4 text-right">
                 <a href="<?php echo base_url('admin/menu/coursedetailsList')?>" class="btn btn-primary addNewbtn">Course Details List</a>
             </div><br>
          </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Course Details</h4>
                  <!-- <p class="card-description"> Basic form elements</p> -->

                    <form class="forms-sample" action="<?php echo base_url('admin/menu/editcoursedetailsdata/').$course->id;?>" method="post" >

                    <div class="form-group">
                      <h1>Course overview </h1>
                      <textarea id="froala-editor" name="courseoverview"><?php echo $course->courseoverview;?> </textarea>


                    </div>
                    <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <button type="submit" class="btn btn-primary mr-2">Edit Course</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>


                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
          <style>
.fr-command{
  display: block;
}
          </style>
