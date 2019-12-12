<?php
	//database connect
	$con = mysqli_connect("localhost", "root", "12345678", "database");
	//connection checking
	if(mysqli_connect_errno($con))
		die('connection error!!!'.mysqli_error());
	
	//$manager_ID = 'manager';
	//$manager_password = '0000';
	
	//input
	$UserMail = $_POST['UserMail'];
	$UserPassWord = $_POST['UserPassWord'];
	
	//去反斜+轉特殊字符
	$UserMail = stripcslashes($UserMail);
	$UserPassWord = stripcslashes($UserPassWord);
	$NewID = mysqli_real_escape_string($con, $UserMail);
	$Newpass = mysqli_real_escape_string($con, $UserPassWord);
	
	//sql query
	$result = mysqli_query($con, "SELECT * FROM `ta` WHERE ta.UserMail = '$NewID' and ta.UserPassWord = '$Newpass'");
	$row = mysqli_fetch_array($result, MYSQLI_NUM);
	
	//account and password checking
	if(!$NewID || !$Newpass)
		echo "帳號密碼不得為空";
	else if($result && $row[3] == $NewID && $row[4] == $Newpass)
	{
		echo "$row[2] , 歡迎進入模擬選課系統!";
		//echo '<a href="maincourse.php?userid='.$row[1].'">進入';
	}
	else
	{	
		$url = "HomePage.html";
		echo "<script type = 'text/javascript'>";
		echo "window.location.href = '$url'";
		echo "</script>";
	}
?>