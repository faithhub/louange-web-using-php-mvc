<?php 

class Shop extends Controller
{
  public function index()
  {
    $data['title'] = "Shop";
    $data['page'] = "shop";
    return $this->view('web/shop', $data);
  }
}