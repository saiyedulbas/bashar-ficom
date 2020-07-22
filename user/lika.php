<?php
require_once('../admin/connection.php');
session_start();
if(!isset($_SESSION['login'])){
	header('location:../login.php');
	die();
}
date_default_timezone_set('Asia/Dhaka');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Welcome <?php echo $take['firstname']; ?></title>
	<link rel="stylesheet" type="text/css" href="jquery-ui.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="maka.css" media="all" />
</head>
<body>
	<?php 
	if(isset($_POST['fata'])){
		$first = $_POST['faltu'];
		
		$third = $_SESSION['firstname'];
		$fourth = $_SESSION['lastname'];
		$rui = date("Y-m-d h:i:sa");
		$query = mysqli_query($connection,"INSERT INTO admincontact (senderfirstname,senderlastname,message,created_at) VALUES ('$third ','$fourth','$first','$rui')");
	}
	?>
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script11.js"></script>
</body>
</html>