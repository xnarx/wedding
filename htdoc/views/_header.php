<?php

if (!isset($pageTitle)) {
  $pageTitle = "Nick and Ariel's Wedding";
}

if (!isset($metaKey)) {
  $metaKey = "";
}

if (!isset($metaDesc)) {
  $metaDesc = "";
}

// Get days til wedding
date_default_timezone_set('America/New_York');
$date = strtotime("4 July 2015");
$daysLeft = floor(($date - time())/60/60/24);

if ($daysLeft > 0) {
  $countdown = $daysLeft . "&nbsp;days to go!";
} else if ($daysLeft < 0) {
  $countdown = - $daysLeft . "&nbsp;days married!";
} else {
  $countdown = "Today is the wedding!";
}

// Left Nav
$leftNavArray = array(
  "home"                  => "/",
  "about us"              => "/about_us",
  "ceremony and reception"  => "/ceremony_and_reception",
  "wedding party"         => "/wedding_party",
  "accomodations"         => "/accomodations",
  "schedule of events"    => "/schedule_of_events",
  "photo album"           => "/photo_album"
);

$leftNav = '';

foreach ($leftNavArray as $title => $href) {
  if (str_replace(' ','_',$title) !== $page) {
    $leftNav .= '<li><a href="' . $href . '">' . $title . '</a></li>';
  } else {
    $leftNav .= '<li class="current"><a href="javascript: void(0);">' . $title . '</a></li>';
  }
}

echo <<<HEADER
  <!DOCTYPE html>
    <html>
      <head>
        <title>$pageTitle</title>
        <meta name="keywords" content="$metaKey">
        <meta name="description" content="$metaDesc">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="/favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        $pageAssets
      </head>
      <body>
        <div class="pageWrapper">
          <div class="leftTopBorder border"></div>
          <div class="rightBotBorder border"></div>
          <div class="header">
            <div class="head-title"></div>
            <div class="head-names">Nicholas & Ariel</div>
            <div class="head-date">
              <span>4th of July 2015</span>
              <div class='spacer'>&nbsp;</div>
              <span>$countdown</span>
            </div>
          </div>
          <div class="leftNav">
            <ul>
              $leftNav
            </ul>
          </div>
          <div class="content">
HEADER;
