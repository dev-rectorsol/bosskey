<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Enquire List</h4>
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
            <table  class="table table-striped dataTable no-footer dtr-inline collapsed" id="datatable-responsive" style="width: 100%;" role="grid" >

            <table id="datatable-buttons" id="datatable-responsive"   class="table table-striped table-bordered dataTable no-footer dt-responsive nowrap"  aria-describedby="datatable-buttons_info" cellspacing="0" width="100%">
              <thead>
                <tr>

                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>state</th>
                  <th>City</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <?php //echo "<pre>".print_r($invoice);exit; ?>
              <tbody>
                <?php foreach ($enquire as $value): ?>
                <tr>
                  <td><?php echo $value['name']; ?></td>
                  <td><?php echo $value['phone']; ?></td>
                  <td><?php echo $value['email']; ?></td>
                  <td><?php echo $value['country']; ?></td>
                  <td><?php echo $value['state']; ?></td>
                  <td><?php echo $value['city']; ?></td>
                  <td><?php echo $value['date'] ?></td>
                  <td>
                             <!--<a href="<?php echo base_url('admin/invoice/active/'.$value['id']) ?>" data-toggle="tooltip" data-original-title="New"><button type="button" class="btn btn-success btn-circle btn-xs" style="background:#d9534f;">New</button></a>-->

                                <?php if ($value['status'] != 'Done'): ?>
                                <a href="<?php echo base_url('admin/enquire/active2/'.$value['id']) ?>" data-toggle="tooltip" data-original-title="New"><button type="button" class="btn btn-success btn-circle btn-xs " style="background:#d9534f;">New</button></a>

                                <?php else: ?>
                                <div class="label label-table label-success" style="background:#26b99a"><button type="button" class="btn btn-success btn-circle btn-xs " style="background:#26b99a;">Done</button></div>
                             <?php endif ?>
                                    </td>


                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
