<?php

use Illuminate\Support\Facades\Hash;

class Home extends Controller
{

  public function __construct()
  {
  }


  public function index($name = '', $age = '')
  {
    // User::create([
    //   'name' => 'Faith',
    //   'email' => 'admin@gmail.com',
    //   'password' => password_hash("Oluwadara+1", PASSWORD_BCRYPT)
    // ]);
    // echo $_SERVER['REQUEST_URI'];
    // $url_array =  explode('/', $_SERVER['REQUEST_URI']);
    $data['users'] = User::all();
    $data['name'] = "Faith";
    $data['title'] = "Home";
    $data['page'] = "home";
    return $this->view('web/index', $data);
  }
}
