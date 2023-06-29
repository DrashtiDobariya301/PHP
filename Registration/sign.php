<?php

    $success =0;
    $user=0;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'connect.php' ;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    //passing the query for insert the data
    //for insert we have to firstly pass the variable and then pass the value
    //here the variable is username and password
    //here the values are $username and $password
    //also have to mention the table name which is created in the phpmyadmin database

   // $sql = "insert into `registration`(username,password)values('$username' , '$password')";
    //here in result for mysqli_query have to pass to parameters (connection variable , query variable)
   // $result = mysqli_query($con , $sql);

    //if($result){
    //    echo "Data inserted successfully";
   // }else{
    //    die(mysqli_error($con));
    //}

    $sql = "Select * from `registration` where username='$username' ";
    $result = mysqli_query($con , $sql);
    if($result){
        //count a row which present inside the database
        $num = mysqli_num_rows($result);
        if($num>0){
            //echo "User already exist";
            $user=1;

        }
        else{
            $sql = "insert into `registration`(username,password)values('$username' , '$password')";
            $result = mysqli_query($con , $sql);
            if($result){
                   //echo "Signup successfully";
                   $success =1;
                   //redirect to the login page
                   header('loaction:login.php');
                }else{
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
    <title>Signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

<?php

if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Ohh no Sorry</strong> User already exist
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>

<?php

if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> You are successfully signed up.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>

    <h1 class="text-center mt-2">Sign-up page</h1>
    <div class = "container mt-5">
    <form action="sign.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <!--name attribute useful to give the database to so that it's easily connected-->
    <input type="text" class="form-control" placeholder="Enter your username" name="username">

    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Sign Up</button>
</form>
    </div>    
  </body>
</html>
