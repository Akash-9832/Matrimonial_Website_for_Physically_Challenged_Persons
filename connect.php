<?php
error_reporting(0);
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="matrimonial_db";
    $con=mysqli_connect($servername,$username,$password,$dbname);
    if($con){
        // echo "Connection OK";
    }
    else{
        echo "<script> alert('Connection Failed') </script>".mysqli_connect_error();
    }
