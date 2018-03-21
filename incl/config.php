<?php
// Mini project By Ncube Ntokozo
//ncuben@solusi.ac.zw
//0712948663
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "orphanage";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	
die("Connection failed: " . mysqli_connect_error());

}

?>


