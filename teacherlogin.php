<?php
	$con = mysqli_connect("localhost","root","","NSM");

	
	if(isset($_GET["unm"]&&$_GET["pswd"]))
	$sql="select * from Teacher where Username='$unm' and Password='$pswd'";
	
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)==1)
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
