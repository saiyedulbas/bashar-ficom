<?php 
require_once('connection.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>nid</title>
</head>
<body>
	<?php 
	if(isset($_POST['bi'])){
		$jamma = $_POST['jabal'];
		$record = mysqli_query($connection,"UPDATE chat SET comment = 'bad user' WHERE id = '$jamma'");
		?>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">Photo</th>
      <th scope="col">Comments</th>
      <th scope="col">Send Message</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		     $hmm = mysqli_query($connection,"SELECT * FROM chat");
			 
			 while($hmm2 = mysqli_fetch_assoc($hmm)){?>
				 <tr>
				 <th scope="row"><a jeb=<?php echo $hmm2['id']; ?> class="ashol btn btn-primary" href="#"><?php echo $hmm2['firstname'];?></a></th>
				 <td><?php echo $hmm2['lastname'];?></td>
				 <td><img style="width:100px;height:100px" src="../images/<?php echo $hmm2['photo']; ?>"  /></td>
				 <td><?php echo $hmm2['comment']; ?></td>
				 <td><a href="#" sata="<?php echo $hmm2['id']; ?>" class="adminto btn btn-primary">Send Message</a></td>
				 </tr>
			<?php }
			 
			 
		   ?>
    
	
  </tbody>
</table>
		
<?php	}
	?>
	
	
	
	
	
	
	
	
	<script src="jquery-1.10.1.js"></script>
  
  
			 <script src="jquery-ui.min.js"></script>
  
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="rat.js"></script>
  <script type="text/javascript" src="mat.js"></script>
</body>
</html>