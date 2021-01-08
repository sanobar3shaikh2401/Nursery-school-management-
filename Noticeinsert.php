<?php
	
	$date=$_GET["date"];
	$sub=$_GET["sub"];
	$des=$_GET["des"];
	$class=$_GET["class"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="insert into Notice(Date,Subject,Description,Class) values('$date','$sub','$des','$class')";
	if(mysqli_query($con,$sql)){
		$data["msg"]= "Data Inserted";
	}
	else{
		$data["msg"]= mysqli_error($con);
	}
	array_push($response,$data);
	echo json_encode($response);
?>
