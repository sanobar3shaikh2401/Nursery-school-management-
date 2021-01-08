<?php
	$id=$_GET["id"];	
	$date=$_GET["date"];
	$sub=$_GET["sub"];
	$des=$_GET["des"];
	$class=$_GET["class"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="update Notice set Date='$date',Subject='$sub',Description='$des',Class='$class' where id='$id'";
	if(mysqli_query($con,$sql)){
		$data["msg"]="Updated";
	}
	else{
		$data["msg"]="Not Updated";
	}
array_push($response,$data);
	echo json_encode($response);
?>