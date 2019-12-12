<!DOCTYPE html>	
<html>
<head>
</head>
<body>
<?php
		
// ******** update your personal settings ******** 
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "database";

// Connect MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);
				
// set up char set
if (!$conn->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $conn->error);
	exit();
}
				
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
				
// ******** update your personal settings ******** 
$sql = "SELECT * FROM `prolist` WHERE ClassID = 1";	// set up your sql query
$result = $conn->query($sql);	// Send SQL Query

if ($result->num_rows > 0) {	
	$array = array();
	//$str*  = array();
	$count_int = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$array[$count_int] = $row['Name'];
		//echo "<br>".$row['Name']."</br>";
		//echo "$count_int";
		//echo "<br>"."$array[$count_int]"."</br>";
		$count_int += 1;
	}
	/*
	while ($array['i']!='null'){
		$a_int = 0;
		$str*['i']=$array['i'];
		if($array['i']=='null')
			break;
		$a_int+=1;
	}*/
	print_r($array);
	echo json_encode($array['0']);
	
} 
else {
	echo "0 results";
}
//echo json_encode
?>
	
	<form action="MyClass.php" method="post">
	
	<input type="hidden" name="name" value=<?php echo json_encode($array)?>>
	<input type="submit" value="submit">
	
	</form>
</body>
</html>