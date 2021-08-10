<?php

class Logout extends Controller
{
  public function __construct()
  {
    if (!isset($_SESSION)) {
      session_start();
    }
  }


  public function index()
  {
    unset($_SESSION['userId']);
    unset($_SESSION['userEmail']);
    redirect('/home');
  }
}
