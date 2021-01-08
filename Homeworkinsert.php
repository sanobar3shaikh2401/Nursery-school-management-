<?php
	
	$date=$_GET["Date"];
	$homework=$_GET["Homework"];
	$tid=$_GET["Teacherid"];
	$sub=$_GET["Subject"];
	$class=$_GET["Class"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="insert into HW(Date,Homework,Teacherid,Subject,Class) values('$date','$homework','$tid','$sub','$class')";
	if(mysqli_query($con,$sql)){
		$data["msg"]= "Data Inserted";
	}
	else{
		$data["msg"]= "Data Not Inserted";
	}
	array_push($response,$data);
	echo json_encode($response);
?>
