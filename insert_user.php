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

	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$contactnumber=$_POST['Contactnumber'];
	$password=$_POST['Password'];
	$address=$_POST['Address'];

	$sql="INSERT INTO users (firstname,lastname,number,password,address) VALUES ('$fname','$lname','$contactnumber','$password','$address')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
		header("refresh:2;url=index2.html");
	}

?>
