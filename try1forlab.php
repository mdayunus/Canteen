<?php

$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
	die("connetion failure" .$conn->connect_error);
}
echo "connected";
echo "<br>";

$sql = "CREATE DATABASE myDBMS";
if (mysqli_query($conn, $sql)) {
	echo "database created";
}else
{
	echo "error occured ". $conn->error;
}
mysqli_close($conn);

?>