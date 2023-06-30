#In PHP CRUD R-Read to display the data

<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
    
    <div class="container">
        <button class="btn btn-primary mt-5">
        <a href="user.php" class="text-light">Add User</a>      
        </button>
        <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">SI no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

  <tbody>
    <!--display the database data on the website-->

  <?php

    $sql = "Select * from `crud`";
    $result = mysqli_query($con,$sql);

    if($result){
        //time consuming to add the data every time so that we used a while loop to add all the data
       // $row=mysqli_fetch_assoc($result);
        //echo $row['name'];
        //$row=mysqli_fetch_assoc($result);
        //echo $row['name'];

        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];

            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
           </td>
          </tr>';

        }
    }

?>

  
  </tbody>
</table>
    </div>
  </body>
</html>
