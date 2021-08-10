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
                <li class="breadcrumb-item active">Change Password</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Password</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo URLROOT ?>/changepassword">
                  <div class="card-body">
                    <div class="text-center">
                      <span class="error_msg"><?php flash('error') ?></span>
                      <span class="success_msg"><?php flash('success') ?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Current Password</label>
                      <input type="password" class="form-control" name="cur_password" id="exampleInputPassword1" placeholder="">
                      <span class="error_msg"><?php flash('cur_passwordError') ?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">New Password</label>
                      <input type="password" class="form-control" name="new_password" id="exampleInputEmail1" placeholder="">
                      <span class="error_msg"><?php flash('new_passwordError') ?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Confirm New Password</label>
                      <input type="password" class="form-control" name="con_password" id="exampleInputEmail1" placeholder="">
                      <span class="error_msg"><?php flash('con_passwordError') ?></span>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="updatePassword" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
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