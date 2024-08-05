<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container border border-dark mt-5">
<?php
        $conn=  mysqli_connect("localhost","root","","log") or die("connection failed");
        $stu_id=$_GET['id'];
        $sql= "select * from student where id={$stu_id}";
        $result= mysqli_query($conn,$sql) or die("query unsucessfull");
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
<form class="row g-3" action="update.php" method="post">
<div class="col-md-12  ">
    <label for="inputEmail4" class="form-label"  >id</label>
    <input type="number" class="form-control  px-2"  name="id" id="inputEmail4" value="<?php $row=['id']?>" >
  </div>
  <div class="col-md-12  ">
    <label for="inputEmail4" class="form-label"  >Email</label>
    <input type="email" class="form-control  px-2"  name="email" id="inputEmail4"  value="<?php $row=['email']?>">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label"  >Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" value="<?php $row=['password']?>">
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" >update</button>
  </div>
</form>
<?php }
}?>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>