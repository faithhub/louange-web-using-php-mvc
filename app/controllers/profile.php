<?php

class Profile extends Controller
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

    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['updateProfile'])) {

      if (empty($_POST['email'])) {
        flash('emailError', "Email is required");
        redirect('/profile');
      }

      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        flash('emailError', "Enter a valid Emaill Address");
        redirect('/profile');
      }

      if (empty($_POST['name'])) {
        flash('nameError', "Name is required");
        redirect('/profile');
      }


      $maxsize = 5 * 1024 * 1024;


      $filesize = $_FILES["avatar"]["size"];
      $filename = $_FILES["avatar"]["name"];

      if ($filesize > $maxsize) {
        flash('avatarError', "File can not be more than 5mb");
        redirect('/profile');
      }



      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $email = trim($_POST['email']);
      $name = trim($_POST['name']);

      try {
        $user = User::find($_SESSION['userId']);
        $user->name = $name;
        $user->email = $email;
        $user->avatar = $filename;
        $user->save();
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "upload/" . $filename);
        flash('success', "Profile Updated Successfully");
        redirect('/profile');
      } catch (\Throwable $th) {
        flash('error', $th->getMessage());
        redirect('/profile');
      }
    } else {
      $data['title'] = "Profile";
      $data['page'] = "profile";
      return $this->view('admin/profile', $data);
    }
  }
}
