<?php
	
	$name=$_GET["Name"];
	$sdate=$_GET["Startdate"];
	$edate=$_GET["Enddate"];
	$des=$_GET["Description"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="insert into Event(Name,Startdate,Enddate,Description) values('$name','$sdate','$edate','$des')";
	if(mysqli_query($con,$sql)){
		$data["msg"]= "Data Inserted";
	}
	else{
		$data["msg"]= "Data Not Inserted";
	}
	array_push($response,$data);
	echo json_encode($response);
?>
