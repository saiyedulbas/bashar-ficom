<?php
require_once('../admin/connection.php');
session_start();
if(!isset($_SESSION['login'])){
	header('location:../login.php');
	die();
}


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
	if(isset($_POST['juta'])){
		$man = $_POST['ema'];
		$query = mysqli_query($connection,"SELECT * FROM ( SELECT  * FROM conversation WHERE firstname = '$man' ORDER BY id DESC LIMIT 5 )as foo ORDER BY foo.id ASC");
		echo '<p class="btn btn-primary" style="width:50%;display:block">Latest messages</p>';
		while($jit = mysqli_fetch_assoc($query)){
			
			 echo '<p class="btn btn-primary" style="width:50%;;display:block">'.$jit['message'];
		}
		exit();
	}
	?>
	
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  <script type="text/javascript" src="script2.js"></script>
  <script type="text/javascript" src="script3.js"></script>
</body>
</html>