
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
                    <div class="form-group">
                      <label for="exampleSelectGender">Select Course</label>
                        <select class="form-control" id="exampleSelectGender" name="subcategory_id">
                          <option>Select course</option>
                          <?php foreach($subcategory as $value):?>
                          <option value="<?php echo $value['id']; ?>"><?php echo $value['subcategory']; ?></option>
                          <?php endforeach;?>
                        </select>
                    </div>


                    <div class="form-group">
                      <h1>Course overview </h1>
                      <textarea id="froala-editor" name="courseoverview">

                      </textarea>

                    </div>
                    <div class="form-group">
                      <h1>Short Details</h1>
                      <textarea id="froala-editor" name="shortdetails">

                      </textarea>

                    </div>
                    <div class="form-group">
                      <h1>Course curriculam</h1>
                      <textarea id="froala-editor" name="curriculam">

                      </textarea>

                    </div>
                    <div class="form-group">
                      <h1>Fees Details</h1>
                      <textarea id="froala-editor" name="feesdetails">

                      </textarea>

                    </div>

                    <div class="form-group">
                      <h1>Key Take Away</h1>
                      <textarea id="froala-editor" name="keytakeaway">

                      </textarea>
                    </div>

                    <div class="form-group">
                      <h1>Who Should Attend</h1>
                      <textarea id="froala-editor" name="whoshouldattend">

                      </textarea>
                    </div>
                    <div class="form-group">
                      <h1>Potential career Growth</h1>
                      <textarea id="froala-editor" name="Potentialcarrergroth">

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
