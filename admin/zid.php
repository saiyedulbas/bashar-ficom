<?php 
require_once('connection.php');
if(isset($_POST['numb'])){
	$gal = $_POST['rek'];
	$sib = mysqli_query($connection,"DELETE FROM  chat WHERE id = '$gal'");
	
}
?>