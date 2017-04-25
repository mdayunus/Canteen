<html>
    <body>
<?php
$conn=mysqli_connect("localhost","root","","fw");
// Check connection
if ($conn->connect_error){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT * FROM bf");

echo "<table border='1'>
<tr>
<th>Item</th>
<th>price</th>
</tr>";
$i =0;
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td><input type='button' class='cartAdd' id='add" ; echo $i ; echo "' value='+'></td?";
echo "</tr>";$i++;
}
echo "</table>";

mysqli_close($conn);
?>

    <style>
            table{
                border: solid 2px black;
                border-collapse: collapse;
                
            }
            th,tr,td{
                border: solid 2px black;
                
            }
    </style>
    
        <br>
        <table border="1" id="cart">
            <tr><th>First</th>
                <th>Second</th>
            </tr>
        </table>
        <input type="button" id="add1" value="Hola">
</body>

</html>





















