<?php
include "config/koneksi.php";

    $Tgl_terima = date("Y-m-d");
    $stok = $_POST["stok"];
    $harga = $_POST["harga"];
    $barang = $_POST["barang"];
    $kategori = $_POST["kategori"];
    $kode = $_POST["kode"];

    $query = "INSERT INTO fi_barang(kode,id_kat,nama_brg,harga,stock,tgl_terima) VALUES ('$kode','$kategori','$barang','$harga','$stok','$Tgl_terima')";
    $input = mysqli_query($connect_db,$query);

    header("location:barang.php");
?>