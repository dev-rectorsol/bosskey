
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Category</h4>
                    <hr><br><br>

                    <?php $msg = $this->session->flashdata('msg'); ?>
                      <?php if (isset($msg)): ?>
                      <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i>
                        <?php echo $msg; ?> &nbsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                      </div>
                    <?php endif ?>

                    <!-- <p class="card-description"> Horizontal form layout </p> -->
                    <form class="forms-sample" action="<?php echo base_url('admin/menu/submit_category');?>" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Add Category</label>
                        <div class="col-sm-9">
                          <input type="text" name="category_name"  class="form-control" placeholder="Category Name">
                        </div>
                      </div>
                      
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
