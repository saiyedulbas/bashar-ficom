<?php
require_once('../admin/connection.php');
session_start();
if(!isset($_SESSION['login'])){
	header('location:../login.php');
	die();
}
$put = $_SESSION['email'];
$put2 = $_SESSION['firstname'];
	 $query = mysqli_query($connection,"SELECT * FROM chat WHERE email = '$put'");
	 $take = mysqli_fetch_assoc($query);

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sent Files</title>
	<link rel="icon" href="../favicon.ico" type="image/png" sizes="16x16">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="jquery-ui.min.css" media="all" />
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<style type="text/css">
	.ui-draggable .ui-dialog-titlebar{
		display:block
	}
	</style>
</head>
<body id="page-top">
	<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $take['firstname']; ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span><?php echo $take['firstname']; ?></span></a>
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
            
            <a class="collapse-item" href="index.php">My profile</a>
            <a class="collapse-item" href="groupchat.php">Group chat</a>
            <a class="collapse-item" href="userinfo.php">User Info</a>
            
            
            <a class="collapse-item" href="sendmessage.php">Send Message</a>
            <a class="collapse-item" href="inbox.php">Inbox</a>
            <a class="collapse-item" href="livechat.php">Private Chat</a>
            <a class="collapse-item" href="file_send.php">Send File</a>
            <a class="collapse-item" href="files.php">Received Files</a>
			<a class="collapse-item" href="sent.php">Sent files</a>
			<a class="collapse-item" href="contact_admin.php">Contact with admin</a>
			<a class="collapse-item" href="admin_sent.php">Sent to admin</a>
			<a class="collapse-item" href="report.php">Report Users</a>
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
          Welcome <?php echo $take['firstname']; ?>
<button style="margin-left:20px" class="btn btn-danger">For any query, just contact Bashar at 01834663387 or see the documentation & site tour</button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>
<li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle bell" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <?php 
				if($take['usernotification'] == 5){?>
					<span class="badge badge-danger badge-counter dish">1</span>
				<?php }
				?>
              </a>
              <!-- Dropdown - Alerts -->
              
            </li>
			<li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle adminbell" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
				<?php 
				if($take['notification'] == 5){?>
					<span class="badge badge-danger badge-counter bish">1</span>
				<?php }
				?>
                
              </a>
              <!-- Dropdown - Alerts -->
              
                
                
                
                
                
              
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $take['firstname']." ".$take['lastname'] ?> </span>
                <img class="img-profile rounded-circle" src="../images/<?php echo $take['photo']; ?>">
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

          <div class="row">

            <!-- Area Chuygklujhart -->
       Welcome <?php echo $take['firstname']; ?>. Manage your application. Files that you have sent to other users. Download the files and enjoy.
            <!-- Pie Chart -->
            
          </div>

         Sent Files and images:
		 <?php 
$let = mysqli_query($connection,"SELECT * FROM file WHERE senderemail = '$put2'");
while($jinish = mysqli_fetch_assoc($let)){?>
	<div class="card" style="width: 25rem; height:300px; text-align:center;margin-left: 33%;
margin-top: 20px;">
<?php 
$file = $jinish['senderfile'];
$ext = pathinfo($file, PATHINFO_EXTENSION);
if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'PNG' ){?>
<a href="images/<?php echo $jinish['senderfile']; ?>" download>
  <img src="images/<?php echo $jinish['senderfile']; ?>" title="<?php echo $jinish['senderfile']; ?>" alt="<?php echo $jinish['senderfile']; ?>" width="104" height="142">
</a>
	
<?php }
else{?>
	<a href="images/<?php echo $jinish['senderfile']; ?>" download>
  <h2 class="btn btn-danger"><?php echo $jinish['senderfile']; ?></h2>
</a>
<?php }



?>
  
  
  <div class="card-body">
    <h5 class="card-title btn btn-primary">Sent to <?php echo $jinish['receiveremail']?></h5>
    <h5 class="card-title btn btn-success"><?php echo $jinish['created_at']?></h5>
  </div>
 
  
</div>
<?php }
?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<div class="batti" style="display:none">
	
	</div>
	<div class="katti" style="display:none">
	
	
	</div>
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
<script src="jquery-ui.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  
	 <script
			  src="https://rawgit.com/jasonday/jQuery-UI-Dialog-extended/master/jquery.dialogOptions.js"
			  
			  
			  ></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script5.js"></script>
</body>
</html>