//In connect.php based on established the connection between the database and php files

<?php
//create a variable to connect with the database
$HOSTNAME = 'localhost'; 
$USERNAME = 'root';
$PASSWORD = 'za81as@#1212';
$DATABASE = 'signupforms';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con){
    //show the error if the database is not connect 
    die(mysqli_error($con));
}

?>
