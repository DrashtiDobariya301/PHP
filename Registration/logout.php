<?php

    session_start();
    session_destroy();

    //once you logged out redirect to login page
    header('location:login.php');



?>
