<html>
<head>
<title>Retrieve data</title>
</head>
<body bgcolor="pink">
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
</tr><br><br><br>
<form method="post" action="formdelete2.php">
Enter the id to delete:&nbsp&nbsp
<input type="int"name ="id">
<br><br><br>
<input type="submit" name ="submit" value="submit">
</form>
<?php
     }
else
     {
   echo"no result found";
     }    
   mysqli_close($conn);
?>
</center>
</body>
</html>