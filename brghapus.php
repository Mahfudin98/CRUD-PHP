<?php
include "config/koneksi.php";
    mysqli_query($connect_db,"DELETE FROM fi_barang WHERE id_brg = '$_GET[id]'");
    header('location:barang.php');
?>