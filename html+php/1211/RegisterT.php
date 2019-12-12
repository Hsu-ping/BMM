<?php

$con = mysqli_connect("localhost", "root", "12345678", "database");

if(mysqli_connect_errno($con))
	die('connection error!!!'.mysqli_error());

if(isset($_POST['Name']) && isset($_POST['UserMail']) && isset($_POST['UserPassWord']))
	$Name = $_POST['Name'];
	$UserMail = $_POST['UserMail'];
	$UserPassWord = $_POST['UserPassWord'];
	$sql = "SELECT * FROM teacher";	
	$result = $con->query($sql);
	$row = mysqli_fetch_array($sql,MYSQLI_NUM);
	$add = mysqli_query($con, "INSERT INTO `teacher`(`ID`, `Name`, `UserMail`, `UserPassWord`, `Jurisdiction`) VALUES ($result->num_rows+1,'$Name','$UserMail','$UserPassWord',1)");
	if($add)
		echo "successfull";
	else
		echo "fail!!";
?>