<?php
	$con = mysqli_connect("localhost","root","","NSM");
	$sql="";
	if(isset($_GET["roll"]))
	{
		$sql="select * from student where Rollno=".$_GET["roll"];
		$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["Rollno"]=$rw[0];
				$data["Name"]=$rw[1];
				$data["Address"]=$rw[2];
				$data["Phone_no"]=$rw[3];
				$data["Class"]=$rw[4];
				$data["Email"]=$rw[5];
				$data["DOA"]=$rw[6];
				array_push($response,$data);
			}
			echo Json_encode($response);
			
	}
	else{
		
		echo "No data found";
	}
	}
	else if(isset($_GET["classtype"]))
	{
		$sql="select * from student where Class='".$_GET["classtype"]."'";
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["Rollno"]=$rw[0];
				$data["Name"]=$rw[1];
				$data["Address"]=$rw[2];
				$data["Phone_no"]=$rw[3];
				$data["Class"]=$rw[4];
				$data["Email"]=$rw[5];
				$data["DOA"]=$rw[6];
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
		
			$sql="select * from student";
	$response=array();
	$rs=mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
			while($rw=mysqli_fetch_row($rs))
			{
				$data["Rollno"]=$rw[0];
				$data["Name"]=$rw[1];
				$data["Address"]=$rw[2];
				$data["Phone_no"]=$rw[3];
				$data["Class"]=$rw[4];
				$data["Email"]=$rw[5];
				$data["DOA"]=$rw[6];
				array_push($response,$data);
			}
			echo Json_encode($response);
			
	}
	else{
		
		echo "No data found";
	}
	}
?>
