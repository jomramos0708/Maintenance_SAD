<?php
	$dbname = "bremsdb";
	$con = mysqli_connect("localhost","root","",$dbname);
	if(mysqli_connect_errno())
	{
		die("connection failed " . mysqli_connect_errno());
	}
	else
		echo "";
	
?>