<?php
    $username = "root";
    $password = "";
    $database = "penjualan_online";
    $hostname = "localhost";
    
    $connect_db=mysqli_connect($hostname,$username,$password);
    $find_db=mysqli_select_db($connect_db,$database);
?>