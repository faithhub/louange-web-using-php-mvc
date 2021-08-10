<!DOCTYPE html>
<html>

<?php require_once 'includes/header.php' ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php require_once 'includes/nav.php' ?>

    <?php require_once 'includes/sidemenu.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Welcome <?php echo $_SESSION['userName'] ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo URLROOT ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Affilates</span>
                  <span class="info-box-number">0</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- ./col -->
          </div>

          <div class="row">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-4">

                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="<?php echo 'upload/' . $_SESSION['userAvatar'] ?? 'dist/img/AdminLTELogo.png' ?>" alt="<?php echo $_SESSION['userName'] ?>">
                      </div>

                      <h3 class="profile-username text-center"><?php echo $_SESSION['userName']  ?></h3>
                      <!-- 
                      <p class="text-muted text-center">Software Engineer</p> -->

                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Name:</b> <a class="float-right"><b><?php echo $_SESSION['userName']  ?></b></a>
                        </li>
                        <li class="list-group-item">
                          <b>Email</b> <a class="float-right"><b><?php echo $_SESSION['userEmail']  ?></b></a>
                        </li>
                        <li class="list-group-item">
                          <b>Number of Affiliates</b> <a class="float-right"><b>6</b></a>
                        </li>
                      </ul>

                      <a href="<?php echo URLROOT ?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                  <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- Main row -->
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once 'includes/footer.php' ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php require_once 'includes/script.php' ?>

</body>

</html>