<?php

$conn = mysqli_connect("localhost", "root", "", "myDBMS");
if ($conn->connect_error) {
	die("connection failure " .$conn->connect_error);
}
echo "givin it a try";
echo "<br>";
    $name = mysql_real_escape_string($conn,$_REQUEST['name']);
    $reg = mysql_real_escape_string($conn,$_REQUEST['reg']);
    $pw = mysql_real_escape_string($conn,$_REQUEST['pw']);
    
echo "so far so good";


$sql = "INSERT INTO acc(username,email,password) VALUES ('$name','$reg','$pw')";

if(mysqli_query($conn,$sql)){
    echo"record created";
    echo"<br>";
    echo"$name";

}
else{
    echo"error";
}


$conn->close();



?>