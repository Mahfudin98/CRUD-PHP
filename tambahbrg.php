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
    <form action="brgtambah.php" method="post" class="form-horizontal">
		<div class="container">
        <center><h3>Input Data Barang Baru</h3></center><br/>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Kode Barang :
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="kode" placeholder="Nama Barang Yang Akan Diinput">
				</div>
            </div>

			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama Barang :
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="barang" placeholder="Nama Barang Yang Akan Diinput">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Kategori :
				</label>
				<div class="col-sm-4">
					<select class='form-control' name="kategori">
						<option value=0>Silahkan Pilih</option>
                        <?php
                            $tampil=mysqli_query($connect_db,"SELECT * FROM fi_kat ORDER BY kategori");
							while($r=mysqli_fetch_array($tampil)){
							  echo "
							  <option value=$r[id_kat]>$r[kategori]</option>
							  ";
							}
                        ?>
					</select>
				</div>
			</div>
            
            <div class="form-group">
				<label class="control-label col-sm-2">
					Stok :
				</label>
				<div class="col-sm-4">
					<input type="text" name="stok" class="form-control" placeholder="Stok Yang Akan Diinput">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Harga :
				</label>
				<div class="col-sm-4">
					<input type="text" name="harga" class="form-control" placeholder="Harga Yang Akan DiInput">
				</div>
            </div>

			<!-- <div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Masuk :
				</label>
				<div class="col-sm-4">
					<input type="date" name="tgl" class="form-control">
				</div>
            </div> -->
        <input style='float:right;' type="submit" class="btn btn-success" value="Simpan" name="submit">
        <input style='float:right;' class='btn btn-danger' type=button value=Batal onclick=self.history.back()>
        </div>				
	</form>	
</body>
</html>