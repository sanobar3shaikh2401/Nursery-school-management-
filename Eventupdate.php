<?php
	$id=$_GET["id"];	
	$Name=$_GET["Name"];
	$Sdate=$_GET["Sdate"];
    $Edate=$_GET["Edate"];
	 $Des=$_GET["Des"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="update Event set  Name='$Name',Startdate='$Sdate',Enddate='$Edate',Description='$Des' where Id='$id'";
	if(mysqli_query($con,$sql)){
		$data["msg"]="Updated";
	}
	else{
		$data["msg"]="Not Updated";
	}
array_push($response,$data);
	echo json_encode($response);
?>