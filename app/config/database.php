<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
  'driver' => 'mysql',
  'host' => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'louange',
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => ''
]);

//Define APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

//Define URLROOT (Dynamic links)
define('URLROOT', 'http://localhost/louange');

//Define SITENAME
define('SITENAME', 'Louange');

$capsule->bootEloquent();
