<?php
require_once('connection.php');



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
	if(isset($_POST['pingi'])){
		$query = mysqli_query($connection,"SELECT * FROM chat WHERE usercomment = 'good user'");
		$jiba = mysqli_num_rows($query);
		echo '<p class="btn btn-primary">No. of good user : '.$jiba.'</p>';
		while($row = mysqli_fetch_assoc($query)){
			echo '<p class="btn btn-primary">'.'First Name: '.$row['firstname'].' | '.'Last Name: '.'  '.$row['lastname'].' | '.'Email: '.$row['email'].'</p>';
		}
		exit();
	}
	?>
	<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="jquery-ui.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
 
	
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script9.js"></script>
</body>
</html>