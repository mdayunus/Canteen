<?php

$conn = mysqli_connect("localhost","root","","myDBMS");
if($conn->connect_error){
    
    die("connection error ". $conn->connect_error);
}
if (sql row exists where username ='yuan')
{
    echo "true";
}
else{
    echo "false";
}
?>