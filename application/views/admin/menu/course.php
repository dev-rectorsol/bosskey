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
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $this->session->flashdata('msg'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif ?>
            <form class="forms-sample" action="<?php echo base_url('admin/menu/submit_course');?>" method="post" >
              <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Select Menu</label>
                <div class="col-sm-9">
                  <select class="form-control" id="menu" name="menu_id">
                    <option> --- Select Menu --- </option>
                      <?php foreach($menu_data as $menu):?>
                        <option value="<?php echo $menu['id'];?>"><?php echo $menu['name'];?></option>
                      <?php endforeach;?>
                  </select>
                </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Select Category</label>
              <div class="col-sm-9">
                <select class="form-control" id="category" name="category_id">
                  <option> --- Select Category --- </option>

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Select Sub Category</label>
              <div class="col-sm-9">
                <select class="form-control" id="subcategory" name="sub_category_id">
                  <option> --- Select Sub Category --- </option>

                </select>
              </div>
            </div>
      
            <div class="form-group">
              <h1>Course overview </h1>
               <textarea id="froala-editor" name="course_overview">
              </textarea>
            </div>
            <div class="form-group">
              <h1>Course Details </h1>
              <textarea id="froala-editor" name="course_details">
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