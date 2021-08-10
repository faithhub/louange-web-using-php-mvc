<?php

class All_affiliates extends Controller
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
    $data['affiliates'] = Affiliate::orderBy('id', 'ASC')->get();
    $data['title'] = "Affiliate";
    $data['page'] = "affiliate";
    $data['sn'] = 1;
    return $this->view('admin/affiliate', $data);
  }

  public function delete($id)
  {
    $aff = Affiliate::find($id);
    // unlink(URLROOT . '/affliates_uploads/' . $aff->avatar);
    $aff->delete();
    flash('success', "Affiliate Deleted");
    redirect('/all_affiliates');
  }
}
