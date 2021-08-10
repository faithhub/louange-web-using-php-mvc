<?php

if (!isset($_SESSION)) {
  session_start();
}
function redirect($location)
{
  header('Location: ' . URLROOT . $location);
  exit();
}


function flash($name = '', $message = '', $class = '')
{
  if (!empty($name)) {
    if (!empty($message) && empty($_SESSION[$name])) {
      $_SESSION[$name] = $message;
      $_SESSION[$name . '_class'] = $class;
    } else if (empty($message) && !empty($_SESSION[$name])) {
      $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : $class;
      echo $_SESSION[$name];
      unset($_SESSION[$name]);
      unset($_SESSION[$name . '_class']);
    }
  }
}
