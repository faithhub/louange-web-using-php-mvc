<?php

class ChangePassword extends Controller
{


  public function __construct()
  {
    if (!isset($_SESSION)) {
      session_start();
    }
    if (!isset($_SESSION['userId'])) {
      redirect('/logout');
    }
  }


  public function index()
  {
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['updatePassword'])) {

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      if (empty($_POST['cur_password'])) {
        flash('cur_passwordError', "Current Password is required");
        redirect('/changepassword');
      }

      if (empty($_POST['new_password'])) {
        flash('new_passwordError', "New Password is required");
        redirect('/changepassword');
      }

      if (empty($_POST['con_password'])) {
        flash('con_passwordError', "Confirm New Password is required");
        redirect('/changepassword');
      }

      if (strcmp($_POST['con_password'], $_POST['new_password'])) {
        flash('con_passwordError', "Confirm Password and New Password did not match");
        redirect('/changepassword');
      }

      $old_password = trim($_POST['cur_password']);
      $password = trim($_POST['new_password']);

      if (mb_strlen($_POST["new_password"]) <= 8) {
        flash('new_passwordError', "Your Password Must Contain At Least 8 Characters!");
        redirect('/changepassword');
      } elseif (!preg_match("#[0-9]+#", $password)) {
        flash('new_passwordError', "Your Password Must Contain At Least 1 Number!");
        redirect('/changepassword');
      } elseif (!preg_match("#[A-Z]+#", $password)) {
        flash('new_passwordError', "Your Password Must Contain At Least 1 Capital Letter!");
        redirect('/changepassword');
      } elseif (!preg_match("#[a-z]+#", $password)) {
        flash('new_passwordError', "Your Password Must Contain At Least 1 Lowercase Letter!");
        redirect('/changepassword');
      } elseif (!preg_match("#[\W]+#", $password)) {
        flash('new_passwordError', "Your Password Must Contain At Least 1 Special Character!");
        redirect('/changepassword');
      }

      $user = User::find($_SESSION['userId']);
      $check = password_verify($old_password, $user->password);

      if ($check) {
        $user->password = password_hash($password, PASSWORD_BCRYPT);
        $user->save();
        flash('success', "Password Updated Successfully");
        redirect('/changepassword');
      } else {
        flash('cur_passwordError', "Current Password is incorrect");
        redirect('/changepassword');
      }

      // var_dump($_POST);
    } else {
      $data['title'] = "Change Password";
      $data['page'] = "password";
      return $this->view('admin/password', $data);
    }
  }
}
