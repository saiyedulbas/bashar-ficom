<?php 
require_once('connection.php');
$dist = mysqli_query($connection,"SELECT * FROM theme");
$chitaa = mysqli_fetch_assoc($dist);
?>
<?php 
		$nana = mysqli_query($connection,"SELECT * FROM image");
		$nanana = mysqli_fetch_assoc($nana);
		
		?>
<?php 
session_start();
if(isset($_SESSION['log'])){
	header('location:index.php');
	die();
}
require_once('connection.php');
if(isset($_POST['login'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$boro = mysqli_query($connection,"SELECT * FROM user WHERE email = '$email'");
	$mina = mysqli_fetch_assoc($boro);
	if($password == $mina['password'] && $email !=NULL && $password != NULL){
		$_SESSION['log'] = 'login';
		$_SESSION['email'] = $email;
		header('location:index.php');
	}
	else{
	    $chita = 'email or password is invalid';	
	}
	
	
	
	
	
	
	
	
}

?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Admin Log in</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="../favicon.ico" type="image/png" sizes="16x16">
  <!-- Custom fonts for this template -->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link rel="stylesheet" href="jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<style type="text/css">
 header.masthead{
	 background-image: url(<?php echo 'images/'.$nanana['image']; ?>);
 }
 
 
 </style>
</head>
<body id="page-top">

	

  <!-- Navigation -->
 
<?php 
	 $nitai = mysqli_query($connection,"SELECT * FROM theme ");
	 $now = mysqli_fetch_assoc($nitai);
	 
	 ?>
  <!-- Header -->
  
  
  

  <!-- Services -->
  <section class="bg-light page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Admin Log in</h2>
          
        </div>
      </div>
      
	  
	  
	  
        
          <form action="" method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" required>
    
  </div>
  <div class="form-group">
    <label class="btn btn-primary" for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Enter Password" required>
  </div>
  
  
  
  
  
  <button type="submit" name="login" class="btn btn-primary popsubmit">Submit</button>
</form>
<br><br>

	<?php 
	if(isset($chita)){ ?>
	    <p class="btn btn-danger" style="display:block">
	        <?php 
	    echo $chita;
	    ?>
	    </p>
	<?php	
	}
	
	?>
	
        
        <div class="card" style="float:left">
  <div class="card-header">
  <button class="btn btn-success">Demo Credentials for super admin</button>
    
  </div>
  <div class="card-body">
  email: smuhammad457@gmail.com<br>
  password: 123456
	
  </div>
</div>
<div class="card">
  <div class="card-header">
  <button class="btn btn-success">Demo Credentials for sub admin</button>
    
  </div>
  <div class="card-body">
  email: jahid@gmail.com<br>
  password: 12345678
	
  </div>
</div>
<br><br>
        <span style="margin-left:35%" class="copyright">Copyright &copy; All rights reserved by  <a style="color:blue" target="_blank" href="https://findbashar.com/">Bashar</a></span>
      </div>
    
	
  </section>
  
  

  

  

  

  

  

  

 

  

  

  

		
  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-1.10.1.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
<script src="jquery-ui.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
 
 

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
  

  
  
  
  <script type="text/javascript" src="token.js"></script>
  
          <script type="text/javascript" src="alu.js"></script>
</body>
	
	
	
	
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>