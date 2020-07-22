<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['log'])){
	header('location:login.php');
	die();
}

		   

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Registered people</title>
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
	 <input type="search" id="jaguar" />
	 <div class="mim">
	 <a href="#" class="good">Good Users</a>
	 <a href="#" class="bad">Bad Users</a>
	 </div>
	 </form>
	 <?php 
	 $shing = mysqli_query($connection,"SELECT COUNT(email) AS total FROM chat");
	 
	 
	 
	 $shing2 = mysqli_fetch_assoc($shing);
	 ?>
	 <p dida = "<?php echo $shing2['total'];?>" class="front judge">No. of registered people: <?php echo $shing2['total'];?></p>
	 
	 
	 
	<div id="bagor">
	  
	 <table  width="100%" border="1">
	 <tr>
	 <th width="20%">first name</th>
	 <th width="20%">last name</th>
	 <th width="20%">Photo</th>
	 <th width="20%">Comment</th>
	 <th width="20%">Send Message</th>
	 
	 
	 
	 
	 </tr>
	
	       <?php 
		     $hmm = mysqli_query($connection,"SELECT * FROM chat");
			 
			 while($hmm2 = mysqli_fetch_assoc($hmm)){?>
				 <tr>
				 
				 <td><a jeb=<?php echo $hmm2['id']; ?> class="ashol" href="#"><?php echo $hmm2['firstname'];?></a></td>
				 <td><?php echo $hmm2['lastname'];?></td>
				 
				 
				 <td><img style="width:100px;height:100px" src="../images/<?php echo $hmm2['photo']; ?>"  /></td>
				  
				 <td><?php echo $hmm2['comment']; ?></td>
				 
				 <td><a href="#" sata="<?php echo $hmm2['id']; ?>" class="adminto">Send Message</a></td>
				 
				 </tr>
			<?php }
			 
			 
		   ?>
		   </table>
		   </div>
	 
	 </div>
	</div>
	<div class="dona" style="display:none">
	
	</div>
	<div class="bona" style="display:none">
	
	</div>
	
	<div class="ekhon" style="display:none">
	
	</div>
	<div class="si">
	
	</div>
	<div class="bon"></div>
	<div class="hada" style="display:none">
	<input type="text" class="fromad" />
	</div>
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="rat.js"></script>
  <script type="text/javascript" src="mat.js"></script>
</body>
</html>