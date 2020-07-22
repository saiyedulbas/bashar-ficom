<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['log'])){
	header('location:login.php');
	die();
}
if(isset($_POST['submit'])){
	$select = $_POST['select'];
	$tuta = mysqli_query($connection,"SELECT * FROM pages WHERE pageid = 1");
	$how = mysqli_fetch_assoc($tuta);
	$jita = $how['frontpage'];
	$chuna = $how['oldurl'];
	$lalu = mysqli_query($connection,"UPDATE pages SET pageid = '$jita', url = '$chuna' WHERE pageid = 1");
	$tuna = mysqli_query($connection,"UPDATE pages SET pageid = 1, url = 'index.php' WHERE pagetitle = '$select' ");
	
}


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Make Front Page</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="totalwrap">
	<div class="left">
	  <a class="element" href="addpage.php">Add New Page</a>
	  <a class="element" href="allpages.php">All Pages</a>
	  <a class="element" href="frontpage.php">Select your front page</a>
	   <a class="element" href="themeoption.php">Theme Option</a>
	   <a class="element" href="interested.php">Interested People</a>
	   <a class="element" href="registered_people.php">Registered People</a>
	   <a class="element" href="reporteduser.php">Reported User</a>
	</div>
	<div class="right">
	 <a class="mina" href="logout.php">logout</a>
	 
	 <p class="front" style="margin-bottom:20px;">current front page:
	 <?php 
         $keno = mysqli_query($connection,"SELECT * FROM pages WHERE pageid = 1");
		 $keno2 = mysqli_fetch_assoc($keno);
		 echo $keno2['pagetitle'];
	 ?>
	 </p>
	 <form action="" method="POST">
	 <select class="tuna" name="select">
	 <?php 
	   $nita = mysqli_query($connection,"SELECT * FROM pages");
	   
	   while($mula = mysqli_fetch_assoc($nita)){?>
	   <option value="<?php echo $mula['pagetitle']; ?>"><?php echo $mula['pagetitle']; ?></option>
	   
	   <?php }?>
	 </select>
	 <input type="submit" class="suma" value="assign" name="submit"></input>
	 </form>
	 
	 
	</div>
	</div>
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script
			  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
			  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
			  crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="custom.js"></script>
</body>
</html>