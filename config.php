<?php
$stu_id= $_POST['id'];
$stu_email= $_POST['email'];
$stu_password=$_POST['password'];

$conn=  mysqli_connect("localhost","root","","log") or die("connection failed");
$sql="insert into student(id,email,password) values('{$stu_id}','{$stu_email}','{$stu_password}')";
$result= mysqli_query($conn,$sql) or die("query unsucessfull");
echo "form is submitted sucessfully"

?>