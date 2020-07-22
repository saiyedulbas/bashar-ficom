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
	<title>Registered people</title>
	<link rel="stylesheet" href="jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<?php 
	if(isset($_POST['nishat'])){
		$first = $_POST['ni'];
		$second = $_POST['nis'];
		$query = mysqli_query($connection,"UPDATE chat SET notification = '5', messagefromadmin = '$second' WHERE id = '$first'");
	}
	?>
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="rat.js"></script>
  <script type="text/javascript" src="mat.js"></script>
</body>
</html>