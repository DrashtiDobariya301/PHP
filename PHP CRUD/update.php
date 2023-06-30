#In PHP CRUD U-Update performing using the $updateid

<?php
include 'connect.php';
//if we click on submit then data store in the database 
//connect with updateid to access particular id info
if(isset($_GET['updateid'])){
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result=mysqli_query($con, $sql);
//just only show the particular id data display
//using this method we can access the data from database
$row=mysqli_fetch_assoc($result);
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


$sql="update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
$result=mysqli_query($con , $sql);
if($result){
  echo "update successfully";
  header('location:display.php');
}
else{
  die(mysqli_error($con));
}
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
        <!--here value get from the php variable-->
        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
      </div>

      <button type="submit" class="btn btn-primary mt-2" name="submit">Update</button>
    </form>
  </div>


</body>

</html>
