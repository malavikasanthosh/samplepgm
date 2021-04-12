<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$conn=new mysqli("localhost","root","","stockdetails");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}

if(isset($_POST['code'])&&isset($_POST['name'])&&isset($_POST['type'])&&($_POST['avail'])&&isset($_POST['date']))
{


$sql="insert into stock_tbl(item_code,item_name,type,available,date_of_expiry) values(".$_POST['code'].",'".$_POST['name']."','".$_POST['type']."',".$_POST['avail'].",'".$_POST["date"]."')";

if($conn->query($sql)==TRUE)
{
    echo "Inserted successfully";

}
else
{
    echo "error".$sql."<br>".$conn->error;

}
}
$conn->close();
}else{
    echo("Methode not Accepted");
}
?>
