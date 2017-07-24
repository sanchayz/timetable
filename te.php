<?php
$db_host= "localhost";
$db_user= "root";
$db_pass= "";
$db_name="computer";

$conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name);

if (!$conn) 
{
    die("could not connect");
}

$sql= "CREATE TABLE te(
Day varchar(20) NOT NULL,
Timing varchar(20) NOT NULL,
Subject varchar(20) NOT NULL,
Professor varchar(20) NOT NULL,
Room_No int NOT NULL
)";

if (mysqli_query($conn,$sql))
	{
    echo "Table 'te' created successfully";
    }
else 
	{
    echo "Error creating table 'te'" ;
	}


?>

