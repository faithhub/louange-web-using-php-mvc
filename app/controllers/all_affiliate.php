<?php

class All_affiliate extends Controller
{

  public function index()
  {
    $data['title'] = "Affiliates";
    $data['page'] = "all_affiliate";
    $data['affiliates'] = Affiliate::orderBy('id', 'ASC')->get();
    return $this->view('web/affiliates', $data);
  }
}
