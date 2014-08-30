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

echo <<<HEADER
  <!DOCTYPE html>
    <html>
      <head>
        <title>$pageTitle</title>
        <meta name="keywords" content="$metaKey">
        <meta name="description" content="$metaDesc">
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
          <div class='content'>
HEADER;
