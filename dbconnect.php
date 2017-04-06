<?php
$host_name = "localhost";
$user_name = "root";
$pass = "";
$database = "exercises";

$connect = mysqli_connect($host_name, $user_name, $pass) or die("Could not connect Database!");
if($connect)
{
	mysqli_select_db( $connect, $database ) or die("Could not select <i>$database</i>!");
}
else
{
	echo "Database connection failed. Please check the error: ".$connect;
}

?>