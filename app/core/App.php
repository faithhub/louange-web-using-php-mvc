<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class App
{
  protected $controller = 'home';

  protected $method = 'index';

  protected $params = [];

  public function __construct()
  {
    $url = $this->getUrl();
    // print_r($url);

    //Look for the first value in Controller, ucwords will capitalize the first letter
    if (isset($url[0])) {
      if (file_exists('../app/controllers/' . $url[0] . '.php')) {
        //will set a new controller
        // echo "good one";
        $this->controller = $url[0];
        // echo $this->controller;
        unset($url[0]);
      }
    }

    require_once '../app/controllers/' . $this->controller . '.php';

    $this->controller = new $this->controller;

    // var_dump($this->controller);

    //Check for the second of the URL
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    //Get Parameters
    $this->params = $url ? array_values($url) : [];

    //Call a callback with array of params
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function getUrl()
  {
    if (isset($_GET['url'])) {
      $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
      return $url;
    }
  }
}
