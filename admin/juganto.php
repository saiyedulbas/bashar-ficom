<?php 
require_once('connection.php');
if(isset($_POST['dekhi'])){
	$jhinga = mysqli_query($connection,"SELECT * FROM popup WHERE approval = 'make it approve'");
	$ladu = mysqli_num_rows($jhinga);
	echo '<p class="raki btn btn-primary">'.$ladu.' People unapproved'.'</p>'."<br>";
	while($jadu = mysqli_fetch_assoc($jhinga)){
		echo '<p class="dekhi btn btn-primary">'.'Firstname: '.$jadu['firstname'].' | '.'email: '.$jadu['email'].'</p>'."<br>";
	}
}
?>