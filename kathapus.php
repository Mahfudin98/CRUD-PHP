<?php
include "config/koneksi.php";
    mysqli_query($connect_db,"DELETE FROM fi_kat WHERE id_kat = '$_GET[id]'");
    header('location:kategori.php');
?>