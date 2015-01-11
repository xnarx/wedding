<?php 

$page = "error";
$pageTitle = "Nick & Ariel's Wedding - 404";
$metaKey = "";
$metaDes = "";
$pageAssets = "";

require ('_header.php');

echo <<<CONTENT
  <div class="error">
    <h1>Page Not Found</h1>
  </div>
CONTENT;

require ('_footer.php');
