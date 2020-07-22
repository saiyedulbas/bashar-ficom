<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['log'])){
	header('location:login.php');
	die();
}

		   if(isset($_POST['non'])){
	       $bina = mysqli_query($connection,"DELETE FROM popup WHERE id= 1");
	       
	
	
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>All Pages</title>
	<link rel="stylesheet" href="jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="totalwrap">
	<div class="left">
	  <a class="element" href="addpage.php">Add New Page</a>
	  <a class="element" href="allpages.php">All Pages</a>
	  <a class="element" href="frontpage.php">Select your front page</a>
	   <a class="element" href="themeoption.php">Theme Option</a>
	   <a class="element" href="interested.php">Interested People</a>
	   <a class="element" href="registered_people.php">Registered People</a>
	   <a class="element" href="reporteduser.php">Reported User</a>
	</div>
	<div class="right">
	 <a class="mina" href="logout.php">logout</a>
	 <form class="pad" action="" method="POST">
	 <label class="tree" for="search">Search:</label>
	 <input type="search" id="real" />
	 <a class="dish" style="float:right;" href="#">Unapproved People</a>
	 </form>
	 <div class="kata"></div>
	 <?php 
	 $shing = mysqli_query($connection,"SELECT COUNT(email) AS total FROM popup");
	 
	 
	 
	 $shing2 = mysqli_fetch_assoc($shing);
	 ?>
	 <p dida = "<?php echo $shing2['total'];?>" class="front judge">No. of interested people: <?php echo $shing2['total'];?></p>
	 
	 
	 
	 <div class="chamar">
	  
	 <table  width="100%" border="1">
	 <tr>
	 <th width="20%">first name</th>
	 <th width="20%">last name</th>
	 <th width="20%">Delete</th>
	 <th width="20%">Approval</th>
	 <th width="20%">Additional Info</th>
	</tr>
	       <?php 
		     $hmm = mysqli_query($connection,"SELECT * FROM popup");
			 
			 while($hmm2 = mysqli_fetch_assoc($hmm)){?>
				 <tr>
				 <form action="" method="POST">
				 <td><?php echo $hmm2['firstname'];?></td>
				 <td><?php echo $hmm2['email'];?></td>
				 <input type="hidden" class="take" name="nara" value="<?php echo $hmm2['id']; ?>" />
				 <td><input type="submit" class="chak" lula="<?php echo $hmm2['id']; ?>"  name="name" value="delete" /></td>
				  
				 </form>
				 <td>
				 <form action="" method="POST">
				    <input type="submit" class="demo" mimo="<?php echo $hmm2['id']; ?>" value="<?php echo $hmm2['approval']; ?>"/>
				 </form>
				 </td>
				 <td>
				 
				    <input type="submit" class="info" imo="<?php echo $hmm2['id']; ?>" value="More info"/>
				 
				 </td>
				 
				 </tr>
			<?php }
			 
			 
		   ?>
		   </table>
		   </div>
		   
		   
		   
		   
		   
		   <div class="last" style="display:none" >
		   <p class="dekhi">do you want to execute this?</p>
		   </div>
		  
		   

		   <div class="zinda" style="display:none" title="Alert">
				  
		   <form action="" method="POST">
		   Do you want remove it?<br><br><br><br>
		   
		   </form>
	 </div>
	 
	 <div class="ultra" style="display:none">
	       <p class="dekhi" >Do you really want to do it?</p>
	 </div>
	 
	 <div class="roo" style="display:none" >
	 
	      <input type="submit" value="submit" />
	 </div>
	 
	 <div class="unapprove" style="display:none">
	 
	 </div>
	  
	  
	 
	 
	 
	</div>
	</div>
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="bado.js"></script>
</body>
</html>