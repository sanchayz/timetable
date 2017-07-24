<?php
$db_host= "localhost";
$db_user= "root";
$db_pass= "";

$conn = mysqli_connect($db_host, $db_user, $db_pass);

if (!$conn) {
    die("could not coonect");
}
echo "Connected successfully";

$sql = "CREATE DATABASE Computer";

if 
(mysqli_query($conn, $sql))
	{
     echo "Database created successfully";
	} 
else 
	{
    echo "Error creating database: ";
	}

?>