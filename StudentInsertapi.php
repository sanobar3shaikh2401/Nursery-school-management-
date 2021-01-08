<?php
	
	$nm=$_GET["nm"];
	$add=$_GET["add"];
	$mob=$_GET["mob"];
	$class=$_GET["class"];
	$email=$_GET["email"];
	$doa=$_GET["doa"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="insert into student(Name,Address,Phone_no,Class,Email,DOA) values('$nm','$add','$mob','$class','$email','$doa')";
	if(mysqli_query($con,$sql)){
		$data["msg"]= "Data Inserted";
	}
	else{
		$data["msg"]= "Data Not Inserted";
	}
	array_push($response,$data);
	echo json_encode($response);
?>
