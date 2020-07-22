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
	if(isset($_POST['jagoo'])){
		$take = $_POST['binaa'];
		$second = $_SESSION['firstname'];
		$third = mysqli_query($connection,"SELECT * FROM chat WHERE firstname = '$take'");
		$fourth = mysqli_fetch_assoc($third);
		
		$sixth = $fourth['email'];
		
		$query = mysqli_query($connection,"UPDATE chat SET usercomment = 'good user', markinguser = '$second', usernotification = '5' WHERE firstname = '$take'");
		$hib = 'basharficom@g.com';
	$header = "From: $hib \r\n";
	$msg = '<body>
 
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 
<!--HEADER -->
 
		<tbody><tr>
		<td align="center">
		<table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td align="center" valign="top" background="https://images.pexels.com/photos/1936299/pexels-photo-1936299.jpeg?cs=srgb&dl=artificial-intelligence-codes-developing-1936299.jpg&fm=jpg" bgcolor="#66809b" style="background-size:cover; background-position:top;height=" 400""="">
		<table class="col-600" width="600" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
 
		<tbody><tr>
		<td height="40"></td>
		</tr>
 
 
		<tr>
		<td align="center" style="line-height: 0px;">
		<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://webdevtrick.com/wp-content/uploads/logo-fb-1.png" width="109" height="115" alt="logo">
		</td>
		</tr>
 
 
 
		<tr>
		<td align="center" style="font-family: Raleway, sans-serif; font-size:37px; color:#ffffff; line-height:24px; font-weight: bold; letter-spacing: 5px;">
	WELCOME <span style="font-family: Raleway, sans-serif; font-size:37px; color:#ffffff; line-height:39px; font-weight: 300; letter-spacing: 5px;">'.$take.' TO BASHAR Ficom APPLICATION</span>
		</td>
		</tr>
 
 
 
 
 
		<tr>
		<td align="center" style="font-family: Lato, sans-serif; font-size:15px; color:#ffffff; line-height:24px; font-weight: 300;">
	Now you will recive Email everytime automatically <br>on our new updates.
		</td>
		</tr>
 
 
		<tr>
		<td height="50"></td>
		</tr>
		</tbody></table>
		</td>
		</tr>
		</tbody></table>
		</td>
		</tr>
 
 
<!-- END HEADERR -->
 
 
<!-- START SHOWCASE -->
 
		<tr>
		<td align="center">
		<table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-right:20px; border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
		<tbody><tr>
		<td height="35"></td>
		</tr>
 
		<tr>
		<td align="center" style="font-family: Raleway, sans-serif; font-size:22px; font-weight: bold; color:#333;">Report FROM '.$second.'</td>
		</tr>
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr>
		<td align="center" style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">
	'.$second.' HAS SENT THIS Report TO YOU.
		</td>
		</tr>
 
		</tbody></table>
		</td>
		</tr>
 
		<tr>
		<td align="center">
		<table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9; ">
		<tbody><tr>
		<td height="10"></td>
		</tr>
		<tr>
		<td>
 
 
		<table class="col3" width="183" border="0" align="left" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td height="30"></td>
		</tr>
		<tr>
		<td align="center">
		<table class="insider" width="133" border="0" align="center" cellpadding="0" cellspacing="0">
 
		<tbody><tr align="center" style="line-height:0px;">
		<td>
		<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://webdevtrick.com/wp-content/uploads/email.png" width="78" height="78" alt="icon">
		</td>
		</tr>
 
 
		<tr>
		<td height="15"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Raleway, Arial, sans-serif; font-size:20px; color:#333; line-height:24px; font-weight: bold;">MESSAGE</td>
		</tr>
 
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Lato, sans-serif; width:100%; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">you have been marked as good user by '.$second.'</td>
		</tr>
 
		</tbody></table>
		</td>
		</tr>
		<tr>
		<td height="30"></td>
		</tr>
		</tbody></table>
 
 
 
 
 
		
 
	
		
 
 
		
 
 
 
		</tbody></table><table align="center" width="35%" border="0" cellspacing="0" cellpadding="0">
		<tbody><tr>
		<td align="center" width="30%" style="vertical-align: top;">
		<a href="https://www.facebook.com/designmodo" target="_blank"> <img src="https://webdevtrick.com/wp-content/uploads/icon-twitter.png"> </a>
		</td>
 
		<td align="center" class="margin" width="30%" style="vertical-align: top;">
	 <a href="https://twitter.com/designmodo" target="_blank"> <img src="https://webdevtrick.com/wp-content/uploads/icon-fb.png"> </a>
		</td>
 
		<td align="center" width="30%" style="vertical-align: top;">
		<a href="https://plus.google.com/+Designmodo/posts" target="_blank"> <img src="https://webdevtrick.com/wp-content/uploads/icon-googleplus.png"> </a>
		</td>
		</tr>
		</tbody></table>
 
 
 
		</td></tr></tbody></table>
		</td>
		</tr>
		</tbody></table>
		</td>
		</tr>
 
<!-- END FOOTER -->
	
		</tbody></table>
  
</body>';
	$header .= "content-type: text/html";
	
		mail($sixth,'you have got report',$msg,$header);
		exit();
	}
	?>
	
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  
  <script type="text/javascript" src="script3.js"></script>
</body>
</html>