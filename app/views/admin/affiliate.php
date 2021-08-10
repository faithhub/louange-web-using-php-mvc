<!DOCTYPE html>
<html>

<?php require_once 'includes/header.php' ?>

<link rel="stylesheet" href="dist/css/adminlte.min.css">

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
                <li class="breadcrumb-item active">Affiliates</li>
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
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Affiliates</h3>
                </div>
                <div class="text-right mt-3 mr-3">
                  <a class="btn btn-success" href="<?php echo URLROOT ?>/affiliate_create">Add New</a>
                </div>
                <div class="text-center">
                  <span class="success_msg"><?php flash('success') ?></span>
                  <span class="error_msg"><?php flash('error') ?></span>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Picture</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($data['affiliates']) && !empty($data['affiliates'])) {
                        foreach ($data['affiliates'] as $affiliate) {
                      ?>
                          <tr>
                            <td><?php echo $data['sn']++ ?></td>
                            <td><?php echo $affiliate->name ?></td>
                            <td><?php echo $affiliate->link ?></td>
                            <td><a href="<?php echo 'affiliates_uploads/' . $affiliate->avatar ?? '' ?>" target="blank"><img src="<?php echo 'affiliates_uploads/' . $affiliate->avatar ?? '' ?>" alt="<?php echo $affiliate->name ?>" style="max-width: 60px;"></a></td>
                            <td>
                              <a data-bs-toggle="modal" data-toggle="modal" data-target="#modal-default<?php echo $affiliate->id ?>" class="btn btn-sm btn-success">Edit</a>
                              <a href="<?php echo URLROOT ?>/all_affiliates/delete/<?php echo $affiliate->id ?>" onclick="return confirm('Are you sure you want to delete this affiliate?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                          </tr>

                          <div class="modal fade" id="modal-default<?php echo $affiliate->id ?>">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit <?php echo $affiliate->name ?></h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form role="form" method="POST" action="<?php echo URLROOT ?>/affiliate_create/update" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $affiliate->id ?>">
                                    <div class="card-body">
                                      <div class="text-center">
                                        <span class="error_msg"><?php flash('error') ?></span>
                                        <span class="success_msg"><?php flash('success') ?></span>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Affiliate Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="<?php echo $affiliate->name ?>" placeholder="Affilaite name">
                                        <span class="error_msg"><?php flash('nameError') ?></span>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Affiliate Link</label>
                                        <input type="url" class="form-control" name="link" id="exampleInputlink1" value="<?php echo $affiliate->link ?>" placeholder="Enter affiliate link">
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
                                      <button type="submit" name="updateAffiliate" class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                                </div>
                                <!-- <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Picture</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
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