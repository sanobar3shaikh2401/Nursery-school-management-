<?php
	
	$id=$_GET["id"];
	$nm=$_GET["nm"];
	$add=$_GET["add"];
	$mob=$_GET["mob"];
	$email=$_GET["email"];
	$unm=$_GET["unm"];
	$pw=$_GET["pw"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="update Teacher set Name='$nm',Address='$add',Phone_no=$mob,Email='$email',Username='$unm',Password='$pw' where ID=$id";
	if(mysqli_query($con,$sql)){
		$data["msg"]="Updated";
	}
	else{
		$data["msg"]="Not Updated";
	}
array_push($response,$data);
	echo json_encode($response);
?>
