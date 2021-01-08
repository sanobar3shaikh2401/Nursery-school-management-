<?php
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="";
	if(isset($_GET["id"]))
	{
		if(isset($_GET["id"]))
		$sql="select * from HW where ID=".$_GET["id"];
	
	else
		$sql="select * from HW";
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["id"]=$rw[0];
				$data["Date"]=$rw[1];
				$data["Homework"]=$rw[2];
				$data["Teacherid"]=$rw[3];
				$data["Subject"]=$rw[5];
					$data["Class"]=$rw[6];
				array_push($response,$data);
			}
			echo Json_encode($response);
			
	}
	else{
		echo mysqli_error($con);
		echo "No data found";
	}
	}
	else if(isset($_GET["classtype"]))
	{
		$sql="select * from HW where Class='".$_GET["classtype"]."'";
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["id"]=$rw[0];
				$data["Date"]=$rw[1];
				$data["Homework"]=$rw[2];
				$data["Teacherid"]=$rw[3];
				$data["Subject"]=$rw[5];
					$data["Class"]=$rw[6];
				array_push($response,$data);
			}
			echo Json_encode($response);
			
	}
	else{
		
		echo "No data found";
	}
	}
	else
	{
		
			$sql="select * from HW";
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["id"]=$rw[0];
				$data["Date"]=$rw[1];
				$data["Homework"]=$rw[2];
				$data["Teacherid"]=$rw[3];
				$data["Subject"]=$rw[5];
					$data["Class"]=$rw[6];
				array_push($response,$data);
			}
			echo Json_encode($response);
			
	}
	else{
		
		echo "No data found";
	}
	}
	
?>
