<!DOCTYPE html>
<html>

<?php require_once 'includes/header.php' ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php require_once 'includes/nav.php' ?>

    <?php require_once 'includes/sidemenu.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Welcome <?php echo $_SESSION['userName'] ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo URLROOT ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Create Affiliate</li>
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
                  <h3 class="card-title">Create New Affiliate</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo URLROOT ?>/affiliate_create" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="text-center">
                      <span class="error_msg"><?php flash('error') ?></span>
                      <span class="success_msg"><?php flash('success') ?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Affiliate Name</label>
                      <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="Affilaite name">
                      <span class="error_msg"><?php flash('nameError') ?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Affiliate Link</label>
                      <input type="url" class="form-control" name="link" id="exampleInputlink1" placeholder="Enter affiliate link">
                      <span class="error_msg"><?php flash('linkError') ?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Affiliate Picture</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="avatar" class="custom-file-input" id="exampleInputFile" accept="image/*">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                      <span class="error_msg"><?php flash('avatarError') ?></span>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="createAffiliate" class="btn btn-primary">Create</button>
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