<?php
$cc=new mysqli("localhost","root","");
if($cc->connect_error)
{
    die("connection failed".$cc->connect_error);

}
$s="create database stockdetails";
if($cc->query($s)==TRUE)
{
    echo"database successfully created";

}
else
{
    echo "error".$cc->error;

}
$cc->close();
?>