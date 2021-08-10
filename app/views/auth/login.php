<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Louange Herbals | Admin Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini" style="background-color: rgba(0,0,0,.07);">
  <div class="wrapper">
    <!-- Navbar -->
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <style type="text/css">
      span {
        color: #dc3545;
        font-weight: bold;
        font-size: 12px;
      }

      .error_msg {
        color: #dc3545;
        font-weight: bold;
        font-size: 12px;
      }
    </style>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->

          <div class="col-md-6 offset-md-3" style="padding-top: 4em">
            <div class="login-box">
              <div class="login-logo">
                <a href="<?php echo URLROOT ?>"><b>Admin</b>LOGIN</a>
              </div>
              <!-- jquery validation -->
              <div class='error_msg' style='text-align:center; font-size:18px'><?php flash('loginError') ?></div>
              <div class="card card-primary">
                <div class="card-header" style="background-color: #343a40;">
                  <h3 class="card-title">Sign In<small></small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo URLROOT ?>/login">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" value="" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                      <span class="error_msg"><?php flash('emailError') ?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      <span class="error_msg"><?php flash('passwordError') ?></span>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <div class="message_box"></div>
                    <button type="submit" name="loginUser" class="btn btn btn-block btn-dark">Submit</button><br>
                    <label><a href="forget_password.php">I forgot my password</a></label>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
    <!--  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer> -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jquery-validation -->
  <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- <script src="jquery.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function() {
      $.validator.setDefaults({
        submitHandler: function() {
          $.ajax({
            url: "reg.php",
            method: "post",
            data: $('quickForm').serialize(),
            dataType: "text",
            success: function(strMessage) {
              $('#output').text(strMessage)
            }
          });

        }
      });
      $('#quickForm').validate({
        rules: {
          username: {
            required: true,
            minlength: 3
          },
          password: {
            required: true,
            minlength: 8
          },
          terms: {
            required: true
          },
        },
        messages: {
          username: {
            required: "Please enter your username",
            minlength: "Your username must be at least 3 characters long"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 8 characters long"
          },
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>

</html>