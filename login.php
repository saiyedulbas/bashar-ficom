<?php 
require_once('admin/connection.php');
session_start();
if(isset($_SESSION['login'])){
	header('location:user/index.php');
}
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = mysqli_query($connection,"SELECT * FROM chat WHERE email = '$email'");
	$take = mysqli_fetch_assoc($query);
	$numb = $take['password'];
	$but = $take['email'];
	$zin = $take['firstname'];
	$zina = $take['lastname'];
	if($password == $numb){
		$_SESSION['login'] = 'log';
		$_SESSION['email'] = $but;
		$_SESSION['firstname'] = $zin;
		$_SESSION['lastname'] = $zina;
		
		header('location:user/index.php');
		
	}
	else{
		$germ = 'email or passsword is invalid';
	}
}
?>
<?php 
require_once('admin/connection.php');
$dist = mysqli_query($connection,"SELECT * FROM theme");
$chitaa = mysqli_fetch_assoc($dist);
?>
<?php 
		$nana = mysqli_query($connection,"SELECT * FROM image");
		$nanana = mysqli_fetch_assoc($nana);
		
		?>
		
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
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

<body id="page-top" style="height:1500px;">

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
		  <li class="nav-item">
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
      <div class="row" style="margin-top:10px">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">User Log in</h2>
          <h3 class="section-subheading text-muted">Log into your account if you are already registered</h3>
        </div>
      </div>
      
	  <div class="wraptotal" style="overflow:hidden;display:block">
<div class="card" style="float:left;width:60%">
  <div class="card-header">
  <button class="btn btn-danger">Demo Credentials Message</button>
    
  </div>
  <div class="card-body">
  Try to create a new user from scratch to see chat functionalities and other functionalities in action.<br> And by doing that you will get familiar with the new user creation.<br> If you can't create new user, see the <a target="_blank" href="documentation.html">documentation</a> and  <a target="_blank" href="https://www.youtube.com/watch?v=HKC2moB5jY8&t=1133s">site tour</a>. And, still if you can't do that then feel free to contact at 01834663387.<br> If not available then you can click on the below link and try the demo one, but remember, you won't get the full features with the account. If you want to get full features the try creating a new one.<br><br><button class="btn btn-danger unblock">Click Here to Generate Demo Credential</button>
	
  </div>
</div>
<div class="card ourcard" style="display:none">
  <div class="card-header">
  <button class="btn btn-danger">Demo Credentials for default user</button>
    
  </div>
  <div class="card-body">
  <button class="btn btn-danger">Alert: Very Limited Features & bandwidth</button><br><br>
  <button class="btn btn-danger">Alert: Try creating a new one</button><br><br>
  email: kamalhasan448658765@gmail.com<br>
  password: 12345678
	
  </div>
</div>
</div>
	  
	  
        
          <form action="" method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Enter password" required>
  </div>
  
  
  
  
  
  <button type="submit" name="submit" class="btn btn-primary popsubmit">Submit</button>
</form>
<br><br><br><br><br>
        
        
        <span style="margin-left:35%" class="copyright">Copyright &copy; All rights reserved by  <a style="color:blue" target="_blank" href="https://findbashar.com/">Bashar</a></span>

      </div>
    
	
  </section>

  

  

  

  

  

  

 

  

  

  

		
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
