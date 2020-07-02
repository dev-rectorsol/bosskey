
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Course Details</h4>
                  <!-- <p class="card-description"> Basic form elements</p> -->
                  <?php $msg = $this->session->flashdata('msg'); ?>
                    <?php if (isset($msg)): ?>
                    <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i>
                      <?php echo $msg; ?> &nbsp;
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                    </div>
                  <?php endif ?>
                    <form class="forms-sample" action="<?php echo base_url('admin/menu/submit_course');?>" method="post" >
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Select Category</label>
                        <div class="col-sm-10">
                         <select class="form-control" id="category" name="category_id">
                           <option>Select category</option>
                           <?php foreach($category as $value):?>
                            <option value="<?php echo $value['id'];?>"><?php echo $value['category'];?></option>
                         <?php endforeach;?>
                           </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Add Sub Category</label>
                        <div class="col-sm-10">
                          <!-- <input type="text" name="category_name"  class="form-control" placeholder="Category Name"> -->
                          <select class="form-control" id="subcategory" name="subcategory_id">
                            <option> --- Select Category --- </option>

                          </select>
                        </div>
                      </div>


                    <div class="form-group">
                      <h1>Course overview </h1>
                      <textarea id="froala-editor" name="courseoverview">

                      </textarea>


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
          </div>
