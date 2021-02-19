<?php
$servername ='localhost';
$username ='root';
$password ='';
$dbname ="employee";
$conn =mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('could not connect My sql:' .mysqli_error());
}
else
{
echo "Database connected";
}
?>