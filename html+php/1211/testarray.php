<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);
				
// set up char set
if (!$conn->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $conn->error);
	exit();
}

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$a = array("1","2","3");
$b = serialize(stripslashes($a)); //serialize之後寫入資料庫
echo "$b";
$c = unserialize(stripslashes($b)); //unserialize將資料還原成陣列
$addr = $c["0"];
echo "$addr";
$addr = $c["1"];
echo "$addr";
$addr = $c["2"];
echo "$addr";
//$b = serialize(str_slashes($a));
//$c = unserialize(str_slashes($b));
//echo "$a";
//$test = array_search('2',$a);
$addr = $a["0"];
echo "$addr";
$addr = $a["1"];
echo "$addr";
$addr = $a["2"];
echo "$addr";


?>