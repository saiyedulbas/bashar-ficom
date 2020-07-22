<?php
require_once('connection.php');



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>All Pages</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	
	  <?php 
	  if(isset($_POST['arc'])){
		  $lac = $_POST['add'];
		  $lacc = mysqli_query($connection,"SELECT * FROM pages WHERE pagetitle LIKE '%$lac%'");
		  while($la = mysqli_fetch_assoc($lacc)){?>
			  <a href="edit.php<?php echo $la['oldurl']; ?>" class="page"><?php echo $la['pagetitle']; ?></a>
		  <?php }
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