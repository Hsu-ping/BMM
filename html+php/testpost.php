<script type="text/javascript">
	function OK(input)
	{
		alert("in");
		alert(input);
	}
</script>

<?php
	$string = $_POST['name'];
	//OK($array["1"]); 
	//$array1 = echo json_decode($string);
	$array = array();
	$array = json_decode($string);
	//echo json_decode($string);
	echo ($array['0']);
	echo ($string);
	echo "<script type='text/javascript'>;
	
	
	OK('$array[0]');
	</script>";
	//echo json_decode('$array1');
	/*OK('$array['0']');*/
	?>