<?php 
require_once('admin/connection.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>take that</title>
</head>
<body>
	<?php 
	  if(isset($_POST['set'])){
		  $ten = $_POST['name'];
		  $tenn = $_POST['email'];
		  $eleven = $_POST['phone'];
		  $twelve = $_POST['address'];
		  $thirteen = $_POST['yourself'];
		  
		  $query = mysqli_query($connection,"INSERT INTO popup (firstname,email,approval,phone,address,yourself,token) VALUES ('$ten','$tenn','Make it approve','$eleven','$twelve','$thirteen','0')");
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
	WELCOME <span style="font-family: Raleway, sans-serif; font-size:37px; color:#ffffff; line-height:39px; font-weight: 300; letter-spacing: 5px;">'.$ten.' TO BASHAR Ficom APPLICATION</span>
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
		<td align="center" style="font-family: Raleway, sans-serif; font-size:22px; font-weight: bold; color:#333;">Confirmation Message</td>
		</tr>
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr>
		<td align="center" style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">
	Your data has been stored to the application. Admin will take a look and as soon as he approves yourself, you will get access token via email. So, wait for the access token.
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
		<td style="font-family: Raleway, Arial, sans-serif; font-size:20px; color:#333; line-height:24px; font-weight: bold;">Email</td>
		</tr>
 
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">'.$tenn.'</td>
		</tr>
 
		</tbody></table>
		</td>
		</tr>
		<tr>
		<td height="30"></td>
		</tr>
		</tbody></table>
 
 
 
 
 
		<table width="1" height="20" border="0" cellpadding="0" cellspacing="0" align="left">
		<tbody><tr>
		<td height="20" style="font-size: 0;line-height: 0;border-collapse: collapse;">
		<p style="padding-left: 24px;">&nbsp;</p>
		</td>
		</tr>
		</tbody></table>
 
 
 
		<table class="col3" width="183" border="0" align="left" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td height="30"></td>
		</tr>
		<tr>
		<td align="center">
		<table class="insider" width="133" border="0" align="center" cellpadding="0" cellspacing="0">
 
		<tbody><tr align="center" style="line-height:0px;">
		<td>
		<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://webdevtrick.com/wp-content/uploads/work.png" width="78" height="78" alt="icon">
		</td>
		</tr>
 
 
		<tr>
		<td height="15"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Raleway, sans-serif; font-size:20px; color:#333; line-height:24px; font-weight: bold;">phone Number</td>
		</tr>
 
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">'.$eleven.'</td>
		</tr>
 
 
 
		</tbody></table>
		</td>
		</tr>
		<tr>
		<td height="30"></td>
		</tr>
		</tbody></table>
 
 
 
		<table width="1" height="20" border="0" cellpadding="0" cellspacing="0" align="left">
		<tbody><tr>
		<td height="20" style="font-size: 0;line-height: 0;border-collapse: collapse;">
		<p style="padding-left: 24px;">&nbsp;</p>
		</td>
		</tr>
		</tbody></table>
 
 
		<table class="col3" width="183" border="0" align="right" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td height="30"></td>
		</tr>
		<tr>
		<td align="center">
		<table class="insider" width="133" border="0" align="center" cellpadding="0" cellspacing="0">
 
		<tbody><tr align="center" style="line-height:0px;">
		<td>
		<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://webdevtrick.com/wp-content/uploads/computer.png" width="78" height="78" alt="icon">
		</td>
		</tr>
 
 
		<tr>
		<td height="15"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Raleway,  sans-serif; font-size:20px; color:#333; line-height:24px; font-weight: bold;">Address</td>
		</tr>
 
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">'.$twelve.'</td>
		</tr>
 
		</tbody></table>
		</td>
		</tr>
		<tr>
		<td height="30"></td>
		</tr>
		</tbody></table>
 
 
		</td>
		</tr>
		</tbody></table>
		</td>
		</tr>
 
		
 
 
<!-- END PRICING -->
 
 
<!-- START FOOTER -->
 
		
 
 
		
 
 
 
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
	
		mail($tenn,'Confirmation message from admin',$msg,$header);
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