<?php
	$id=$_GET["id"];
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="delete from Event where Id='$id'";
	$response = array();
	if(mysqli_query($con,$sql)){
		$data["msg"]="Deleted";
	}
	else{
		$data["msg"]="error";
	}
	array_push($response,$data);
	echo json_encode($response);
?>
