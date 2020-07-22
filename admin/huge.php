<?php 
require_once('connection.php');
if(isset($_POST['beg'])){
	$aman = $_POST['be'];
	$am = mysqli_query($connection,"SELECT * FROM chat WHERE id = '$aman'");
	$zak = mysqli_fetch_assoc($am);
	echo '<p class="dekhi btn btn-primary">First Name : '.$zak['firstname'].'</p>';
	echo '<p class="dekhi btn btn-primary">Last Name : '.$zak['lastname'].'</p>';
	echo '<p class="dekhi btn btn-primary">Email : '.$zak['email'].'</p>';
	echo '<p class="dekhi btn btn-primary">Password : '.$zak['password'].'</p>';
	echo '<p class="dekhi btn btn-primary">Date of Birth : '.$zak['date'].'</p>';
	echo '<p class="dekhi btn btn-primary">Token No. : '.$zak['token'].'</p>';
}
?>