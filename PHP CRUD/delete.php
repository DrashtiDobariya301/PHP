#In PHP CRUD D-Delete to perform the delete operation using $id

<?php

include 'connect.php';
//$_GET used  for get the data from url
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        //echo "Delete successfully";
        //redirect to the display page
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
