<html>
<body bgcolor="Yellow">
<form action="mainlib.html"method="post">
<center>
<br>
<br>
<?php
include_once'conn.php';
if(isset($_POST['Submit']))
{
$fname=$_POST['id'];
$pass=$_POST['bname'];
$gen=$_POST['auname'];
$em=$_POST['pub'];
$number=$_POST['quantity'];
 $sql="INSERT INTO books(ID,bname,auname,pub,quantity) VALUES('$fname','$pass','$gen','$em','$number')";
if(mysqli_query($conn,$sql))
{
echo "New record created successfully !<br>";
}
else
{
echo"Error:" .$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit"value="back to home page"name="submit">
</center>
</body>
</html>