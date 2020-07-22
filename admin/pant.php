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
	if(isset($_POST['tomar'])){
		$query = mysqli_query($connection,"SELECT * FROM chat WHERE comment = 'bad user'");
		$jao = mysqli_num_rows($query);
		echo '<p class="dekhi btn btn-primary">No. of people: '.$jao.'</p>';
		
		while($nik = mysqli_fetch_assoc($query)){
		echo '<p class="dekhi btn btn-primary">First Name : '.$nik['firstname'].' '.'|'.' '.'Last Name :'.$nik['lastname'].' '.'|'.' '.'Email :'.$nik['email'].'</p>';
		}
		exit();
	}
	?>
	
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="rat.js"></script>
  <script type="text/javascript" src="mat.js"></script>
</body>
</html>