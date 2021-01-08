<?php
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="";
	if(isset($_GET["id"]))
		$sql="select * from Teacher where ID=".$_GET["id"];
	else
		$sql="select * from Teacher";
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["ID"]=$rw[0];
				$data["Name"]=$rw[1];
				$data["Address"]=$rw[2];
				$data["Phone_no"]=$rw[3];
				$data["Email"]=$rw[4];
				$data["Username"]=$rw[5];
				$data["Password"]=$rw[6];
				array_push($response,$data);
			}
			echo Json_encode($response);
			
	}
	else{
		echo mysqli_error($con);
		echo "No data found";
	}
?>
