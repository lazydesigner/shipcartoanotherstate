<?php

    $DB_HOST = "localhost";
    $DB_USER = "u841070527_shipcarto";
    $DB_PASS = "Smile@1427";
    $DB_NAME = "u841070527_shipcar";
    // $DB_HOST = "localhost";
    // $DB_USER = "root";
    // $DB_PASS = "";
    // $DB_NAME = "rapid_backup";


    $con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

    if(!$con){
        echo 'Not Connected';
    }



    ?>