<?php
$mysqli = new mysqli("localhost", "root", "", "notedb");

/* check connection */
if (mysqli_connect_errno()) {
    echo "Connect failed: " . mysqli_connect_error()."\n";
    exit();
}
$API_KEY = 1234;
if(isset($_POST['api_dev_key']) && ($_POST['api_dev_key'] == $API_KEY))
{
	if(isset($_POST['text']))
	{
		$sql = "INSERT INTO note (text) 
              VALUES('".$_POST['text']."')"; 
		if ($mysqli->query($sql) == true) 
		{ 
			echo "Records inserted successfully."; 
		} 
		else
		{ 
			echo "ERROR: Could not able to execute $sql. "
				   .$mysqli->error; 
		} 
	}	
}
$mysqli->close(); 
?>