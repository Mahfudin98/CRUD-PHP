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

    <?php $query = "SELECT * FROM fi_member WHERE id_mbr = '$_GET[id]'";
        $edit = mysqli_query($connect_db,$query);
        while($t=mysqli_fetch_array($edit)){ ?>

    <form action="mbrtambah.php" method="post" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $t['id_mbr'];?>">
		<div class="container">
        <center><h3>Input Data Member Baru</h3></center><br/>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama :
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nama" value=<?php echo $t['nama'];?>>
				</div>
            </div>

			<div class="form-group">
				<label class="control-label col-sm-2">
					E-mail :
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="email" value = <?php echo $t['email']; ?>>
				</div>
            </div>
            
            <div class="form-group">
				<label class="control-label col-sm-2">
					Password :
				</label>
				<div class="col-sm-4">
					<input type="text" name="pass" class="form-control" value = <?php echo $t['pass']; ?>>
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Alamat :
				</label>
				<div class="col-sm-4">
					<input type="text" name="alamat" class="form-control" value = <?php echo $t['alamat']; ?>>
				</div>
            </div>

        <input style='float:right;' type="submit" class="btn btn-success" value="Simpan" name="submit">
        <input style='float:right;' class='btn btn-danger' type=button value=Batal onclick=self.history.back()>
        </div>				
	</form>	
        <?php } ?>
</body>
</html>