<?php
include "config/koneksi.php";

    $kategori = $_POST["kategori"];

    $query = "INSERT INTO fi_kat(kategori) VALUES('$kategori')";
    $input = mysqli_query($connect_db,$query);

    header("location:kategori.php");
?>