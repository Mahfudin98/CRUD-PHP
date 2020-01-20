<?php include "config/koneksi.php"; ?>
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
        <h2>List Data Member</h2>
        <table>
            <td><a href="tambahmbr.php" style='float:left;' class="btn btn-primary">Tambah Member</a></td> 
        </table>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th><th>ID Member</th><th>Nama</th><th>E-mail</th><th>Password</th><th>Tanggal Daftar</th><th>Alamat</th><th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                    if ($find_db) {
                        
                        $hasil = mysqli_query($connect_db,"SELECT * FROM fi_member");
                    
                        while ($r = mysqli_fetch_array($hasil)) {
                            echo "
                            <tbody>
                                <tr>
                                    <td>$no</td> <td>$r[id_mbr]</td> <td>$r[nama]</td> <td>$r[email]</td> <td>$r[pass]</td> <td>$r[tgl_dftr]</td> <td>$r[alamat]</td> 
                                    <td><a href='editmbr.php?id=$r[id_mbr]' class=btn btn-primary>Edit</a> | <a href='mbrhapus.php?id=$r[id_mbr]' class=btn>Hapus</a></td>
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
    <?php include "footer.php";?>
</body>
</html>