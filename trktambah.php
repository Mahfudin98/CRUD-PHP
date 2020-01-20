<?php
include "config/koneksi.php";

    $idmbr = $_POST["idmbr"];
    $idbrg = $_POST["idbrg"];
    $harga = $_POST["harga"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $ongkir = $_POST["ongkir"];
    $tgltrx = $_POST["tgltrx"];
    $tglbyr = $_POST["tglbyr"];
    $tglkrm = $_POST["tglkrm"];
    $status = $_POST["status"];

    $query = "INSERT INTO fi_trx(id_mbr,id_brg,harga,ongkir,nama,alamat,tgl_trx,tgl_byr,tgl_kirim,status) 
    VALUES 
    ('$idmbr','$idbrg','$harga','$ongkir','$nama','$alamat','$tgltrx','$tglbyr','$tglkrm','$status')";
    $input = mysqli_query($connect_db,$query);

    header("location:terkirim.php");
?>