<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time | 3 Columns</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="layout/styles/3_column.css" type="text/css" />
<link rel="stylesheet" href="css/sliate-style.css" type="text/css" />





<style type="text/css">
#map {
	height: 500px;
	width: 100%;
}
</style>

</head>
<body id="top">
<div class="wrapper row1">
    <img src="images/SLIATE.png" width="100%" height="87" />
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
     <?php include('menu.php'); ?>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="left_column">
      <div class="holder">
        <h2 class="title">ADVANCED TECHNOLOGICAL INSTITUTES</h2>
        <ul class="nostart">
          <li><a href="ati_ampara.php">Ampara-Hardys</a></li>
          <li><a href="ati_badulla.php">Badulla</a></li>
          <li><a href="#">Dehiwala</a></li>
          <li><a href="#">Galle</a></li>
          <li><a href="#">Gampaha</a></li>
          <li><a href="#">Jaffna</a></li>
          <li><a href="#">Kandy</a></li>
          <li><a href="#">Kegalle</a></li>
          <li><a href="#">Kurunagala</a></li>
          <li><a href="#">Colombo</a></li>
          <li><a href="#">Trincomalee</a></li>
        </ul>
        <br>
        <h2 class="title">Sections</h2>
        <ul class="nostart">  
        
          <li><a href="#">Anuradhapura</a></li>
          <li><a href="#">Batticaloa</a></li>
          <li><a href="#">Rathnapura</a></li>
          <li><a href="#">Samanthurai</a></li>
          <li><a href="#">Tangalle</a></li>
          <li><a href="#">Vavuniya</a></li>
          <li><a href="#">Nawalapitiya</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <div class="imgholder"><img src="images/demo/190x90.gif" alt="" /></div>
        <div class="imgholder last"><img src="images/demo/190x90.gif" alt="" /></div>
      </div>
    </div>
    <!-- ############ -->
    <div id="content">
      <h1 class="title">MAP</h1>
      
      
      
      
      <div id="map"></div>
      
      
      
      
      <h2 class="title">Table(s)</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
          </tr>
          <tr class="dark">
            <td>Value 5</td>
            <td>Value 6</td>
            <td>Value 7</td>
            <td>Value 8</td>
          </tr>
        </tbody>
      </table>
      <h2 class="title">Title Here</h2>
      <p>Etiam euismod porttitor diam, eget tristique lacus eleifend tincidunt. In hac habitasse platea dictumst.</p>
      <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Donec at nunc nec lectus viverra pretium sit amet a orci.</li>
        <li>Praesent ac felis non magna accumsan accumsan.</li>
        <li>Vivamus non est nunc, non pulvinar libero.</li>
      </ul>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et sapien id quam sodales tincidunt. Cras facilisis mi eu nibh ultricies sed malesuada metus varius.</p>
    </div>
    <!-- ############ -->
    <div id="right_column">
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <div class="imgholder"><img src="images/demo/240x90.gif" alt="" /></div>
        <div class="imgholder"><img src="images/demo/240x90.gif" alt="" /></div>
        <div class="imgholder last"><img src="images/demo/240x90.gif" alt="" /></div>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include('footer.php'); ?>


<script>
      function initMap() { 
        var uluru = {lat: 6.924739, lng: 79.861574};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 2,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNl3wbHn8ls_gn8y-oKQrx_CJCynBzT6Y&callback=initMap">
    </script>
</body>
</html>