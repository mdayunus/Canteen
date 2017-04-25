<?php

$conn = mysqli_connect("localhost","root","","fw");
if($conn->connect_error){
    die("error " .connect_error);
}
$sql = "SELECT food, price FROM knight";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "food: ". $row["food"]. "price ". $row["price"];
    }
}
    else{
        echo "0 results";
    }
    


?>