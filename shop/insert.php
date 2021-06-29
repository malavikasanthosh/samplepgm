<?php
$con=new mysqli("localhost","root","","shop1");
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
else
{
    if(isset($_POST['submit']))
    {
        $s1=$_POST['id'];
        $s2=$_POST['name'];
        $s3=$_POST['type'];
        $s4=$_POST['quantity'];
        $s5=$_POST['price'];
        $s="insert into shop_tbl1 values($s1,'$s2','$s3','$s4','$s5')";
        if($con->query($s)==TRUE)
        {
            echo "Inserted successfully";
        }
        else
        {
            echo "error".$con->error;
        }
    }
}
$con->close();
?>