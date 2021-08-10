<?php

class About extends Controller
{

  public function index()
  {
    $data['title'] = "About Us";
    $data['page'] = "about";
    return $this->view('web/about', $data);
  }
}
