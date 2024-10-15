<html>
  <head>
    <title>Task management</title>
</head>
<body>
  <h1>Add tasks</h1>
  <form>
    Enter title <input type="text" name="title"><br><br>
    Enter description <input type="text" name="description"><br><br>
    <input type="submit" name="s" value="SUBMIT"><br><br>
    <a href="view.php">View all</a><br><br>
</form>
</body>
</html>
<?php
if(isset($_REQUEST['s']))
{
  $au=$_REQUEST['title'];
  $ti=$_REQUEST['description'];
  $con=mysqli_connect("localhost","root","","task_management");
  $q="insert into tasks(title,description) values('" .$au. "','" .$ti. "')";
  $res=mysqli_query($con,$q);
  if($res)
  {
    echo "values are inserted";

  } else{
    echo " values are not inserted";
  }
  mysqli_close($con);
}
?>