<?php
if(isset($_GET["btn"])){
	$rn=$_GET["rn"];
	$nm=$_GET["nm"];
	$add=$_GET["add"];
	$mob=$_GET["mob"];
	$class=$_GET["class"];
	$email=$_GET["email"];
	$doa=$_GET["doa"];

	$con = mysqli_connect("localhost","root","","NSM");
	$sql="insert into student(Name,Address,Phone_no,Class,Email,DOA) values('$nm','$add','$mob','$class','$email','$doa')";
	if(mysqli_query($con,$sql)){
		echo "Data Inserted";
	}
	else{
		echo mysqli_error($con);
	}
}

?>
