#establish the connection between the phpmyadmin database and php file

<?php

$con = new mysqli('localhost' , 'root' , 'Za81as@#1212' , 'crud_operation');
if(!$con){

    die(mysqli_error($con));
}



?>
