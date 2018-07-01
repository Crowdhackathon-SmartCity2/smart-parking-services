<!DOCTYPE html>
<?php
echo "<!DOCTYPE html>\n<html><head>";
 require_once 'functions.php';
 echo<<<_END
<html>
<title>Smart Parking Services</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Smart Parking Services</b> </a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Parking spot statistics </a>
      <a href="#contact" class="w3-bar-item w3-button">Communicate with a user</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:2000px;" id="home">
   <img class="w3-image" src="map.png" alt="Architecture" width="1500" height="800">
 <!-- <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> <span class="w3-hide-small w3-text-light-grey">Architects</span></h1>
  </div>-->
</header>

<!-- Page content -->
<!--<div class="w3-content w3-padding" style="max-width:1564px">
<div id="googleMap" class="w3-grayscale" style="width:100%;height:600px;"></div>-->

<!-- Footer 
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>-->

<!-- Add Google Maps -->
 <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY-iVKhcsxabw&callback=initMap">
    </script>
<!--<script>
function myMap()
{
  myCenter=new google.maps.LatLng(38.899833, 22.433572);
  myCenter2=new google.maps.LatLng(38.899759, 22.434290);
  myCenter3=new google.maps.LatLng(38.899738, 22.434005);
  var mapOptions= {
    center:myCenter,
    zoom:19, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
  //var image2="http://www.comune.arezzo.it/il-comune/suap-e-attivita-economiche/01_notizie/avvisi-pubblico-per-titoli-finalizzato-all2019assegnazione-di-postazioni-per-attrazioni-dello-spettacolo-viaggiante-nel-triennio-2018-2019-2020/image";
  var marker = new google.maps.Marker({
    position: myCenter,
  });
  var marker2 = new google.maps.Marker({
    position: myCenter2,
    //icon :image2
  });
  var marker3 = new google.maps.Marker({
    position: myCenter3,
   
  });
  marker.setMap(map);
  marker2.setMap(map);
  marker3.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->
  
  <!-- Parking Spot Statistics -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Near Parking Spot Statistics</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Parking Spot 1</div>
        <img src="chart.png" alt="House" style="width:100%"><br>
		<p>Mean Parking time: 53 mins</p>
		<p>User said he'll leave in: 10 mins</p>
      </div>
    </div>
	
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Parking Spot 2</div>
        <img src="chart2.png" alt="House" style="width:100%"><br>
		<p>Mean Parking time: 40 mins</p>
		<p>User said he'll leave in: 37 mins</p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Parking Spot 3</div>
        <img src="chart3.png" alt="House" style="width:100%">
		<p>Mean Parking time: 40 mins</p>
		<p>User said he'll leave in: 15 mins</p>
      </div>
    </div>
    
   

 
  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Ask user for a Parking Spot</h3>
    <p>I would like to park there, are you leaving any time soon ?.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Parking Spot Number" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="Ask">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Google Map -->


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
_END
?>