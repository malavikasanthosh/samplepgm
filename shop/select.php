<?php
$con=new mysqli("localhost","root","","shop1");
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
$s="select *from shop_tbl1";
$result=$con->query($s);
if($result->num_rows>0)
{
    echo"<table border='1'> 
    <tr>
    <h4> Resturant Bill</h4>
    <td>ITEM ID</td>
    <td>NAME</td>
    <td>TYPE</td>
    <td>QUANTITY</td>
    <td>PRICE</td>
    </tr>";
    $sum=0;
    while($row=$result->fetch_assoc())
{
    echo"<tr><td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['type']."</td>
    <td>".$row['quantity']."</td>
    <td>".$row['price']."</td>  </tr><br>";
    $sum+=$row['price'];
    }
    echo "<tr><td colspan=4>total</td><td>".$sum."</td></tr>";
    echo"<table>";
}
else
{
    echo"0 result";

}
$con->close();
?>