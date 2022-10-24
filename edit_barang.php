<html>
<head>
<title>Edit Barang</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
	body{
		padding-top: 25px;
	}
</style>
</head>
<body>
<h1 align="center">Edit Barang</h1>
<?php
include 'koneksi.php';
$ambil=mysqli_query($db, "select * from tb_barang where id_barang='$_GET[id]'");
$data=mysqli_fetch_array($ambil);
?>
	<form method="post" action="">
		
	    <div class="form-group row">
			 <label class="col-sm-2 col-form-label" >Nama Barang</label>
		 	 <div class="col-sm-10">
	      	   <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>" class="form-control"   placeholder="Nama Barang">
		     </div>
	    </div>
		

	    <div class="form-group row">
			 <label class="col-sm-2 col-form-label" >Stok</label>
		 	 <div class="col-sm-10">
	      	   <input type="text" name="stok" value="<?=$data['stok']?>" class="form-control"   placeholder="Stok">
		     </div>
	    </div>

	    <div class="form-group row">
			 <label class="col-sm-2 col-form-label" >Harga</label>
		 	 <div class="col-sm-10">
	      	   <input type="text" name="harga" value="<?=$data['harga']?>" class="form-control"   placeholder="Harga">
		     </div>
	    </div>

	    <div class="form-group row">
	    	 <label class="col-sm-2 col-form-label" ></label>
					<div class="col-sm-10">
						<div class="form-group>">
							<button type="submit" class="btn btn-success" name="submit">Simpan</button>
						</div>
					</div>
		</div>
		
</form>
<?php

		if(isset($_POST['submit'])){
			$q=mysqli_query($db, "update tb_barang set 
			nama_barang='$_POST[nama_barang]',
			stok='$_POST[stok]',
			harga='$_POST[harga]' where id_barang='$_GET[id]'");

			if($q)
				echo "<script>window.location='?p=barang'</script>";
		}
?>
</div>
</body>
</form>