<html>
<body bgcolor="Yellow">
<form action="main.html"method="post">
<center>
<br>
<br>
<?php
include_once'conn.php';
if(isset($_POST['Submit']))
{
$fname=$_POST['id'];
$pass=$_POST['name'];
$gen=$_POST['password'];
$em=$_POST['email'];
$number=$_POST['phno'];
 $sql="INSERT INTO emptable(id,name,password,email,phno) VALUES('$fname','$pass','$gen','$em','$number')";
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