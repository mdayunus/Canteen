<?php
include("db.php");

session_start(); 

$username=($_POST['username']);
$password=($_POST['password']);

$result=  $conn->query("SELECT username,password FROM acc WHERE username='$username' and password='$password'");

if($result->num_rows >0){
    echo "here";
}
else
    echo "not here";
?>