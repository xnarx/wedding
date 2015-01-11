<?php 

$page = "explore";
$pageTitle = "Nick & Ariel's Wedding - Explore";
$metaKey = "";
$metaDes = "";
$pageAssets = "";

require ('_header.php');

echo <<<CONTENT
  <div class="explore section">
    <ul>
      <li>
        <div class="picture"><img src="/img/explore/shipwreck.png"></div>
        <div class="notes">
          <h3>ShipWreck Beach Bar & Grill</h3>
          <p>
            ShipWreck offers both relaxation and stimulation for all those who call it their island favorite for wonderful signature drinks and good conversation.
          </p>
          <a target="_blank" href="http://shipwreckstkitts.com/"><b>Click here to view website</b></a>
        </div>
      </li>
      <li>
        <div class="picture"><img src="/img/explore/reggae.png"></div>
        <div class="notes">
          <h3>Reggae Beach Bar & Grill </h3>
          <p>
            The restaurant combines hearty cuisine with an array of water sports and offers rental of equipment for snorkelling,
            ocean kayaks and gift shop.
          </p>
          <a target="_blank" href="http://www.reggaebeachbar.com/"><b>Click here to view website</b></a>
        </div>
      </li>
      <li>
        <div class="picture"><img src="/img/explore/brimstone.png"></div>
        <div class="notes">
          <h3>Brimstone Hill Fortress</h3>
          <p>
            Brimstone Hill Fortress National Park is a UNESCO World Heritage Site of historical, cultural and architectural significance.
          </p>
          <a target="_blank" href="http://www.brimstonehillfortress.org/"><b>Click here to view website</b></a>
        </div>
      </li>
      <li>
        <div class="picture"><img src="/img/explore/portzante.png"></div>
        <div class="notes">
          <h3>Port Zante</h3>
          <p>
            The port's sparkling-new facilities include restaurants and boutiques, jewelry shops, souvenirs and a duty-free plaza.
          </p>
          <a target="_blank" href=" http://www.portzantemarina.com/"><b>Click here to view website</b></a>
        </div>
      </li>
    </ul>
  </div>
CONTENT;

require ('_footer.php');