<?php
	$rn=$_GET["rn"];
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="delete from student where Rollno=$rn";
	$response = array();
	if(mysqli_query($con,$sql)){
		$data["msg"]="success";
	}
	else{
		$data["msg"]="error";
	}
	array_push($response,$data);
	echo json_encode($response);
?>
