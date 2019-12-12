<?php

$con = mysqli_connect("localhost", "root", "12345678", "database");

if(mysqli_connect_errno($con))
	die('connection error!!!'.mysqli_error());

$Rank = $_POST['Rank'];
if($Rank == 'TA') {
	if(isset($_POST['Name']) && isset($_POST['UserMail']) && isset($_POST['UserPassWord']))
	$Name = $_POST['Name'];
	$UserMail = $_POST['UserMail'];
	$UserPassWord = $_POST['UserPassWord'];
	$sql = "SELECT * FROM ta";	
	$result = $con->query($sql);
	$row = mysqli_fetch_array($sql,MYSQLI_NUM);
	$add = mysqli_query($con, "INSERT INTO `ta`(`ID`, `TeacherID`, `Name`, `UserMail`, `UserPassWord`, `Jurisdiction`) VALUES ($result->num_rows+1,1,'$Name','$UserMail','$UserPassWord',1)");
	if($add)
		echo "successfull";
	else
		echo "fail!!";
}

else if($Rank == 'T') {
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
}

else {
	if(isset($_POST['Name']) && isset($_POST['UserMail']) && isset($_POST['UserPassWord']) && isset($_POST['StudentID']))
	$Name = $_POST['Name'];
	$UserMail = $_POST['UserMail'];
	$UserPassWord = $_POST['UserPassWord'];
	$StudentID = $_POST['StudentID'];
	$sql = "SELECT * FROM student";
	$result = $con->query($sql);
	$row = mysqli_fetch_array($sql,MYSQLI_NUM);
	$add = mysqli_query($con, "INSERT INTO `student`(`ID`, `studentID`, `ClassNum`, `Name`, `UserMail`, `UserPassWord`, `Jurisdiction`) VALUES ($result->num_rows+1,'$StudentID',0,'$Name','$UserMail','$UserPassWord',1)");
	if($add)
		echo "successfull";
	else
		echo "fail!!";
}

?>