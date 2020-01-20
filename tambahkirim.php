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
    <form action="trktambah.php" method="post" class="form-horizontal">
		<div class="container">
        <center><h3>Input Data Kiriman Baru</h3></center><br/>
			<div class="form-group">
				<label class="control-label col-sm-2">
					ID Member :
				</label>
				<div class="col-sm-4">
                    <?php $tampil=mysqli_query($connect_db,"SELECT * FROM fi_member ORDER BY id_mbr");
                            $Array = "var prdMbr = new Array();";?>
					<select class='form-control' name="idmbr" onchange = "changeValue(this.value)">
						<option value=0>Silahkan Pilih</option>
                        <?php
                            
							while($r=mysqli_fetch_array($tampil)){
							  echo "
							  <option value=$r[id_mbr]>$r[id_mbr]</option>
                              ";
                              $Array .= "nama['" . $r['id_mbr'] . "'] = {satu :'" . addslashes($r['nama']) . "'};";
                              $Array .= "alamat['" . $r['id_mbr'] . "'] = {dua :'" . addslashes($r['alamat']) . "'};";
							}
                        ?>
					</select>
				</div>
            </div>

			<div class="form-group">
				<label class="control-label col-sm-2">
					ID Barang :
				</label>
				<div class="col-sm-4">
                    <?php  $tampil=mysqli_query($connect_db,"SELECT * FROM fi_barang ORDER BY id_brg");
                            $jsArray = "var prdName = new Array();"; ?>
					<select class='form-control' name="idbrg" onchange="document.getElementById('prd_name').value = prdName[this.value]">
						<option value=0>Silahkan Pilih</option>
                        <?php
                           
							while($r=mysqli_fetch_array($tampil)){
							  echo "
							  <option value=$r[id_brg]>$r[id_brg]</option>
                              ";
                              $jsArray .= "prdName['" . $r['id_brg'] . "'] = '" . addslashes($r['harga']) . "';";
                            }
                        ?>
					</select>
				</div>
            </div>
    
            <div class="form-group">
				<label class="control-label col-sm-2">
					Harga :
				</label>
				<div class="col-sm-4">
					<input type="text" name="harga" class="form-control" value = "" id="prd_name">
				</div>
            </div>
            
            <div class="form-group">
				<label class="control-label col-sm-2">
					Ongkir :
				</label>
				<div class="col-sm-4">
					<input type="text" name="ongkir" class="form-control" placeholder="Ongkir Yang Akan Diinput">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Nama :
				</label>
				<div class="col-sm-4">
					<input type="text" name="nama" class="form-control" value = "" id="nama">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Alamat :
				</label>
				<div class="col-sm-4">
					<input type="text" name="alamat" class="form-control" value = "" id="alamat">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Terkirim :
				</label>
				<div class="col-sm-4">
					<input type="date" name="tgltrx" class="form-control">
				</div>
            </div> 

            <div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Bayar :
				</label>
				<div class="col-sm-4">
					<input type="date" name="tglbyr" class="form-control">
				</div>
            </div> 
            
            <div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Kirim :
				</label>
				<div class="col-sm-4">
					<input type="date" name="tglkrm" class="form-control">
				</div>
            </div> 

            <div class="form-group">
				<label class="control-label col-sm-2">
				    Status :
				</label>
				<div class="col-sm-4">
                <select class='form-control' name="status">
						<option value=0>Silahkan Pilih</option>
							<option value="SUKSES">SUKSES</option>
                            <option value="TIDAK">TIDAK</option>
					</select>
				</div>
            </div>

        <input style='float:right;' type="submit" class="btn btn-success" value="Simpan" name="submit">
        <input style='float:right;' class='btn btn-danger' type=button value=Batal onclick=self.history.back()>
        </div>				
    </form>	
    
    <script type="text/javascript">  
                <?php echo $jsArray; ?>  
    </script>  
    <script type="text/javascript">  
                <?php echo $Array; ?>
                function changeValue(id){
                document.getElementById('nama').value = nama[id].satu;
                document.getElementById('alamat').value = alamat[id].dua;
                }  
    </script> 
</body>
</html>