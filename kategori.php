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
        <h2>List Kategori Barang</h2>
        <table>
            <td><a href="tambahkat.php" style='float:left;' class="btn btn-primary">Tambah Kategori</a></td> 
            <!-- <td><input type="submit" style='float:right;' class="btn btn-primary" value="Cari"> &nbsp; </td>
            <td><input type="text" style='float:right;' class="form-control" style= width:200px  margin-bottom:5px></td> -->
        </table>
        <br>
        <table class="table-bordered">
            <thead>
                <tr>
                    <th>&nbsp;No &emsp;</th><th>&nbsp;Nama Kategori &emsp;</th><th>&nbsp;Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                    if ($find_db) {
                        
                        $hasil = mysqli_query($connect_db,"SELECT * FROM fi_kat");
                    
                        while ($r = mysqli_fetch_array($hasil)) {
                            echo "
                            <tbody>
                                <tr>
                                    <td>&nbsp;$no</td> <td>&nbsp;$r[kategori]</td>
                                    <td>&nbsp;<a href='editkat.php?id=$r[id_kat]' class=btn btn-primary>Edit</a> | <a href='kathapus.php?id=$r[id_kat]' class=btn>Hapus</a></td>
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
    </div><br>
    <?php include "footer.php"; ?>
</body>
</html>