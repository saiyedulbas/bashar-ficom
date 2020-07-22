<?php 
require_once('connection.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>take</title>
</head>
<body>
	<?php 
	 if(isset($_POST['ish'])){
		 $birr = $_POST['tim'];
		 $bir = mysqli_query($connection,"SELECT * FROM admincontact WHERE senderfirstname = '$birr' ");
		 
		 while($tir = mysqli_fetch_assoc($bir)){?>
		 <p class="btn btn-primary"><?php echo $tir['message']; ?></p>
		 
	 <?php }
	 exit();
	 }
	?>
	 
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script
			  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
			  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
			  crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="script.js"></script>
</body>
</html>