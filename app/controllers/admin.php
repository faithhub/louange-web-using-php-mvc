<?php

class Admin extends Controller
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
    $data['title'] = "Admin Login";
    $data['page'] = "about";
    return $this->view('admin/index', $data);
  }
}
