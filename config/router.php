<?php

$path = $_SERVER['REQUEST_URI'];

$routes = array(
  "/" => "home"
);

if (array_key_exists($path, $routes)) {
  $view = $routes[$path];
  require ('../htdoc/views/'.$view.'.php');
} else {
  require ('../htdoc/views/_error.php');
}