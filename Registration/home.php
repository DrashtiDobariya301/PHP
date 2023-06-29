<?php
    session_start();

    //if username is not set without login try to come to homepage then redirect to my login page to firstly logged in
    if(!isset($_SESSION['username'])){
        //redirect to login page
        header('location:login.php');
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center text-warning mt-5" >Welcome
        <?php 
        //here print the username
        echo $_SESSION['username'];
        ?>
    </h1>
    <div class="container">
        <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
        </div>
      
  </body>
</html>
