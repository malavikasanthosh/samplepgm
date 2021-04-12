<?php

$servername = "localhost";
$user = "root";
$pass = "";

$conn = new mysqli($servername,$user,$pass);

if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);

}
else{
    echo("Connection Successful");
    
}
// $sql="create database bill";
// if($conn->query($sql)==TRUE)
// {
//     echo "Database created successfully";
// }
// else
// {
//     echo "Error creating database".$conn->error;

// }
$conn->close();


?>