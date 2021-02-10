<html>
<body bgcolor="pink">
<form action="main.html" method="post">
<center>
<?php
include_once 'conn.php';
$rid = $_POST['ID'];
$sql = "DELETE FROM appletable WHERE ID='$rid'";
 if(mysqli_query($conn,$sql))
   {
   echo"Record deleted successfully";
   }
  else
  {
   echo"Error deleting record:" .mysqli_error($conn);
  }
  mysqli_close($conn);
?>
<br><br>
<input type ="submit" value= "Back to home page" name="Submit">

</center>
</body>
</html>
