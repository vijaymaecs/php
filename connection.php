<?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'crud_app';

    $connection = mysqli_connect($host, $username, $password, $db);

    if(!$connection) {
        echo "Unable to connect to database" . mysqli_error($connection);
        die;
    } else {
        #echo "Database connected successfully";
    }
    
?>