<?php
	$id=$_GET["id"];	
	$date=$_GET["date"];
	$hw=$_GET["hw"];
    $tid=$_GET["tid"];
	$sub=$_GET["sub"];
	$class=$_GET["class"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="update HW set  Date='$date',Homework='$hw',Teacherid='$tid',Subject='$sub',Class='$class' where ID='$id'";
	if(mysqli_query($con,$sql)){
		$data["msg"]="Updated";
	}
	else{
		$data["msg"]="Not Updated";
	}
array_push($response,$data);
	echo json_encode($response);
?>