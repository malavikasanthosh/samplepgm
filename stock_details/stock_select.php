<?php
//if($_SERVER["REQUEST_METHOD"]=="GET")
//{
$conn=new mysqli("localhost","root","","stockdetails");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="select * from stock_tbl";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    echo "<table border='1'>
    <tr>
    <td>Item Code</td>
    <td>Item Name</td>
    <td>Type</td>
    <td>Available</td>
    <td>Date of Expiry</td>
    </tr>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr><td>".$row['item_code']."</td>
        <td>".$row['item_name']."</td>
        <td>".$row['type']."</td>
        <td>".$row['available']."</td>
        <td>".$row['date_of_expiry']."</td>
        </tr><br>";
    }
    echo "<table>";

}
else{
    echo "0 result";

}
$conn->close();
//}
?>