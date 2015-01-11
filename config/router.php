<?php

$path = $_SERVER['REQUEST_URI'];

$routes = array(
  "/"        => "home",
  "/events"  => "events",
  "/explore" => "explore",
);

if (array_key_exists($path, $routes)) {
  $view = $routes[$path];
  require ('../htdoc/views/'.$view.'.php');
} else {
  require ('../htdoc/views/_error.php');
}
