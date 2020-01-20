<?php
include "config/koneksi.php";
    $id = $_POST['id'];
    $Tgl_terima = date('Y-m-d');
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $barang = $_POST['barang'];
    $kategori = $_POST['kategori'];
    $kode = $_POST['kode'];
        
        $update = mysqli_query($connect_db,"UPDATE fi_barang SET kode = '$kode', id_kat = '$kategori', nama_brg = '$barang', harga = '$harga', stock = '$stok', tgl_terima = '$Tgl_terima' WHERE id_brg = '$id'");
     
      if ($update){
        header('location:barang.php');
      }else{
        echo 'gagal menyimpan data';
        echo '<a href=editbrg.php>';
      }
?>