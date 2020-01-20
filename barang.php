<?php include "config/koneksi.php" ?>
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
        <h2>List Data Barang</h2>
        <table>
            <td><a href="tambahbrg.php" style='float:left;' class="btn btn-primary">Tambah Barang</a></td> 
            <!-- <td><input type="submit" style='float:right;' class="btn btn-primary" value="Cari"> &nbsp; </td>
            <td><input type="text" style='float:right;' class="form-control" style= width:200px  margin-bottom:5px></td> -->
        </table>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th><th>Kode</th><th>Nama Barang</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                    if ($find_db) {
                        
                        $hasil = mysqli_query($connect_db,"SELECT * FROM fi_barang JOIN fi_kat ON fi_barang.id_kat = fi_kat.id_kat");
                    
                        while ($r = mysqli_fetch_array($hasil)) {
                            echo "
                            <tbody>
                                <tr>
                                    <td>$no</td> <td>$r[kode]</td> <td>$r[nama_brg]</td> <td>$r[kategori]</td> <td>$r[harga]</td> <td>$r[stock]</td> 
                                    <td><a href='editbrg.php?id=$r[id_brg]' class=btn btn-primary>Edit</a> | <a href='brghapus.php?id=$r[id_brg]' class=btn>Hapus</a></td>
                                </tr>
                            </tbody>";
                         $no++;
                          
                        }
                        mysqli_close($connect_db);
                      }else {
                        echo "Database Tidak Ada";
                        mysqli_close($connect_db);
                      }
                ?>
            </tbody>
        </table>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>