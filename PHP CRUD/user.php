#In PHP CRUD C-Create

<?php
include 'connect.php';
//if we click on submit then data store in the database 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


$sql="insert into `crud` (name,email,mobile,password) values('$name', '$email','$mobile','$password')";
$result=mysqli_query($con , $sql);
if($result){
  //redirect the page with display page
  header('location:display.php');
}
else{
  die(mysqli_error($con));
}
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <form method="post" class="mt-5">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
    </form>
  </div>


</body>

</html>
