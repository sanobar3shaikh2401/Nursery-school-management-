<?php
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="";
	if(isset($_GET["id"]))
		$sql="select * from Event where Id=".$_GET["id"];
	else
		$sql="select * from Event";
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["id"]=$rw[0];
				$data["Name"]=$rw[1];
				$data["Startdate"]=$rw[2];
				$data["Enddate"]=$rw[3];
				$data["Decription"]=$rw[4];
				array_push($response,$data);
			}
			echo Json_encode($response);
			
	}
	else{
		echo mysqli_error($con);
		echo "No data found";
	}
?>
