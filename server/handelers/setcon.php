<?php
    $con = mysqli_connect("127.0.0.1","root","","police");

    if(!$con){
        die("failed to link to server. Error code 404x1"); //x1 means failed on step one of connection
    }
?>