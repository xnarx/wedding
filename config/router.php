<?php

$path = $_SERVER['REQUEST_URI'];

$routes = array(
  "/"                       => "home",
  "/about_us"               => "about_us",
  "/ceremony_and_reception" => "ceremony_and_reception",
  "/wedding_party"          => "wedding_party",
  "/accomodations"          => "accomodations",
  "/schedule_of_events"     => "schedule_of_event",
  "/photo_album"            => "photo_album"
);

if (array_key_exists($path, $routes)) {
  $view = $routes[$path];
  require ('../htdoc/views/'.$view.'.php');
} else {
  require ('../htdoc/views/_error.php');
}
