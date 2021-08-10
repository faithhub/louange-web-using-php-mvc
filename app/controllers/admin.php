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
    $data['title'] = "Admin Dashboard";
    $data['page'] = "dashboard";
    $data['affiliates'] = Affiliate::all();
    return $this->view('admin/index', $data);
  }
}
