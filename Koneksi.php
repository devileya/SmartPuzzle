<?php
$hostname = "us-cdbr-azure-southcentral-e.cloudapp.net:3306";
$user = "b9dae24baabdba";
$pass = "df2ab6fa";
$db = "acsm_c66f93a9b5e2eae";
$con=mysqli_connect($hostname,$user,$pass,$db);
if(mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL:".mysqli_connect_error();
}
else
{
}
?>