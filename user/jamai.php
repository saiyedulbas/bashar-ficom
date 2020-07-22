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
	if(isset($_POST['jinga'])){
		$tina = $_POST['jira'];
		$tina2 = $_SESSION['firstname'];
		$query = mysqli_query($connection,"SELECT * FROM livechat WHERE senderfirstname IN ('$tina2','$tina') AND receiverfirstname IN ('$tina2','$tina') ");
		while($row = mysqli_fetch_assoc($query)){
			echo '<p class="btn btn-primary" style="display:block">'.$row['senderfirstname'].' '.$row['senderlastname'].' '.' : '.$row['message'].'</p>';
		}
		exit();
	}
	?>
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  <script type="text/javascript" src="script2.js"></script>
  <script type="text/javascript" src="script3.js"></script>
  <script type="text/javascript" src="script15.js"></script>
  <script type="text/javascript" src="script16.js"></script>
</body>
</html>