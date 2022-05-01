


/<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con  = mysqli_connect('localhost', 'fit2104_user', 'l5Mm0!RPI3rTh2gN', 'fit2104A2_db');
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>