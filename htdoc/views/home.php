<?php 

$pageTitle = "Nick & Ariel's Wedding - Home";
$metaKey = "";
$metaDes = "";
$pageAssets = <<<PS
  <script src="/js/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="/css/owl.css">
PS;

require ('_header.php');

echo <<<HOME
  <div class="home">
    <div class="carousel-wrap">
      <div id="owl-home" class="owl-carousel">
        <div class="image1 img"></div>
        <div class="image2 img"></div>
        <div class="image3 img"></div>
      </div>
    </div>
    <div class="intro">
      <div class="sTitle">
        <span>Welcome to our wedding Website!</span>
      </div>
      <div class="sBody">
        <span>
          This site is currently under construction, but come back soon for more information.
        </span>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $("#owl-home").owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: false,
        pagination: true
      });
    });
  </script>
HOME;

require ('_footer.php');
