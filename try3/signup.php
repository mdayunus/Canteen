<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>
<form action="signup.php" method="post">
  <table id="title">
    <tr>
      <td>Name:</td>
        <td><input type="text" name="name" /></td>
      </tr>
    <tr>
    <tr>
      <td>Username:</td>
        <td><input type="text" name="username" /></td>
      </tr>
    <tr>
      <td>Password:</td>
        <td><input type="password" name="password" /></td>
      </tr>
    <tr>
        <td><input type="submit" name="submit" value="Sign Up" /></td>
      </tr>
  </table>
</form>

<?php
if (isset($_POST['submit']))
    {      
    include 'db.php';

                    $name=$_POST['name'];                 
                    $username=$_POST['username'];
                    $password=$_POST['password'];

         if($conn->query("INSERT INTO acc VALUES ('$name','$username','$password')")==="TRUE"){
             echo "successfully added";
         }
}
?>
  
    </body>
</html>