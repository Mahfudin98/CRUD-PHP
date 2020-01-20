<?php
include "config/koneksi.php";

    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
        
        $update = mysqli_query($connect_db,"UPDATE fi_kat SET kategori = '$kategori' WHERE id_kat = '$id'");
     
      if ($update){
        header('location:kategori.php');
      }else{
        echo 'gagal menyimpan data';
        echo '<a href=editkat.php>';
      }
?>