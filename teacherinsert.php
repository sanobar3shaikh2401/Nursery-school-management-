	<?php
	
	$nm=$_GET["nm"];
	$add=$_GET["add"];
	$mob=$_GET["mob"];
	$email=$_GET["email"];
	$unm=$_GET["unm"];
	$pw=$_GET["pw"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="insert into Teacher(Name,Address,Phone_no,Email,Username,Password) values('$nm','$add','$mob','$email','$unm','$pw')";
	if(mysqli_query($con,$sql)){
		$data["msg"]= "Data Inserted";
	}
	else{
		$data["msg"]= "Data Not Inserted";
	}
	array_push($response,$data);
	echo json_encode($response);
?>
