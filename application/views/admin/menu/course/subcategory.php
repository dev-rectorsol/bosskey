<style>
.breadcrumb {
  border:none;
}
</style>
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
               <a href="<?php echo base_url('admin/menu/CouresList')?>" class="btn btn-primary addNewbtn">Course List</a>
           </div><br>
        </div>

     <hr class="light-grey-hr" />
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Course</h4>
                    <hr><br><br>

                    <?php $msg = $this->session->flashdata('msg'); ?>
                      <?php if (isset($msg)): ?>
                      <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i>
                        <?php echo $msg; ?> &nbsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                      </div>
                    <?php endif ?>

                    <!-- <p class="card-description"> Horizontal form layout </p> -->
                    <form class="forms-sample" action="<?php echo base_url('admin/menu/submit_subcategory');?>" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Select Category</label>
                        <div class="col-sm-9">
                         <select class="form-control" id="category" name="category_id">
                           <option>Select category</option>
                           <?php foreach($category as $value):?>
                            <option value="<?php echo $value['id'];?>"><?php echo $value['category'];?></option>
                         <?php endforeach;?>
                           </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Add Courses</label>
                        <div class="col-sm-9">
                           <input type="text" name="category_name"  class="form-control" placeholder="Courses Name">

                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Add Link</label>
                        <div class="col-sm-9">
                          <input type="text" name="link"  class="form-control" placeholder="Link">
                        </div>
                      </div> -->
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
