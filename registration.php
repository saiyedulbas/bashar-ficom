<?php 
require_once('admin/connection.php');
$dist = mysqli_query($connection,"SELECT * FROM theme");
$chitaa = mysqli_fetch_assoc($dist);
?>
<?php 
		$nana = mysqli_query($connection,"SELECT * FROM image");
		$nanana = mysqli_fetch_assoc($nana);
		
		?>
		<?php 

if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$date = $_POST['date'];
	$token = $_POST['token'];
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
	WELCOME <span style="font-family: Raleway, sans-serif; font-size:37px; color:#ffffff; line-height:39px; font-weight: 300; letter-spacing: 5px;">'.$firstname." ".$lastname.' TO BASHAR Ficom APPLICATION</span>
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
		<td align="center" style="font-family: Raleway, sans-serif; font-size:22px; font-weight: bold; color:#333;">ACCOUNT INFORMATION</td>
		</tr>
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr>
		<td align="center" style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">
	HERE ARE ALL THE ACCOUNT INFORMATIONS THAT YOU WILL NEED TO LOG IN TO YOUR ACCOUNT SENT FROM THE BASHAR SERVER.
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
		<td style="font-family: Raleway, Arial, sans-serif; font-size:20px; color:#333; line-height:24px; font-weight: bold;">LOGIN EMAIL</td>
		</tr>
 
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">'.$email.'</td>
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
		<td style="font-family: Raleway, sans-serif; font-size:20px; color:#333; line-height:24px; font-weight: bold;">LOGIN PASSWORD</td>
		</tr>
 
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">'.$password.'</td>
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
		<td style="font-family: Raleway,  sans-serif; font-size:20px; color:#333; line-height:24px; font-weight: bold;">TOKEN</td>
		</tr>
 
 
		<tr>
		<td height="10"></td>
		</tr>
 
 
		<tr align="center">
		<td style="font-family: Lato, sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">'.$token.'</td>
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
 
		<tr>
		<td height="5"></td>
		</tr>
 
 
<!-- END SHOWCASE -->
 
 
<!-- START TITLE -->
 
		<tr>
		<td align="center">
		<table align="center" class="col-600" width="600" border="0" cellspacing="0" cellpadding="0">
		<tbody><tr>
		<td align="center" bgcolor="#333">
		<table class="col-600" width="600" align="center" border="0" cellspacing="0" cellpadding="0">
		<tbody><tr>
		<td height="33"></td>
		</tr>
		<tr>
		<td>
 
 
		<table class="col1" width="183" border="0" align="left" cellpadding="0" cellspacing="0">
 
		<tbody><tr>
		<td height="18"></td>
		</tr>
 
		<tr>
		<td align="center">
		<img style="display:block; line-height:0px; font-size:0px; border:0px;" class="images_style" src="https://webdevtrick.com/wp-content/uploads/email-template.png" alt="img" width="156" height="160">
		</td>
 
 
 
		</tr>
		</tbody></table>
 
 
 
		<table class="col3_one" width="380" border="0" align="right" cellpadding="0" cellspacing="0">
 
		<tbody><tr align="left" valign="top">
		<td style="font-family: Raleway, sans-serif; font-size:20px; color:#fbb016; line-height:30px; font-weight: bold;">Message from bashar </td>
		</tr>
 
 
		<tr>
		<td height="5"></td>
		</tr>
 
 
		<tr align="left" valign="top">
		<td style="font-family: Lato, sans-serif; font-size:14px; color:#fff; line-height:24px; font-weight: 300;">
	Keep the application as clean as it gets and make sure it is gonna work out in the cleanest way possible. If any problem occurs, contact with admin. Thank you.
		</td>
		</tr>
 
		<tr>
		<td height="10"></td>
		</tr>
 
		<tr align="left" valign="top">
		<td>
		<table class="button" style="border: 2px solid #fff;" bgcolor="#fbb016" width="30%" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td width="10"></td>
		<td height="30" align="center" style="font-family: Open Sans, Arial, sans-serif; font-size:13px; color:#ffffff;">
		
		</td>
		<td width="10"></td>
		</tr>
		</tbody></table>
		</td>
		</tr>
 
		</tbody></table>
		</td>
		</tr>
		<tr>
		<td height="33"></td>
		</tr>
		</tbody></table>
		</td>
		</tr>
		</tbody></table>
		</td>
		</tr>
 
 
<!-- END TITLE -->
 
 
<!--ABOUT -->
 
		<tr>
		<td align="center">
		<table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-right:20px;">
 
 
 
		<tbody><tr>
		<td align="center">
		<table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style=" border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
		<tbody><tr>
		<td height="50"></td>
		</tr>
		<tr>
		<td align="right">
 
 
		<table class="col2" width="287" border="0" align="right" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td align="center" style="line-height:0px;">
		<img style="display:block; line-height:0px; font-size:0px; border:0px;" class="images_style" src="https://webdevtrick.com/wp-content/uploads/email-template-1.png" width="169" height="138">
		</td>
		</tr>
		</tbody></table>
 
 
 
 
 
 
		<table width="287" border="0" align="left" cellpadding="0" cellspacing="0" class="col2" style="">
		<tbody><tr>
		<td align="center">
		<table class="insider" width="237" border="0" align="center" cellpadding="0" cellspacing="0">
 
 
 
		<tbody><tr align="left">
		<td style="font-family: Raleway, sans-serif; font-size:23px; color:#333; line-height:30px; font-weight: bold;">Our Services</td>
		</tr>
 
		<tr>
		<td height="5"></td>
		</tr>
 
 
		<tr>
		<td style="font-family: Lato, sans-serif; font-size:14px; color:#7f8c8d; line-height:24px; font-weight: 300;">You will get preview based file management system with communication and obviously thoroughly dominant api based regulation system.
		</td>
		</tr>
 
 
		</tbody></table>
		</td>
		</tr>
		</tbody></table>
		</td>
		</tr>
		</tbody></table>
		</td>
		</tr>
 
 
<!-- END ABOUT -->
 
 
 
<!-- CHECKOUT BELOW -->
 
		<tr>
		<td align="center">
		<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style=" border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
		<tbody><tr>
		<td height="50"></td>
		</tr>
		<tr>
 
 
		<td align="center" bgcolor="#333">
		<table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td height="35"></td>
		</tr>
 
 
		
 
 
		
 
 
		
 
 
		
 
		</tbody></table>
		</td>
		</tr>
		</tbody></table>
		</td>
		</tr>
 
 
<!-- END CHECKOUT BELOW -->
 
 
<!--START PRICING-->
 
		
 
 
		<table style="border:1px solid #e2e2e2;" class="col2" width="287" border="0" align="left" cellpadding="0" cellspacing="0">
 
 
		<tbody>
 
 
	
 
		
 
 
		
 
 
		
 
 
 
		
 
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
 
 
		<table style="border:1px solid #e2e2e2;" class="col2" width="287" border="0" align="right" cellpadding="0" cellspacing="0">
 
 
		<tbody>
 
 
		
 
		<tr align="center" style="line-height:0px;">
		<td style="font-family: Lato, sans-serif; font-size:48px; color:#fbb016; font-weight: bold; line-height: 44px;">$150</td>
		</tr>
 
 
		<tr>
		<td height="30"></td>
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
 
		<tr>
		<td align="center">
		<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style=" border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
		<tbody><tr>
		<td height="50"></td>
		</tr>
		<tr>
		<td align="center" bgcolor="#333" background="https://webdevtrick.com/wp-content/uploads/image-slider1.jpg" height="185">
		<table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td height="25"></td>
		</tr>
 
		<tr>
		<td align="center" style="font-family: Raleway,  sans-serif; font-size:26px; font-weight: 500; color:#fbb016; background-color: #333;">Follow Us On Social Media</td>
		</tr>
 
 
		<tr>
		<td height="25"></td>
		</tr>
 
 
 
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
	$target = 'images/'.basename($_FILES['file']['name']);
	$take = $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$target);
	$firstquery = mysqli_query($connection,"SELECT * FROM popup WHERE email = '$email'");
	$make = mysqli_fetch_assoc($firstquery);
	$distinct = $make['token'];
	$secondquery = mysqli_query($connection,"SELECT * FROM chat WHERE email = '$email'");
	$ajj = mysqli_num_rows($secondquery);
	if($token == $distinct && $ajj == 0){
		$put = mysqli_query($connection,"INSERT INTO chat (firstname,lastname,email,password,date,token,photo,comment,usercomment,markinguser,messagefromadmin) VALUES ('$firstname','$lastname','$email','$password','$date','$token','$take','no comment yet','good user','admin','good work')");
		mail($email,'Account Information',$msg,$header);
	}
	if($token == $distinct && $ajj !=0){
		$rack = 'Email already exists';
	}
	
	if($token != $distinct){
		$rack = 'Access token is invalid';
	}
	if(isset($put)){
		$mina = 'you have been successfully registered';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registration</title>
  <link rel="icon" href="favicon.ico" type="image/png" sizes="16x16">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link rel="stylesheet" href="jquery-ui.min.css">

 <style type="text/css">
 header.masthead{
	 background-image: url(<?php echo 'admin/images/'.$nanana['image']; ?>);
 }
 
 
 </style>
 

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="z-index:50;">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php"><?php echo $chitaa['title']; ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
	  
	  <?php 
$lau = mysqli_query($connection,"SELECT * FROM pages");
?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
		
		
		  
		  
		  
		  <?php 
   while($row = mysqli_fetch_assoc($lau)){?>
	  
			
           	   	<li class="cemenu nav-item"><a class="nav-link bg-dark js-scroll-trigger" href="<?php echo $row['url']; ?>"><?php echo $row['pagetitle']; ?></a></li>
               	
            
   <?php } ?>
		  <li class="cemenu nav-item">
            <a class="nav-link bg-dark js-scroll-trigger" href="documentation.html">Documentation</a>
          </li>
         <li class="cemenu nav-item">
            <a class="nav-link bg-dark js-scroll-trigger" href="login.php">Log in</a>
          </li>
          <li class="cemenu nav-item">
            <a class="nav-link bg-dark js-scroll-trigger" href="registration.php">Registration</a>
          </li>
          <li class="cemenu nav-item">
            <a class="nav-link bg-dark js-scroll-trigger" href="token.php">Access Token</a>
          </li>
		  <li class="cemenu nav-item">
            <a class="nav-link bg-dark js-scroll-trigger" href="admin/login.php">Admin Section</a>
          </li>
		  
          
		  
		  
        </ul>
      </div>
    </div>
  </nav>
<?php 
	 $nitai = mysqli_query($connection,"SELECT * FROM theme ");
	 $now = mysqli_fetch_assoc($nitai);
	 
	 ?>
  <!-- Header -->
  
  
  

  <!-- Services -->
  <section class="bg-light page-section" id="services">
    <div class="container">
      <div class="row" style="margin-top:81px">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">User Registration</h2>
          <h3 class="section-subheading text-muted">Complete your registration if you have the necessary access token</h3>
        </div>
      </div>
      
	  
	  
	   <?php 
	if(isset($mina)){ ?>
	    <p class="btn btn-success" style="display:block">
	        <?php 
	    echo $mina;
	    ?>
	    </p>
	<?php	
	}
	
	?>
	<?php 
	if(isset($rack)){ ?>
	    <p class="btn btn-danger" style="display:block">
	        <?php 
	    echo $rack;
	    ?>
	    </p>
	<?php	
	}
	
	?>
        
          <form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    
	<label class="btn btn-primary" for="exampleInputEmail1">Firstname</label>
    <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname" required>
    
  </div>
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputEmail2">Lastname</label>
    <input type="text" class="form-control" name="lastname" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter lastname" required>
    
  </div>
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputEmail3">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputPassword4">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputEmail4" aria-describedby="emailHelp" placeholder="Enter password" required>
  </div>
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputPassword5">Photo</label>
    <input type="file" class="form-control" name="file" id="exampleInputPassword5" aria-describedby="emailHelp" placeholder="file" required>
  </div>
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputPassword6">Date of birth</label>
    <input type="date" name="date" class="form-control" id="exampleInputPassword6" aria-describedby="emailHelp" placeholder="Enter Date of birth" required>
  </div>
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputPassword7">Access Token</label>
    <input type="text" name="token" class="form-control"  id="exampleInputPassword7" aria-describedby="emailHelp" placeholder="Enter Access Token" required>
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary popsubmit">Submit</button>
</form>
        
        
				 
				
				 <br><br><br>
        <span style="margin-left:35%" class="copyright">Copyright &copy; All rights reserved by  <a style="color:blue" target="_blank" href="https://findbashar.com/">Bashar</a></span>
      </div>
    
  </section>

  
<div class="zila" style="display:none">
		<p>If you have access token, then you are allowed to register. If you don't have any access token then please go to access token page and collect your access token.</p>
		</div>
  

  

  

  

  

 

  

  

  

		
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-1.10.1.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="jquery-ui.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
 
 

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
  

  
  
  <script
			  src="https://rawgit.com/jasonday/jQuery-UI-Dialog-extended/master/jquery.dialogOptions.js"
			  
			  
			  ></script>
  <script type="text/javascript" src="token.js"></script>
  
          <script type="text/javascript" src="alu.js"></script>
		  <script type="text/javascript">
		  $(function(){
   var url = window.location.href;
   var page = url.substr(url.lastIndexOf('/')+1);
   $('.cemenu a[href*="'+page+'"]').addClass('active');
});
		  </script>
</body>

</html>
