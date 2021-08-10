<?php

class Products extends Controller
{
  public function index()
  {
    $data['title'] = "Products";
    $data['page'] = "product";
    return $this->view('web/product', $data);
  }
}