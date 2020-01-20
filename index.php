<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <script type="text/javascript" src="css/js/highslide-with-html.js"></script>
    <script type="text/javascript" src="css/js/slideshow.js"></script>
    <script type="text/javascript" src="css/js/utilities.js"></script>
    <title>Penjualan Online</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Penjualan Online</h1>
            <p>
                <hr/>
                Tujuan dari penelitian ini adalah untuk memberikan solusi penjualan online yang mempermudah proses transaksi antara pembeli 
                dan toko bangunan fajar indah jatitujuh, serta mempermudah karyawan dalam melakukan pengelolaan dan pengecekan stok produk.
            </p>
            <p>database penjualan online ini mencakup tabel sebagai berikut :</p>
            <p>
                <hr>
                1. table fi_barang <br>
    id_brg       : mencakup id barang, dan menjadi primary key bagi tabel fi_barang <br>
    kode         : mencakup kode barang, agar lebih mudah membedakan barang apa yang akan dijual <br>
    id_kat       : id_kat di ambil dari tabel fi_kat <br>
    nama_brg     : memuat nama barang, barang apa yang akan di jual <br>
    harga        : tabel harga berisi nilai harga dari setiap barang yang dijual <br>
    stock        : tabel stock berisi nilai stock dari setiap barang <br>
    waktu        : berisi tabel waktu data di update <br>
    deskripsi    : berisi tentang penjelasan dari setiap barang <br>
    p            : tabel ini menentukan data di tampilkan atau tidak. <br>
            </p>
            <p><a href="#" target= "blank" title = "tombol tutorial" class="btn btn-lg btn-primary">learn more</a></p>
		</div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>