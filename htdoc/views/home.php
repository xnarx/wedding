<?php 

$page = "home";
$pageTitle = "Nick & Ariel's Wedding - Home";
$metaKey = "";
$metaDes = "";
$pageAssets = <<<PS
  <script src="/js/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="/css/owl.css">
PS;

require ('_header.php');

echo <<<CONTENT
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
        <span>Welcome to our wedding website!</span>
      </div>
      <div class="sBody">
        <span>
          Click the logo below to see the room rates for the event.  Check back later for more information on the wedding.
        </span>
      </div>
      <div>
        <a href="https://resweb.passkey.com/go/MendlowitzRichterWed" target="_blank" class="marriott"><div></div></a>
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
        autoPlay : 5000,
        pagination: true
      });
    });
  </script>
CONTENT;

require ('_footer.php');
