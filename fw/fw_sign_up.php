<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
    </head>
    <body>
    <form method="post" action="fw_sign_up.php">
        <table>
        <tr>
            <td>Name:<input type="text" name="name" required ></td>
            </tr>
            <tr>
            <td>Username:<input type="text" name="username" required ></td>
            </tr>
            <tr>
            <td>Email:<input type="email" name="email" required ></td>
            </tr>
            <tr>
            <td>Password:<input type="password" name="password" required ></td>
            </tr>
            <tr><td><input type="submit" name="submit" value="register"><td></tr>
        </table>
        </form>
        
        <?php
        if (isset($_POST['submit'])){
            
            include 'fw_db.php';
            
            $name = $_POST["name"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
        
        if($conn->query("INSERT INTO accholder VALUES ('$name','$username','$email', '$password')")==="TRUE");
            echo"created";
        }
        ?>
    </body>
</html>