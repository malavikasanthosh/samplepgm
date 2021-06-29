<?php
$con=new mysqli("localhost","root","","shop1");
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
$s="create table shop_tbl1(id int(25),name varchar(25),type varchar(25),quantity int(20),price int(20))";
if($con->query($s)==TRUE)
{
    echo "Table created successfully";
}
else
{
    echo "error".$con->error;
}
$con->close();
?>