<?php


$conn= mysqli_connect("localhost","root","","fw");
if($conn->connect_error){
    die("connection error ". $conn->connect_error);
}

$sql = "CREATE TABLE bf (
fname VARCHAR(30) NOT NULL,
price float(30) NOT NULL
)";

if($conn->query($sql) === TRUE){
    echo"inesrted";
}
else{
    echo"error ". $conn->error;
}

$conn->close();
?>