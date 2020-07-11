<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard')?>">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

    <!-- <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/enquire')?>">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Enquire List</span>
      </a>
    </li> -->
      <li class="nav-item">
        <a class="nav-link " data-toggle="collapse" href="#ui-enquiry" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
          <span class="menu-title">Enquire </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-enquiry">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/enquire')?>">Enquire List</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/enquire/contact')?>">Contact List</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-menu" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
          <span class="menu-title">Menu</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-menu">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/menu/category')?>">Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/menu/course/')?>">Courses</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/menu/course_details/')?>"> Courses Details</a></li>

          </ul>
        </div>
      </li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/onlineform')?>">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Online form</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">Setting</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/setting')?>">Logo</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/setting/email')?>">setting</a></li>
          <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/setting/toll')?>">Toll Free Number</a></li> -->
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/Auth/logout')?>">
        <span class="icon-bg"><i class="mdi mdi-logout menu-icon"></i></span>
        <span class="menu-title">Logout</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="pages/icons/mdi.html">
        <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/forms/basic_elements.html">
        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
        <span class="menu-title">Forms</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/charts/chartjs.html">
        <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/basic-table.html">
        <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div>
    </li> -->
  </ul>
</nav>
