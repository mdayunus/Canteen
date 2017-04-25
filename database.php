<?php


$conn= mysqli_connect("localhost","root","","fw");
if($conn->connect_error){
    die("connection error ". $conn->connect_error);
}

$sql = "INSERT INTO knight (food, price) VALUES ('potato', 40)";

if($conn->query($sql) === TRUE){
    echo"inesrted";
}
else{
    echo"error ". $conn->error;
}

$conn->close();
?>