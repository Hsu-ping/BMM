<?php

$con = mysqli_connect("localhost", "root", "12345678", "database");

if(mysqli_connect_errno($con))
	die('connection error!!!'.mysqli_error());

if(isset($_POST['Name']) && isset($_POST['UserMail']) && isset($_POST['UserPassWord']) && isset($_POST['StudentID']))
	$Name = $_POST['Name'];
	$UserMail = $_POST['UserMail'];
	$UserPassWord = $_POST['UserPassWord'];
	$StudentID = $_POST['StudentID'];
	$sql = "SELECT * FROM student";
	$result = $con->query($sql);
	$row = mysqli_fetch_array($sql,MYSQLI_NUM);
	$add = mysqli_query($con, "INSERT INTO `student`(`ID`, `studentID`, `ClassID`, `Name`, `UserMail`, `UserPassWord`, `Jurisdiction`) VALUES ($result->num_rows+1,'$StudentID',1,'$Name','$UserMail','$UserPassWord',1)");
	if($add)
		echo "successfull";
	else
		echo "fail!!";
?>