
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
					 <a href="<?php echo base_url('admin/menu/course_details')?>" class="btn btn-primary addNewbtn">Add Course Details</a>
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
													<table class="table table-striped table-bordered data-table" id="myTable">

								 <tr>
									 <th>S.No</th>
									 <th>Category</th>
									 <th>Course</th>
									 <th>Action</th>
								 </tr>
								 <?php $i=1; foreach($course as $row){?>
								 <tr>
									 <td> <?php echo $i ?></td>
									 <td><?php echo $row['category'] ?></td>
									 <td><?php echo $row['subcategory'] ?></td>

									 <td>
										 <a href="<?php echo base_url('admin/menu/editcoursedetailsList/').$row['id']?>" class="pd-setting-ed btn btn-primary text-center tip"
											  data-original-title="Edit"><i
												 class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

										 <a title="Trash" class="pd-setting-ed btn btn-danger"
											 onclick="delete_detail(<?php echo $row['id'] ;?>)"><i class="fa fa-trash-o"
												 aria-hidden="true"></i></a></td>
								 </tr>

    <?php $i++;} ?>

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
			window.location = "<?php echo base_url()?>admin/menu/Deletecoursedeails/" + id;
		}

	}
}
</script>

	<!-- /Main Content -->
