<?php
    //============ connection to database=============
    $connect = mysqli_connect('localhost', 'root', '', 'my_prot');
    if (!$connect) {
        die('this error' . mysqli_connect_error());
    } else {
    //     echo " <h1> connection is DONE </h1> ";
    }
?>