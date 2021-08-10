<?php

class Gallery extends Controller
{
  public function index()
  {
    $data['title'] = "Gallery";
    $data['page'] = "gallery";
    return $this->view('web/gallery', $data);
  }
}