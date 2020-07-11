
<div class="container-fluid">
			<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12" >

			<ol class="breadcrumb" style="border:none;">
			<li><a href="<?php echo base_url('admin/Dashboard')?>">Dashboard / </a></li>
			<li  class="active"><span> <?php echo $page?></span></li>
			<!-- <li class="active"><span>data-table</span></li> -->
			</ol>
		</div>
				<!-- /Breadcrumb -->
				<div class="span4 text-right">
					 <a href="<?php echo base_url('admin/menu/course')?>" class="btn btn-primary addNewbtn">Add Course</a>
			 </div><br>
		</div>


 <hr class="light-grey-hr" />
			<!-- Row -->
			<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
										<h6 class="card-title">Category List</h6>
										<hr><br>
												<div class="table-responsive">
													<table class="table table-striped table-bordered" id="myTable">

								 <tr>
									 <th>S.No</th>
									 <th>Course</th>
									 <th>Action</th>
								 </tr>
								 <?php $i=1; foreach($course as $row){?>
								 <tr>
									 <td> <?php echo $i ?></td>
									 <td><?php echo $row['subcategory'] ?></td>

									 <td>
										 <a data-target="<?php echo '#mod'.$row['id']; ?>" class="pd-setting-ed btn btn-primary text-center tip"
											 data-toggle="modal" data-original-title="Edit"><i
												 class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

										 <a title="Trash" class="pd-setting-ed btn btn-danger"
											 onclick="delete_detail(<?php echo $row['id'] ;?>)"><i class="fa fa-trash-o"
												 aria-hidden="true"></i></a></td>
								 </tr>

								 <div id="mod<?php echo $row['id'] ; ?>"
									 class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
									 <div class="modal-dialog" role="document">
										 <div class="modal-content">
											 <form class="form-horizontal" method="post"
												 action="<?php echo base_url('admin/menu/editcourse/').$row['id'] ?>"
												 name="basic_validate" id="basic_validate" novalidate="novalidate">
												 <div class="modal-header header-color-modal bg-color-1 ">
													 <h4 class="modal-title">Edit Course</h4>
													 <div class="modal-close-area modal-close-df">
														 <a class="close" data-dismiss="modal" href="#"><i
																 class="fa fa-close"></i></a>
													 </div>
												 </div>
												 <div class="modal-body">
													 <div class="widget-content nopadding">
														 <div class="form-group row">
															 <label class="control-label col-sm-2">Course</label>
																 <div class="col-sm-10">
																	 <input type="text" class="form-control" name="category_name" value="<?php echo $row['subcategory'] ?>" id="required">
																 </div>
														 </div>
														</div>
												 </div>

												 <div class="modal-footer">
													 <input type="hidden"  value="<?php echo $this->security->get_csrf_hash();?>">
													 <input type="submit" value="Update" class="btn btn-primary">
													 <a data-dismiss="modal" class="btn" href="#">Cancel</a>
												 </div>
												 </form>
												 </div>

										 </div>
									 </div>

								 <?php $i++ ;  }?>


							 </table>
             </div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Row -->


		</div>

<script>
function delete_detail(id) {
	var del = confirm("Do you want to Delete");
	if (del == true) {
		var sureDel = confirm("Are you sure want to delete");
		if (sureDel == true) {
			window.location = "<?php echo base_url()?>admin/menu/Deletecourse/" + id;
		}

	}
}
</script>

	<!-- /Main Content -->
