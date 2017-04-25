<!DOCTYPE html>
<html>
<body>
    
    <form method="post" action="trying.php">
    name:<input type="text" name="name" required>
        <br>
        reg:<input type="text" name="reg" required>
        <br>
        password:
        <input type="password" name="pw" required>
        <br>
        <input type="submit" name="submit" value="submit">
    
    </form>
    
   <?php 
$conn = mysqli_connect("localhost", "root", "", "myDBMS");
if ($conn->connect_error) {
	die("connection failure " .$conn->connect_error);
}

    $name =$_POST['name'];
    $reg = $_POST['reg'];
    $pass = $_POST['pw'];
    


$sql = "INSERT INTO acc(username,email,password) VALUES ('$name','$reg','$pass')";

if(mysqli_query($conn,$sql)){
    echo"record created";

}
else{
    echo"error";
}


$conn->close();



?>
    
    </body>

</html>