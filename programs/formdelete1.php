<html>
<head>
<title>Retrieve data</title>
</head>
<body bgcolor="pink">
<center>
       <?php
         include_once 'conn.php';
        $sql="SELECT *FROM appletable";
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
 <th>Gender</th>
 <th>Email</th>
 <th>Code</th>
 <th>Phonenumber</th>
</tr>
       <?php
        $i=0;
        while($row = mysqli_fetch_assoc($result))
   {
 ?>
     <tr>
      <td><?php echo $row["ID"];?></td>
     <td><?php echo $row["uname"];?></td>
     <td><?php echo $row["password"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>
      <td><?php echo $row["email"];?></td>
       <td><?php echo $row["code"];?></td>
       <td><?php echo $row["phno"];?></td>
     </tr>
                <?php
                 $i++;
   }
?>
</table>
</tr><br><br><br>
<form method="post" action="formdelete2.php">
Enter the Phonenumber to delete:&nbsp&nbsp
<input type="int"name ="phno">
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