<html>
<head>
<title>Entri Barang</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
	body{
		padding-top: 25px;
	}
</style>
</head>
<body>
<h1 align="center">Entri Barang</h1>
	<form method="post" action="">
		
	    <div class="form-group row">
			 <label class="col-sm-2 col-form-label" >Nama Barang</label>
		 	 <div class="col-sm-10">
	      	   <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
		     </div>
	    </div>

	     <div class="form-group row">
			 <label class="col-sm-2 col-form-label" >Stok</label>
		 	 <div class="col-sm-10">
	      	   <input type="text" class="form-control" name="stok" placeholder="Stok">
		     </div>
	    </div>

	     <div class="form-group row">
			 <label class="col-sm-2 col-form-label" >Harga</label>
		 	 <div class="col-sm-10">
	      	   <input type="text" class="form-control" name="harga" placeholder="Harga">
		     </div>
	    </div>

	    <div class="form-group row">
	    	 <label class="col-sm-2 col-form-label" ></label>
					<div class="col-sm-10">
						<div class="form-group>">
							<button type="submit" value="update" name="submit" class="btn btn-success">Simpan</button>
						</div>
					</div>
		</div>
		
</form>
<?php

		if(isset($_POST['submit'])){
			include 'koneksi.php'; 
			$q=mysqli_query($db, "insert into tb_barang(nama_barang,stok,harga) values('$_POST[nama_barang]','$_POST[stok]','$_POST[harga]')");
			if($q)
			echo "<script>window.location='?p=barang'</script>";
		}
?>
</div>
</body>
</form>