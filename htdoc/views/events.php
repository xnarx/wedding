<?php 

$page = "events";
$pageTitle = "Nick & Ariel's Wedding - Events";
$metaKey = "";
$metaDes = "";
$pageAssets = "";

require ('_header.php');

echo <<<CONTENT
  <div class="events section">
    <ul>
      <li>
        <div class="date">
          Wednesday, July 1st
        </div> 
        <div class="activity">
          Welcome drinks at St. Kitts Marriott Resort & The Royal Beach Casino.
        </div>
      </li>
      <li>
        <div class="date">
          Thursday, July 2nd
        </div> 
        <div class="activity">
          Catamaran trip to Nevis.&nbsp;&nbsp;
          <a target=_blank" href="https://docs.google.com/forms/d/1kFGGWx2zbkMPFx-sRSBXoioe_ICrkFEdoOKTGOMdS2M/viewform?usp=send_form">
            <b>Click here to reserve a spot!</b>
          </a>
        </div>
      </li>
      <li>
        <div class="date">
          Friday, July 3rd
        </div> 
        <div class="activity">
          Caribbean Jerk Dinner at Shipwreck Beach bar 6pm.
        </div>
      </li>
      <li>
        <div class="date">
          Saturday, July 4th
        </div> 
        <div class="activity">
          Wedding Day!
        </div>
      </li>
      <li>
        <div class="date">
          Sunday, July 5th
        </div> 
        <div class="activity">
          Brunch at St. Kitts Marriott Resort & The Royal Beach Casino.
        </div>
      </li>
    <ul>
  </div>
CONTENT;


require ('_footer.php');
