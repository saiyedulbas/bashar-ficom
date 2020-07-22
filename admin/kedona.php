<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['log'])){
	header('location:login.php');
	die();
}
if(isset($_POST['addpage'])){
	$pagetitle = $_POST['pagetitle'];
	$pagecontent = $_POST['pagecontent'];
	$take = $_GET['page'];
	$query = mysqli_query($connection,"UPDATE pages SET pagetitle = '$pagetitle', pagecontent = '$pagecontent' WHERE pageid = '$take' ");
	if(isset($query)){
		$success = "Page has been updated";
	}
	
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New Page</title>
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
	</div>
	<div class="right">
	 <a class="mina" href="logout.php">logout</a>
	 <form action="" method="POST">
	 <?php 
	 $take = $_GET['page'];
	 $lathi = mysqli_query($connection,"SELECT * FROM pages WHERE frontpage = '$take' ");
	 $jhata = mysqli_fetch_assoc($lathi);
	 ?>
	     <input type="text" class="paagetitle" name="pagetitle" placeholder="pagetitle" value="<?php echo $jhata['pagetitle']; ?>" /><br>
		 <textarea name="pagecontent" id="pagecontent" placeholder="content" cols="30" rows="10" ><?php echo $jhata['pagecontent']; ?></textarea><br>
		 <input type="submit" class="addpage" value="update page" name="addpage"/>
	 </form>
	 <?php 
	 if(isset($success)){
		 echo $success;
	 }
	 ?>
	</div>
	</div>
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#pagecontent' });</script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>