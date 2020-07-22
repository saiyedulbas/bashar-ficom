<?php 
require_once('connection.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>take</title>
</head>
<body>
	
	<?php 
	if(isset($_POST['bing'])){?>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">first name</th>
      <th scope="col">Email</th>
      <th scope="col">Delete</th>
      <th scope="col">Approval</th>
      <th scope="col">Additional Info</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		     $hmm = mysqli_query($connection,"SELECT * FROM popup");
			 
			 while($hmm2 = mysqli_fetch_assoc($hmm)){?>
				 <tr>
				 <form action="" method="POST">
				 <th scope="row"><?php echo $hmm2['firstname'];?></th>
				 <td><?php echo $hmm2['email'];?></td>
				 <input type="hidden" class="take" name="nara" value="<?php echo $hmm2['id']; ?>" />
				 <td><input type="submit" class="btn btn-primary chak" lula="<?php echo $hmm2['id']; ?>"  name="name" value="delete" /></td>
				  
				 </form>
				 <?php 
				 if($hmm2['approval'] == 'approved'){?>
					 <td>
				 
				 <?php echo $hmm2['approval'] ?>
				    
				 
				 </td>
				 <?php }
				 else{?>
				 <td>
				 <form action="" method="POST">
				    <input type="submit" class="btn btn-primary demo" mimo="<?php echo $hmm2['id']; ?>" value="<?php echo $hmm2['approval']; ?>"/>
				 </form>
				 
				 </td>
					 
				 <?php }
				 ?>
				 <td>
				 
				    <input type="submit" class="info btn btn-primary" imo="<?php echo $hmm2['id']; ?>" value="More info"/>
				 
				 </td>
				 
				 </tr>
			<?php }
			 
			 
		   ?>
    
	
  </tbody>
</table>
	<?php }
	?>
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script
			  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
			  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
			  crossorigin="anonymous"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#pagecontent' });</script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>