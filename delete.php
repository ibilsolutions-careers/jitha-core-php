<?php
 $id=$_REQUEST['id'];
 $con=mysqli_connect("localhost","root","","task_management");
 $q="delete from tasks where id='" .$id. "'";
 $res=mysqli_query($con,$q);
mysqli_close($con);
header('location:view.php');
?>