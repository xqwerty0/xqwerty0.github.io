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
	<title>Little Brother Dashboard</title>
	<link rel="stylesheet" href="css/dashboard.css">
	<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/particle.css">
</head>
<body>

	<!-- partial:index.partial.html -->
<!-- particles.js container --> <div id="particles-js"></div>  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<!-- partial -->
  <script  src="js/particle.js"></script>
	<div class="main">
		<div id="top-left"><p>Küçük Birader Projesi | Demo Kontrol Paneli</p></div>
		<div id="top-right"><p>Proje Yönetim Sistemi v0.1</p></div>
		<div class="center">
			<div class="box"><p id="p1"><a href="website.php">website.</a></p></div>
			<div class="box"><p id="p2"><a href="demo.php">demo.</a></p></div>
			<div class="box"><p id="p3">dosya.</p></div>
		</div>
		<div id="bottom"><p><a href="logout.php">oturumu kapat</a></p></div>
	</div>
</body>
</html>