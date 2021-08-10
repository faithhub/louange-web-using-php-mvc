<?php


class Controller
{

  public function model($model)
  {
    //Require Model File
    require_once '../app/models/' . $model . '.php';

    //Instantiate model
    return new $model();
  }


  //Load View
  public function view($view, $data = [])
  {
    if (file_exists('../app/views/' . $view . '.php')) {
      require_once '../app/views/' . $view . '.php';
    } else {
      die('Viw does not exist');
    }
  }
}
