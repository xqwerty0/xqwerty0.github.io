<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:login.php");
    exit;
  }
?>

<!-- Show password protected content down here -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.6.1/css/ol.css" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/01a85b9711.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.6.1/build/ol.js"></script>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"> -->
	<title>Tepegöz</title> 
</head>
<body>
	<div class="container">
    <form class="button" id="top"action="action_page.php">
  <input class="button" id="search" type="text" placeholder="veritabanı araması ..." name="search" oninput="myFunction()">
  <button class="button" type="submit"><i class="fas fa-search"></i></button>
</form>

<div id="top_right">
  <span id="login_info">root </i></span>
  <span id="login_info">|</i></span>
  <span id="login_info">demo v1 </i></span>
  <span id="login_info">|</i></span>
  <span id="login_info"><i class="far fa-circle"></i></span>
</div>
	
	<div id="left">
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()"class="left-button"><i class="far fa-address-book"></i></span>
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="fas fa-file-contract"></i></span> 
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="far fa-id-card"></i></span> 
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="fas fa-passport"></i></span> 
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="fas fa-key"></i></span> 
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="fas fa-user-secret"></i></span> 
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="fas fa-bug"></i></span> 
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="fas fa-code-branch"></i></span> 
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="fas fa-database"></i></span> 
   <span onmouseover="myFunction2show()" onmouseout="myFunction2hide()" class="left-button"><i class="fas fa-power-off"></i></span>  
  </div>
  <div id="left_drop">
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
    <a href="" class="drop_item">lorem_ipsum</a>
  </div>
	<div id="bottom"><i class="fa fa-eye"></i></div>
	<div id="bottom-right">
		    <span onmouseover="Squareshow()" onmouseout="Squarehide()" id="square"class="right-button"><i class="far fa-square"></i></span>
        <span onmouseover="Usershow()" onmouseout="Userhide()" id="person"class="right-button"><i class="fas fa-users"></i></span>
        <span onmouseover="Videoshow()" onmouseout="Videohide()" id="cam" class="right-button"><i class="fas fa-video"></i></span>
	</div>
  <div id="bottom_right_drop_square"><p class="program_names">diyar.</p></div>
  <div id="bottom_right_drop_user"><p class="program_names">mim.</p></div>
  <div id="bottom_right_drop_video"><p class="program_names">his.</p></div>
    <div id="map" class="map"></div>
    <script type="text/javascript">
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([28.97, 41.05]),
          zoom: 12.5
        })
      });
      //change map color
map.on('postcompose',function(e){
    document.querySelector('canvas').style.filter="invert(90%)";
  });
    </script>
    </div>

    <div id="database">
      <div class="database_list">
      <button id="close" onclick="myFunction1()"><i class="fas fa-times"></i></button>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
       <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
       <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
       <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
       <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
       <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
      <span class="database_item">lorem_ipsum</span>
    </div>
    </div>
<script src="main.js"></script>
</body>
</html>