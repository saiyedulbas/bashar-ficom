<?php 
require_once('connection.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ajax</title>
</head>
<body>
	<?php 
	if(isset($_POST['done'])){
	$first = $_POST['name'];
	$query = mysqli_query($connection,"INSERT INTO now (name) VALUES ('$first')");
	exit();
	}
	if(isset($_POST['display'])){
		$muery = mysqli_query($connection,"SELECT * FROM now ");
		
		while($muery2 = mysqli_fetch_assoc($muery)){
			echo $muery2['name']."<br>";
		}
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
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#pagecontent' });</script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>