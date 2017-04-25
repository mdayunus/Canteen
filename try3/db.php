<?php  
    $conn = mysqli_connect("localhost", "root", "","mydbms");
     if (!$conn)
    {
     die('Could not connect: ' . mysqli_connect_error());
    }

?>