<?php
require_once('../admin/connection.php');
session_start();
if(!isset($_SESSION['login'])){
	header('location:../login.php');
	die();
}
$put = $_SESSION['email'];
	 $query = mysqli_query($connection,"SELECT * FROM chat WHERE email = '$put'");
	 $take = mysqli_fetch_assoc($query);

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
	<div class="totalwrap">
	<div class="left">
	  <a class="element" href="index.php">My profile</a>
	  <a class="element" href="groupchat.php">Group chat</a>
	  <a class="element" href="userinfo.php">User Info</a>
	  <a class="element" href="sendmessage.php">Send Message</a>
	  <a class="element" href="inbox.php">Inbox</a>
	  <a class="element" href="livechat.php">Live Chat</a>
	</div>
	<div class="right">
	 <a class="mina" href="logout.php">logout</a>
	 <a class="bell" href="#"><i class="fa fa-bell"></i></a>
	 <a class="adminbell" href="#"><i class="fa fa-bell"></i></a>
	 
	 <?php 
	 
	 $put = $_SESSION['email'];
	 $query = mysqli_query($connection,"SELECT * FROM chat WHERE email = '$put'");
	 $take = mysqli_fetch_assoc($query);
	 
	 
	 
	 
	 ?>
	 
	    <img style="width:200px;height:200px;border-radius:50%;margin-left:40%;" src="../images/<?php echo $take['photo']; ?>" />
		
		<p class="same same1">First Name:<?php echo $take['firstname'] ?></p>
		<p class="same same2">Last Name:<?php echo $take['lastname'] ?></p>
		<p class="same same3">Email:<?php echo $take['email'] ?></p>
		<p class="same same4">Date of Birth:<?php echo $take['date'] ?></p>
		<p class="same same5">Token No.:<?php echo $take['token'] ?></p>
	 
	 
	</div>
	</div>
	<div class="chum" style="display:none">
	
	
	<img style="width:200px;height:200px;border-radius:50%;margin-left:30%;" src="../images/<?php echo $take['photo']; ?>" />
	<br>
	<p class="comeon">Welcome to your homepage, <?php echo $take['firstname']; ?></p>
	</div>
	<div class="batti" style="display:none">
	
	</div>
	<div class="katti" style="display:none">
	
	
	</div>
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script5.js"></script>
</body>
</html>