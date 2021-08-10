<?php

class Login extends Controller
{
  public function __construct()
  {
    if (!isset($_SESSION)) {
      session_start();
    }
    if (isset($_SESSION['userId'])) {
      redirect('/admin');
    }
  }

  public function index()
  {
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['loginUser'])) {

      if (empty($_POST['email'])) {
        flash('emailError', "Email is required");
        redirect('/login');
      }
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        flash('emailError', "Enter a valid Emaill Address");
        redirect('/login');
      }

      if (empty($_POST['password'])) {
        flash('passwordError', "Password is required");
        redirect('/login');
      }


      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $email = trim($_POST['email']);
      $password = ($_POST['password']);


      $user = User::where(['email' => $email])->first();
      if (!$user) {
        flash('loginError', "Invalid Credentials");
        redirect('/login');
      }

      $check_password = password_verify($password, $user->password);


      if ($check_password) {
        $this->createUserSession($user);
        redirect('/admin');
      } else {
        flash('loginError', "Invalid Credentials pass");
        redirect('/login');
      }
    } else {
      $data['title'] = "Login";
      $data['page'] = "about";
      return $this->view('auth/login', $data);
    }
  }

  public function createUserSession($user)
  {
    $_SESSION['userId'] = $user->id;
    $_SESSION['userEmail'] = $user->email;
    $_SESSION['userName'] = $user->name;
    redirect('/admin');
  }
}
