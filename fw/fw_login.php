<?php
include("fw_db.php");
session_start(); 
$username=($_POST['username']);
$password=($_POST['password']);
$result=  $conn->query("SELECT username,password FROM accholder WHERE username='$username' and password='$password'");
if($result->num_rows >0){
    header("Location: menu.php");
}
else
    echo "not here";
?>