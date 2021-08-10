<?php

class Contact extends Controller {
  public function index()
  {
    $data['title'] = "Contact Us";
    $data['page'] = "contact";
    return $this->view('web/contact', $data);
  }
}