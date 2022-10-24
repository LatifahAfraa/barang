<html>
<head>
<title>Entri Chart</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
	body{
		padding-top: 25px;
	}
</style>
</head>
<body>

<h1 align="center">Entri Chart</h1>
	<form method="post" action="">

		
		
	    <div class="form-group row">
			 <label class="col-sm-2 col-form-label" >Jumlah</label>
		 	 <div class="col-sm-10">
	      	   <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
		     </div>
	    </div>

	    <?php
		include 'koneksi.php';
        $data = $db->query("SELECT * FROM tb_barang");
         
	     ?>
	    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Id Barang</label>
    <div class="col-sm-10">
    	<select class="custom-select mr-sm-2 form-control" name="barang">
        <?php
        
        foreach($data as $key => $value){
         ?>
        	<option value="<?= $value['id_barang'] ?>"><?= $value['nama_barang']?></option>
        <?php
        }
       ?>

        </select>
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
		$data = $db->query("SELECT * FROM tb_barang where id_barang='$_POST[barang]'")->fetch_array();
		$total_harga = $_POST['jumlah'] * $data['harga'];
			$q=mysqli_query($db, "insert into tb_chart(id_barang,jumlah,total_harga) values('$_POST[barang]','$_POST[jumlah]','$total_harga')");
			if($q)
			echo "<script>window.location='?p=chart'</script>";
		}
?>
</div>
</body>
</form>