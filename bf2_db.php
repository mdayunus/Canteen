<?php


$conn= mysqli_connect("localhost","root","","fw");
if($conn->connect_error){
    die("connection error ". $conn->connect_error);
}

$sql = "INSERT INTO bf (fname, price)
VALUES ('egg',40);";
$sql .= "INSERT INTO bf (fname, price)
VALUES ('potato', 30);";
$sql .= "INSERT INTO bf (fname, price)
VALUES ('paneer', 50)";

if($conn->multi_query($sql) === TRUE){
    echo"inesrted";
}
else{
    echo"error ". $conn->error;
}

$conn->close();
?>