<?php
error_reporting(0);
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "haematology";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
	die("error to connect to database : ".mysqli_connect_errno());
}
else {
	//echo "connection sucessful";
	}
?>