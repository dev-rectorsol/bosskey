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
             <a href="<?php echo base_url('admin/menu/category')?>" class="btn btn-primary addNewbtn">Add Cotegory</a>
         </div><br>
      </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
    								<h6 class="card-title">Category List</h6>
                    <hr><br><br>
                    <?php $msg = $this->session->flashdata('msg'); ?>
                    <?php if (isset($msg)): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?php echo $this->session->flashdata('msg'); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php endif ?>
      									<div class="table-responsive">
      										<table class="table table-striped table-bordered data-table">
      								 <caption>
      									 <!-- <h4> User  List</h4> -->
      								 </caption>
                       <tr>
                         <th>S.No</th>
                         <th>Category</th>
                         <th>Status</th>
                         <th>Setting</th>
                       </tr>
                       <?php $i=1; foreach($category as $row){?>
                         <tr>
                           <td> <?php echo $i ?></td>
                           <td><?php echo $row['category'] ?></td>
                           <td><?php if ($row['status'] != 'active'): ?>
                           <a href="<?php echo base_url('admin/menu/active/'.$row['id']) ?>" data-toggle="tooltip" data-original-title="New"><button type="button" class="btn btn-success btn-circle btn-xs " style="background:#d9534f;"><?php echo $row['status'] ;?></button></a>

                           <?php else: ?>
                           <a href="<?php echo base_url('admin/menu/active2/'.$row['id']) ?>" class="label label-table label-success" style="background:#26b99a"><button type="button" class="btn btn-success btn-circle btn-xs " style="background:#26b99a;"><?php echo $row['status'] ;?></button></div>
                        <?php endif ?></td>
                        <td>
                            <a href="<?php echo '#m'.$row['id']; ?>" class="text-center tip  btn btn-primary" data-toggle="modal"
                                data-original-title="Edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                            <a title="Trash" class="pd-setting-ed btn btn-danger" onclick="delete_detail(<?php echo $row['id'] ;?>)">
                               <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                         </tr>


                         <div id="m<?php echo $row['id']; ?>"  class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                         <div class="modal-dialog" role="document ">
                           <div class="modal-content">
                             <form class="form-horizontal" method="post"
                               action="<?php echo base_url('admin/menu/editcategory/').$row['id'];?>"
                               name="basic_validate" id="basic_validate" novalidate="novalidate">
                               <div class="modal-header">
                                 <h5 class="modal-title">Edit Category</h5>
                                 <button data-dismiss="modal" class="close" type="button">×</button>
                               </div>
                               <div class="modal-body">
                                 <div class="widget-content nopadding">
                                   <div class="form-group row">
                                     <label class="control-label col-sm-3">Category Name</label>
                                     <div class="col-sm-9">
                                       <input type="text" name="category" class="form-control"
                                         value="<?php echo $row['category'];?>" id="required">
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="modal-footer">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>"
                                   value="<?php echo $this->security->get_csrf_hash();?>">
                                 <input type="submit" value="Update" class="btn btn-primary">
                                 <a data-dismiss="modal" class="btn" href="#">Cancel</a>
                               </div>
                             </form>
                           </div>
                         </div>
                       </div>
      								 <?php 	 $i++ ; } ?>

      							 </table>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>

              <script>
    function delete_detail(id) {
      var del = confirm("Do you want to Delete");
      if (del == true) {
        var sureDel = confirm("Are you sure want to delete");
        if (sureDel == true) {
          window.location = "<?php echo base_url()?>admin/menu/DeleteCategory/" + id;
        }

      }
    }


  </script>
