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

  <title>Access Token</title>
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
  <section class="bg-light page-section" style="height:1000px;" id="services">
    <div class="container">
      <div class="row" style="margin-top:81px">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Access token</h2>
          <h3 class="section-subheading text-muted">Collect Your access token</h3>
        </div>
      </div>
      <div class="row text-center">
        
          <button type="button" style="margin-left:42%;" class="btn btn-success to" >Get Your access token</button>
        
        
        
      </div>
	  <br><br><br><br><br><br><br><br><br>
	  <span style="margin-left:35%" class="copyright">Copyright &copy; All rights reserved by  <a style="color:blue" target="_blank" href="https://findbashar.com/">Bashar</a></span>
    </div>
  </section>

  
<div class="access" style="display:none">
		
		   <label for="email">Type your email</label>
		   <input type="email" class="form-control tokenemail"  />
		   
		</div>
  

  

  <div class="grant" style="display:none" >
		       
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
  <script type="text/javascript">
		  $(function(){
   var url = window.location.href;
   var page = url.substr(url.lastIndexOf('/')+1);
   $('.cemenu a[href*="'+page+'"]').addClass('active');
});
		  </script>
</body>

</html>
