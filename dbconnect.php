<?php
error_reporting(0);
$dbhost = "db4free.net";
$dbuser = "aligorithm";
$dbpass = "123456";
$dbname = "haematoloji";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
	echo "error to connect to database : ".mysqli_connect_errno();
}
else {
	//echo "connection sucessful";
	}
?>