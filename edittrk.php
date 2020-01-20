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
        
        $query = "SELECT * FROM fi_trx WHERE id_trx = '$_GET[id]'";
        $edit = mysqli_query($connect_db,$query);
        while($t=mysqli_fetch_array($edit)){
    ?>
    <form action="trktambah.php" method="post" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $t['id_trx'];?>">
		<div class="container">
        <center><h3>Input Data Barang Baru</h3></center><br/>
			<div class="form-group">
				<label class="control-label col-sm-2">
					ID Member :
				</label>
				<div class="col-sm-4">
					<select class='form-control' name="idmbr" onchange = "changeValue(this.value)">
						<option value=0>Silahkan Pilih</option>
                        <?php
                        $tampil=mysqli_query($connect_db,"SELECT * FROM fi_member ORDER BY id_mbr");
                            if ($t['id_mbr']==0){
                                echo "<option value=0 selected>- Pilih Kategori -</option>";
                              }
                    
                              while($w=mysqli_fetch_array($tampil)){
                                if ($t['id_mbr']==$w['id_mbr']){
                                  echo "<option value=$w[id_mbr] selected>$w[id_mbr]</option>";
                                }
                                else{
                                  echo "<option value=$w[id_mbr]>$w[id_mbr]</option>";
                                }
                                
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
					<select class='form-control' name="idbrg" onchange="document.getElementById('prd_name').value = prdName[this.value]">
						<option value=0>Silahkan Pilih</option>
                        <?php
                           $tampil=mysqli_query($connect_db,"SELECT * FROM fi_barang ORDER BY id_brg");
                           if ($t['id_brg']==0){
                               echo "<option value=0 selected>- Pilih Kategori -</option>";
                             }
                   
                             while($w=mysqli_fetch_array($tampil)){
                               if ($t['id_brg']==$w['id_brg']){
                                 echo "<option value=$w[id_brg] selected>$w[id_brg]</option>";
                               }
                               else{
                                 echo "<option value=$w[id_brg]>$w[id_brg]</option>";
                               }
                               
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
					<input type="text" name="harga" class="form-control" value = "<?php echo" $t[harga]";?>" id="prd_name">
				</div>
            </div>
            
            <div class="form-group">
				<label class="control-label col-sm-2">
					Ongkir :
				</label>
				<div class="col-sm-4">
					<input type="text" name="ongkir" class="form-control" value = "<?php echo" $t[ongkir]";?>">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Nama :
				</label>
				<div class="col-sm-4">
					<input type="text" name="nama" class="form-control" value = "<?php echo" $t[nama]";?>" id="nama">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Alamat :
				</label>
				<div class="col-sm-4">
					<input type="text" name="alamat" class="form-control" value = "<?php echo" $t[alamat]";?>" id="alamat">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Terkirim :
				</label>
				<div class="col-sm-4">
					<input type="date" name="tgltrx" class="form-control" value = "<?php echo" $t[tgl_trx]";?>">
				</div>
            </div> 

            <div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Bayar :
				</label>
				<div class="col-sm-4">
					<input type="date" name="tglbyr" class="form-control" value = "<?php echo" $t[tgl_byr]";?>">
				</div>
            </div> 
            
            <div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Kirim :
				</label>
				<div class="col-sm-4">
					<input type="date" name="tglkrm" class="form-control" value = "<?php echo" $t[tgl_kirim]";?>">
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
    <?php } ?>
    
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