<?php 
$server="localhost";
$username="root";
$password="";
$database="newdb";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error)
{
	die("Connection Error : . $conn->connect_error");
 }
 ?>
