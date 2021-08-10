<?php

class Affiliate_create extends Controller
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
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['createAffiliate'])) {

      if (empty($_POST['name'])) {
        flash('nameError', "Affiliate Name is required");
        redirect('/affiliate_create');
      }

      if (empty($_POST['link'])) {
        flash('linkError', "Affiliate Link is required");
        redirect('/affiliate_create');
      }

      if (empty($_FILES["avatar"]["name"])) {
        flash('avatarError', "Affiliate Picture is required");
        redirect('/affiliate_create');
      }

      $maxsize = 10 * 1024 * 1024;

      $filesize = $_FILES["avatar"]["size"];
      $filename = $_FILES["avatar"]["name"];

      if ($filesize > $maxsize) {
        flash('avatarError', "Affiliate Picture can not be more than 10mb");
        redirect('/affiliate_create');
      }

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $name = trim($_POST['name']);
      $link = trim($_POST['link']);
      $check = Affiliate::where('name', $name)->count();
      if ($check > 0) {
        flash('error', "Affiliate Name has already exist");
        redirect('/affiliate_create');
      }
      try {
        Affiliate::create([
          'name' => $name,
          'link' => $link,
          'avatar' => $filename,
        ]);
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "affiliates_uploads/" . $filename);
        flash('success', "Affilaite Created Successfully");
        redirect('/all_affiliates');
      } catch (\Throwable $th) {
        flash('error', $th->getMessage());
        redirect('/affiliate_create');
      }
    } else {
      $data['title'] = "Affiliate";
      $data['page'] = "affiliate";
      return $this->view('admin/create-affiliate', $data);
    }
  }

  public function update()
  {
    var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['updateAffiliate'])) {

      if (empty($_POST['name'])) {
        flash('nameError', "Affiliate Name is required");
        redirect('/affiliate_create');
      }

      if (empty($_POST['link'])) {
        flash('linkError', "Affiliate Link is required");
        redirect('/affiliate_create');
      }


      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $name = trim($_POST['name']);
      $link = trim($_POST['link']);
      $id = trim($_POST['id']);

      $aff = Affiliate::find($id);

      if (!empty($_FILES["avatar"]["name"])) {

        $maxsize = 10 * 1024 * 1024;

        $filesize = $_FILES["avatar"]["size"];
        $filename = $_FILES["avatar"]["name"];

        if ($filesize > $maxsize) {
          flash('avatarError', "Affiliate Picture can not be more than 10mb");
          redirect('/affiliate_create');
        }
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "affiliates_uploads/" . $filename);
      } else {
        $filename = $aff->avatar;
      }

      $check = Affiliate::where('name', $name)->count();
      $check2 = Affiliate::where('name', $name)->first();

      if ($check > 0) {
        if ($aff->id == $check2->id) {
          $aff->name = $name;
          $aff->link = $link;
          $aff->avatar = $filename;
          $aff->save();
          flash('success', "Affilaite Updated Successfully");
          redirect('/all_affiliates');
        } else {
          flash('error', "Affiliate Name has already exist");
          redirect('/all_affiliates');
        }
      }

      try {
        $aff->name = $name;
        $aff->link = $link;
        $aff->avatar = $filename;
        $aff->save();
        flash('success', "Affilaite Updated Successfully");
        redirect('/all_affiliates');
      } catch (\Throwable $th) {
        flash('error', $th->getMessage());
        redirect('/affiliate_create');
      }
    } else {
      redirect('/all_affiliates');
    }
  }
}
