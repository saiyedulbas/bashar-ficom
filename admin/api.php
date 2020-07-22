<?php 
header('content-type:application/json');
$request = $_SERVER['REQUEST_METHOD'];
switch($request){
	case 'GET' :
	amazing();
	break;
	case 'POST' :
	$data = json_decode(file_get_contents('php://input'),true);
	keno($data);
	break;
	case 'PUT' :
	echo '{"name":"hum"}';
	break;
	case 'PATCH' :
	echo '{"name":"hum"}';
	break;
	case 'DELETE' :
	echo '{"name":"hum"}';
	break;
	default :
	echo '{"name":"hum"}';
    break;	
}
function amazing(){
	require_once('connection.php');
	$query = mysqli_query($connection,"SELECT * FROM user");
	while($hum = mysqli_fetch_assoc($query)){?>
	<?php echo json_encode($hum); ?>
	<?php
		
	}
	
	
	
	
}
function keno($data){
	require_once('connection.php');
	$firstname = $data['firstname'];
	$lastname = $data['lastname'];
	$email = $data['email'];
	$password = $data['password'];
	$query = mysqli_query($connection,"INSERT INTO user(firstname,lastname,email,password,status) VALUES('$firstname','$lastname','$email','$password','3')");
	if($query){
		echo 'success';
	}
	else{
		echo 'not success';
	}
}
?>

