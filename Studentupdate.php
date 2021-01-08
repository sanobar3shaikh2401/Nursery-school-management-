<?php
	
	$rn=$_GET["rn"];
	$nm=$_GET["nm"];
	$add=$_GET["add"];
	$mob=$_GET["mob"];
	$class=$_GET["class"];
	$email=$_GET["email"];
	$doa=$_GET["doa"];
	$response=array();
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="update student set Name='$nm',Address='$add',Phone_no=$mob,Class='$class',Email='$email',DOA=$doa where Rollno=$rn";
	if(mysqli_query($con,$sql)){
		$data["msg"]="Updated";
	}
	else{
		$data["msg"]="Not Updated";
	}
	array_push($response,$data);
	echo json_encode($response);
?>
