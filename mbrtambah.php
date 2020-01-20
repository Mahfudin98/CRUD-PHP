<?php
include "config/koneksi.php";

    $Tgl_dftr = date("Y-m-d");
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $alamat = $_POST["alamat"];

    $query = "INSERT INTO fi_member(id_mbr,nama,email,pass,tgl_dftr,alamat) VALUES ('$id','$nama','$email','$password','$Tgl_dftr','$alamat')";
    $input = mysqli_query($connect_db,$query);

    header("location:member.php");
?>