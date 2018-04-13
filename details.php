<?php
	$con= mysqli_connect('localhost','root','');

	if(!$con)
	{
		echo 'Not Connected To Server';
	}

	if(!mysqli_select_db($con,'website'))
	{
		echo 'Database Not Selected';
	}

	$hname=$_POST['hospital'];
	$drname=$_POST['doctorname'];
	$location=$_POST['location'];
	$prescription=$_POST['prescription'];


	$sql="INSERT INTO details (hospital,doctorname,location,prescription) VALUES ('$hname','$drname','$location','$prescription')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		
		header("refresh:0;url=thanku.html");
	}

?>
