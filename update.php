<?php
 $id=$_REQUEST['id'];
 $con=mysqli_connect("localhost","root","","task_management");
 $q="delete from tasks where id='" .$id. "'";
 $res=mysqli_query($con,$q);

 $row= mysqli_fetch_array($res);





 ?>
 <html>
  <body>
    <form>
      Id<input type="text" name="title" value="<?php echo $row[0];?>"><br><br>
      Enter title <input type="text" name="title" value="<?php echo $row[1];?>"><br><br>
      Enter description <input type="text" name="description" value="<?php echo $row[2];?>"><br><br>
      <input type="submit" name="s" value="SUBMIT"><br><br>
</form>
</body>
</html>
<?php
if(isset($_REQUEST['s']))
{
  $id=$_REQUEST['id'];
  $au=$_REQUEST['title'];
  $ti=$_REQUEST['description'];
  $con=mysqli_connect("localhost","root","","task_management");
  $q="update tasks set title='" .$au. "', description='" .$ti. "' where id='" .$id. "'";
  $res=mysqli_query($con,$q);
  if($res)
  {
    mysqli_close($con);
  }
  header('location:view.php');
}
  ?>
