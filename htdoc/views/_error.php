<?php 

$page = "error";
$pageTitle = "Nick & Ariel's Wedding - 404";
$metaKey = "";
$metaDes = "";
$pageAssets = "";

require ('_header.php');

echo <<<CONTENT
  <div class="error">
    <h1>404</h1>
    <h2>Page Not Found.</h2>
  </div>
CONTENT;

require ('_footer.php');
