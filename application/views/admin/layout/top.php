<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="index.php" style="color:#fff;">Bimt Institute</a>
    <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url() ?>assets/assets/images/logo-mini.svg" alt="logo" /></a> -->
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>

    <ul class="navbar-nav navbar-nav-right">

      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <img src="<?php echo base_url() ?>assets/assets/images/faces/face28.png" alt="image">
          </div>
          <div class="nav-profile-text">
            <p class="mb-1 text-black">Admin</p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
          <div class="p-3 text-center bg-primary">
            <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
          </div>
          <div class="p-2">
            <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>

            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
              <span>Profile</span>
              <span class="p-0">
                <span class="badge badge-success">1</span>
                <i class="mdi mdi-account-outline ml-1"></i>
              </span>
            </a>
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span>Settings</span>
              <i class="mdi mdi-settings"></i>
            </a>
            <div role="separator" class="dropdown-divider"></div>

            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="<?php echo base_url('admin/auth/logout')?>">
              <span>Log Out</span>
              <i class="mdi mdi-logout ml-1"></i>
            </a>
          </div>
        </div>
      </li>
      
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
