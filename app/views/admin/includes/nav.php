<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- SEARCH FORM -->

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <div class="image">
          <img src="<?php echo 'upload/' . $_SESSION['userAvatar'] ?? 'dist/img/AdminLTELogo.png' ?>" class="img-circle elevation-2 image-fluid" alt="<?php echo $_SESSION['userName'] ?>" style="width:35px">
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <div class="dropdown-divider"></div>
          <a href="<?php echo URLROOT ?>/profile" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo URLROOT ?>/all_affiliates" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Affiliate
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo URLROOT ?>/logout" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i> Logout
          </a>
          <div class="dropdown-divider"></div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->