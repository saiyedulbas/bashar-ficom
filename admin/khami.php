<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['log'])){
	header('location:login.php');
	die();
}


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Theme Option</title>
	<link rel="stylesheet" href="jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="totalwrap">
	<div class="left">
	  <a class="element" href="addpage.php">Add New Page</a>
	  <a class="element" href="allpages.php">All Pages</a>
	  <a class="element" href="frontpage.php">Select your front page</a>
	  <a class="element" href="themeoption.php">Theme Option</a>
	  <a class="element" href="interested.php">Interested People</a>
	  <a class="element" href="registered_people.php">Registered People</a>
	  
	</div>
	<div class="right">
	 <a class="mina" href="logout.php">logout</a>
	 
	 <a class="kado" href="#">Good Users</a>
	 <a class="kano" href="#">Bad Users</a>
	</div>
	<div class="timi" style="display:none"></div>
	<div class="tini" style="display:none"></div>
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  
 
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script9.js"></script>
</body>
</html>