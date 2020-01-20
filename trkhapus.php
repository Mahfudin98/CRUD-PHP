<?php
include "config/koneksi.php";
    mysqli_query($connect_db,"DELETE FROM fi_trx WHERE id_trx = '$_GET[id]'");
    header('location:terkirim.php');
?>