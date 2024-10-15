<?php
  $con=mysqli_connect("localhost","root","","task_management");
  $q="select * from tasks";
  $res=mysqli_query($con,$q);

  if($res)
  {
    ?>
    <h1>Tasks List</h1>
    <table border="1">
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
  </tr>
  <?php
  }
  while($row=mysqli_fetch_array($res))
  {
    ?>
    <tr>
      <td> <?php echo $row[0];?></td>
      <td> <?php echo $row[1];?></td>
      <td> <?php echo $row[2];?></td>
      <td> <a href="delete.php? id=<?php echo $row[0];?>">DELETE</a></td>
      <td> <a href="update.php? id=<?php echo $row[0];?>">UPDATE</a></td>
  </tr>
<?php
  }
  mysqli_close($con);
  ?>
</table>
