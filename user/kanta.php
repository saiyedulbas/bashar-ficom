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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="maka.css" media="all" />
</head>
<body>
	<?php 
	if(isset($_POST['kani'])){
		echo'<p class="btn btn-primary">User Notifications:</p>';
		$first = $_SESSION['firstname'];
		$third = mysqli_query($connection,"UPDATE chat SET usernotification = '2' WHERE firstname = '$first'");
		$query = mysqli_query($connection,"SELECT * FROM chat WHERE firstname = '$first'");
		$row = mysqli_fetch_assoc($query);
		if($row['usercomment'] == 'bad user'){
			echo '<p class="btn btn-primary">You have been marked as bad user by '.$row['markinguser'].'</p>';
		}
		if($row['usercomment'] == 'good user'){
			echo '<p class="btn btn-primary">You have been rated as good user by '.$row['markinguser'].'</p>';
		}
		exit();
	}
	?>
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script11.js"></script>
</body>
</html>