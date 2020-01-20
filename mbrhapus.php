<?php
include "config/koneksi.php";
    mysqli_query($connect_db,"DELETE FROM fi_member WHERE id_mbr = '$_GET[id]'");
    header('location:member.php');
?>