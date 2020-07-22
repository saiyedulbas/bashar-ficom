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
	<?php 
	if(isset($_POST['pingii'])){
		$query = mysqli_query($connection,"SELECT * FROM chat WHERE usercomment = 'bad user'");
		$jiba = mysqli_num_rows($query);
		echo '<p class="btn btn-primary">No. of bad user : '.$jiba.'</p>';
		while($row = mysqli_fetch_assoc($query)){
			echo '<p class="btn btn-primary">'.'First Name: '.$row['firstname'].' | '.'Last Name: '.'  '.$row['lastname'].' | '.'Email: '.$row['email'].'</p>';
		}
		exit();
	}
	?>
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  
 
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script9.js"></script>
</body>
</html>