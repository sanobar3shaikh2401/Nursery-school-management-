<?php
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="";
	if(isset($_GET["id"]))
		$sql="select * from Notice where ID=".$_GET["id"];
	else
		$sql="select * from Notice";
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["id"]=$rw[0];
				$data["Date"]=$rw[1];
				$data["Subject"]=$rw[2];
				$data["Description"]=$rw[3];
				$data["Class"]=$rw[4];
				array_push($response,$data);
			}
			echo Json_encode($response);
			
	}
	else{
		echo mysqli_error($con);
		echo "No data found";
	}
?>
