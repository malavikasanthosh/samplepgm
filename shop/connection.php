<?php
$con=new mysqli("localhost","root","");
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
$s="create database shop1";
if($con->query($s)==TRUE)
{
    echo "Database created successfully";
}
else
{
    echo "error".$con->error;
}
$con->close();
?>