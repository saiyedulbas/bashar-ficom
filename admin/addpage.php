<?php

require_once('connection.php');
session_start();
if(!isset($_SESSION['log'])){
	header('location:login.php');
	die();
}
$put = $_SESSION['email'];
	 $muery = mysqli_query($connection,"SELECT * FROM user WHERE email = '$put'");
	 $take = mysqli_fetch_assoc($muery);
	 
	 
	 if(isset($_POST['addpage'])){
	$pagetitle = isset($_POST['pagetitle'])?$_POST['pagetitle']:'Empty Title';
	$pagecontent = $_POST['pagecontent'];
	$rand = rand(1,100).rand(1,100);
	$url = "?page=".$rand;
	$query = mysqli_query($connection,"INSERT INTO pages (pagetitle,pagecontent,url,pageid,frontpage,oldurl) VALUES ('$pagetitle','$pagecontent','$url','$rand','$rand','$url')");
	if(isset($query)){
		$success = "Page has been created";
		header('location:edit.php'.$url);
	}
	
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New Page</title>
	<link rel="icon" href="../favicon.ico" type="image/png" sizes="16x16">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body id="page-top">
	<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <?php 
if($take['status'] == 1){?>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
		
        <div class="sidebar-brand-text mx-3">Super Admin</div>
      </a>
<?php }
else{?>
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
		
        <div class="sidebar-brand-text mx-3">Sub Admin</div>
      </a>
<?php }
?>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span><?php echo $take['firstname']?></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     

      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="addpage.php">Add New Page</a>
            <a class="collapse-item" href="allpages.php">All Pages</a>
            <a class="collapse-item" href="frontpage.php">Select your front page</a>
            
            
            <a class="collapse-item" href="themeoption.php">Theme Option</a>
            <a class="collapse-item" href="interested.php">Interested People</a>
            <a class="collapse-item" href="registered_people.php">Registered People</a>
            <a class="collapse-item" href="reported_user.php">reported users</a>
			<a class="collapse-item" href="sent_messages.php">Sent Messages</a>
			<a class="collapse-item" href="user_messages.php">User Messages</a>
			<a class="collapse-item" href="send_mail.php">Send Mail</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      

      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          Welcome to the Admin Panel 
<button style="margin-left:20px" class="btn btn-danger">For any query, just contact Bashar at 01834663387 or see the documentation & site tour</button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $take['firstname']." ".$take['lastname'] ?> </span>
                <img class="img-profile rounded-circle" src="images/bashar_real.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         

          <!-- Content Row -->
          

          <!-- Content Row -->

         

            <!-- Area Chuygklujhart -->
       Add New Page
            <!-- Pie Chart -->
			<form action="" method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Pagetitle</label>
    <input type="text" class="form-control" name="pagetitle" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
    
  </div>
  <div class="form-group">
    <label for="pagecontent">Pagecontent</label>
    <textarea name="pagecontent" id="pagecontent" class="form-control" placeholder="content" cols="30" rows="10">Page contents will be written here.</textarea>
  </div>
  
  
  
  
  
  <button type="submit" name="addpage" class="btn btn-primary">Submit</button>
</form>
       <?php 
	 if(isset($success)){
		 echo $success;
	 }
	 ?>     
          

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            

            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; All rights reserved by <a style="color:blue" target="_blank" href="https://findbashar.com/">Bashar</a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
	<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#pagecontent', theme:'modern', skin:'lightgray'  });</script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>