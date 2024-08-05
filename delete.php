<?php
$stu_id=$_GET['id'];
include 'main.php';
$sql="delete from student where id={$stu_id}";
$result= mysqli_query($conn,$sql) or die("query unsucessfull");
echo "form is submitted sucessfully";
header("Location :http://localhost/crud/read.php");

?>
