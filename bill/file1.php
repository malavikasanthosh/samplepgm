<html>
<body>
<form method="post" action="">
Customer Name:<input type="text" name="name" ><br>
select the item quantities...<br>
Rice:<input type="text" name="rquant"><br>
Chapatti:<input type="text" name="cquant"><br>
Tea:<input type="text" name="tquant"><br>
Coffee:<input type="text" name="coquant"><br>
<input type="submit"  name="submit" value="Submit"><br>
</form>
</body>
</html>



<?php
include 'connection.php';
if(isset($_POST["submit"]))
{

$name = $_POST["name"];
$rquant = $_POST["rquant"];
$cquant = $_POST["cquant"];
$tquant = $_POST["tquant"];
$coquant = $_POST["coquant"];

$q = "insert into bill1(name,rquant,cquant,tquant,coquant)values('$name','$rquant','$cquant','$tquant','$coquant')";

if(mysqli_query($conn,$q)){
    echo("item added sucessfully");
}
else{
    echo("try again");
}
}

?>