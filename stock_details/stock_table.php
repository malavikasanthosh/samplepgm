<?php
$conn=new mysqli("localhost","root","","stockdetails");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="create table stock_tbl(item_code int(30) not null,item_name varchar(30),type varchar(30),available int(35),date_of_expiry date)";
if($conn->query($sql)==TRUE)
{
    echo "Table created successfully";
}
else
{
    echo "Error creating table".$conn->error;
}
$conn->close();
?>
