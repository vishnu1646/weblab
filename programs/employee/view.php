<html>
<head>
<title>Retrieve data</title>
</head>
<body bgcolor="pink">
<form action="main.html" method="post">
<center>
       <?php
         include_once 'conn.php';
        $sql="SELECT *FROM emptable";
        $result=mysqli_query($conn,$sql);
         if(mysqli_num_rows($result)>0)
    {
  ?>
 <br><br>
 <table border="2">

<tr>
 <th>ID</th>
 <th>Name</th>
 <th>Password</th>
 <th>Email</th>
 <th>Phone number</th>
</tr>
       <?php
        $i=0;
        while($row = mysqli_fetch_assoc($result))
  {
 ?>
     <tr>
      <td><?php echo $row["id"];?></td>
     <td><?php echo $row["name"];?></td>
     <td><?php echo $row["password"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["phno"];?></td>
     </tr>
                <?php
                 $i++;
   }
?>
</table>
 <?php
  }
else
{
echo"No result found";
}
?>
<br>
<br>
<input type="submit"value="Back to home page"name="submit">
</center>
</form>
</body>
</html>