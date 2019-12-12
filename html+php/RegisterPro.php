<?php

$con = mysqli_connect("localhost", "root", "12345678", "database");

if(mysqli_connect_errno($con))
	die('connection error!!!'.mysqli_error());

if(isset($_POST['ProDiscription']) && isset($_POST['ProSimpleInput']) && isset($_POST['ProSimpleOut']) && isset($_POST['ProMaxMemory']) && isset($_POST['ProMaxTime']) && isset($_POST['ProHint']) && isset($_POST['ProTotalSubmit']) && isset($_POST['ProAuthor']) && isset($_POST['Name']))
	$ProDiscription = $_POST['ProDiscription'];	//text
	$ProSimpleInput = $_POST['ProSimpleInput'];	//text
	$ProSimpleOut = $_POST['ProSimpleOut'];		//text
	$ProMaxMemory = $_POST['ProMaxMemory'];		//int10
	$ProMaxTime = $_POST['ProMaxTime'];			//int10
	$ProHint = $_POST['ProHint'];				//text
	$ProTotalSubmit = $_POST['ProTotalSubmit'];	//int10
	$ProAuthor = $_POST['ProAuthor'];			//varchar255
	$Name = $_POST['Name'];						//varchar255
	$sql = "SELECT * FROM problem";
	$result = $con->query($sql);
	$row = mysqli_fetch_array($sql,MYSQLI_NUM);
	$add = mysqli_query($con, "INSERT INTO `problem`(`ID`,`ProListID`,`ProDiscription`, `ProSimpleInput`, `ProSimpleOut`, `ProMaxMemory`, `ProMaxTime`, `ProHint`, `ProTotalSubmit`, `ProAuthor`, `Name`) VALUES ($result->num_rows+1,1,'$ProDiscription','$ProSimpleInput','$ProSimpleOut','$ProMaxMemory','$ProMaxTime','$ProHint','$ProTotalSubmit','$ProAuthor','$Name')");
	if($add)
		echo "successfull";
	else
		echo "fail!!";
?>