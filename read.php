<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center">Crud</h1>
        
         
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/web.jpg" alt="" height="20px" width="20px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Delete</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
        $conn=  mysqli_connect("localhost","root","","log") or die("connection failed");
        $sql= "select * from student";
        $result= mysqli_query($conn,$sql) or die("query unsucessfull");
        if(mysqli_num_rows($result)>0){?>
<table class="table table-striped">
<thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
      </thead>
  <tbody>
    <?php 
    while($row=mysqli_fetch_assoc($result))
    { ?>
    <tr>

    <td><?php echo $row['id'] ;?></td>
      <td><?php echo $row['email'] ;?></td>
      <td><?php echo $row['password']; ?> </td>
      
      <td>
        <a href="edit.php?id=<?php echo $row['id'] ;?>">Edit</a>
        <a href="delete.php ?id=<?php echo $row['id'] ;?>"> delte</a>
      </td>
    </tr>
    <?php }?>
    </tbody>
</table>
     <?php   }?>
      

  
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>