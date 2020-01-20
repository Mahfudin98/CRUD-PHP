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
    <?php
        
        $query = "SELECT * FROM fi_kat WHERE id_kat = '$_GET[id]'";
        $edit = mysqli_query($connect_db,$query);
        while($t=mysqli_fetch_array($edit)){
    ?>
    <form action="katupdate.php" method="post" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $t['id_kat'];?>">
		<div class="container">
        <center><h3>Edit Data Kategori Barang Baru</h3></center><br/>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama Kategori :
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="kategori" value="<?php echo $t['kategori'];?>">
				</div>
            </div>

        <input style='float:right;' type="submit" class="btn btn-success" value="Simpan" name="simpan">
        <input style='float:right;' class='btn btn-danger' type=button value=Batal onclick=self.history.back()>
        </div>				
	</form>	
    <?php } ?>
</body>
</html>