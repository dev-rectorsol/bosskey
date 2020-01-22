<div class="right_col" role="main">
  <div class="row tile_count">
    <div class="page-title">
      <!-- <div class="title_left">
        <h3>Enquire List </h3>
      </div> -->

      <div class="title_right">
        <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right " >
            <a href="<?php echo base_url('onlineapply') ?>"><button type="button" class="btn btn-success btn-xl">Apply Form</button></a>
        </div>
      </div>
   </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>&nbsp;&nbsp; &nbsp;Apply List</h2>
            <!-- <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul> -->
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php //echo "<pre>"; ?>
            <?php //echo print_r($completed); ?>
            <table  class="table table-striped dataTable no-footer dtr-inline collapsed" id="datatable-responsive" style="width: 100%;" role="grid" >

            <table id="datatable-buttons" id="datatable-responsive"   class="table table-striped table-bordered dataTable no-footer dt-responsive nowrap"  aria-describedby="datatable-buttons_info" cellspacing="0" width="100%">
              <thead>
                <tr>

                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Street</th>
                  <th>Apartment</th>

                  <th>Zip Code</th>
                  <th>Program</th>
                  <th>Country</th>
                  <th>State</th>
                  <th>Date</th>
                </tr>
              </thead>
              <?php //echo "<pre>".print_r($invoice);exit; ?>
              <tbody>
                <?php foreach ($enquire as $value): ?>
                <tr>
                  <td><?php echo $value['fname'].' '.$value['lname']; ?></td>
                  <td><?php echo $value['phone']; ?></td>
                  <td><?php echo $value['email']; ?></td>
                  <td><?php echo $value['street']; ?></td>
                  <td><?php echo $value['apartment']; ?></td>
                  <td><?php echo $value['zipcode']; ?></td>
                  <td><?php echo $value['program']; ?></td>
                  <td><?php echo $value['country']; ?></td>
                  <td><?php echo $value['state']; ?></td>
                  <td><?php echo $value['date']; ?></td>
                  <!-- <td>
                    <?php if ($value['status'] != 'Done'): ?>
                                <a href="<?php echo base_url('admin/enquire/active2/'.$value['id']) ?>" data-toggle="tooltip" data-original-title="New"><button type="button" class="btn btn-success btn-circle btn-xs " style="background:#d9534f;">New</button></a>

                                <?php else: ?>
                                <div class="label label-table label-success" style="background:#26b99a"><button type="button" class="btn btn-success btn-circle btn-xs " style="background:#26b99a;">Done</button></div>
                             <?php endif ?>
                                    </td> -->


                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
