<?php 
require_once('admin/connection.php');

?>


   <?php 
   if(isset($_POST['jib'])){
	   $zib = $_POST['jab'];
	   $query = mysqli_query($connection,"SELECT * FROM popup WHERE email = '$zib'");
	   $que = mysqli_fetch_assoc($query);
	   $lab = $que['token'];
	   if($lab == 0){
		   echo 'you do not have any access token';
	   }
	   else{
		   echo 'Your access token is: '.$lab;
	   }
	  exit(); 
   }
   ?>
  
        
        
        
        

