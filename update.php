<?php
$stu_id= $_POST['id'];
$stu_email= $_POST['email'];
  $stu_password=$_POST['password'];

$conn=  mysqli_connect("localhost","root","","log") or die("connection failed");
$sql="update  student set email='{$stu_email}',password='{$stu_password}' where id='{$stu_id}'";
$result= mysqli_query($conn,$sql) or die("query unsucessfull");
echo "form is submitted sucessfully";

?>