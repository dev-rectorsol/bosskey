


          <div class="content-wrapper">

            <div class="row">

              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Email</h4>
                    <hr><br><br>
                    <!-- <p class="card-description"> Horizontal form layout </p> -->
                  <form class="forms-sample" action="<?php echo base_url('admin/setting/submit');?>" method="post">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Toll free</label>
                        <div class="col-sm-9">
                          <input type="number" name="tollfree"  class="form-control" placeholder="Toll Free Number">
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
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                           <div class="card">
                             <div class="card-body">
                               <h4 class="card-title">Basic Table</h4>
                               <p class="card-description"> Add class <code>.table</code>
                               </p>
                               <table class="table">
                                 <thead>
                                   <tr>
                                     <th>Profile</th>
                                     <th>VatNo.</th>
                                     <th>Created</th>
                                     <th>Status</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                     <td>Jacob</td>
                                     <td>53275531</td>
                                     <td>12 May 2017</td>
                                     <td><label class="badge badge-danger">Pending</label></td>
                                   </tr>
                                   <tr>
                                     <td>Messsy</td>
                                     <td>53275532</td>
                                     <td>15 May 2017</td>
                                     <td><label class="badge badge-warning">In progress</label></td>
                                   </tr>
                                   <tr>
                                     <td>John</td>
                                     <td>53275533</td>
                                     <td>14 May 2017</td>
                                     <td><label class="badge badge-info">Fixed</label></td>
                                   </tr>
                                   <tr>
                                     <td>Peter</td>
                                     <td>53275534</td>
                                     <td>16 May 2017</td>
                                     <td><label class="badge badge-success">Completed</label></td>
                                   </tr>
                                   <tr>
                                     <td>Dave</td>
                                     <td>53275535</td>
                                     <td>20 May 2017</td>
                                     <td><label class="badge badge-warning">In progress</label></td>
                                   </tr>
                                 </tbody>
                               </table>
                             </div>
                           </div>
                         </div>
            </div>

          </div>
