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
	if(isset($_POST['kosha'])){
		$take = $_POST['chima'];
		$query = mysqli_query($connection,"SELECT * FROM chat WHERE id = '$take'");
		$nona = mysqli_fetch_assoc($query);
		
		?>
		<img style="width:200px;height:200px;border-radius:50%;margin-left:30%;" src="../images/<?php echo $nona['photo']; ?>" /><br><br><br>
		<?php 
		echo '<p class="btn btn-primary" style="display:block">'.$nona['firstname'].' '.$nona['lastname'].'</p>'."<br>";
		echo '<p class="btn btn-primary" style="display:block">'.$nona['email'].'</p>'."<br>";
		echo '<p class="btn btn-primary" style="display:block">'.$nona['date'].'</p>';
		exit();
		
	}
	?>
	
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script5.js"></script>
</body>
</html>