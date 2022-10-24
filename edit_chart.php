<html>
<head>
<title>Edit Chart</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
	body{
		padding-top: 25px;
	}
</style>
</head>
<body>
<h1 align="center">Edit Chart</h1>
<?php
include 'koneksi.php';
$ambil=mysqli_query($db, "select * from tb_chart where id_chart='$_GET[id]'");
$data=mysqli_fetch_array($ambil);

?>
	<form method="post" action="">
		
	    <div class="form-group row">
			 <label class="col-sm-2 col-form-label" >Jumlah</label>
		 	 <div class="col-sm-10">
	      	   <input type="text" name="jumlah" value="<?=$data['jumlah']?>" class="form-control">
		     </div>
	    </div>
    

	     <?php
		include 'koneksi.php';
        $data2 =mysqli_query($db,"SELECT * FROM tb_barang");
         
	     ?>
	    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Id Barang</label>
    <div class="col-sm-10">
    	<select class="custom-select mr-sm-2 form-control" name="barang">
        <option >--Pilih--</option>
        <?php
        
        foreach($data2 as $key => $value){
         ?>
        	<option value="<?= $value['id_barang'] ?>" <?= $value['id_barang']==$data['id_barang']?'selected':'' ?>><?= $value['nama_barang']?></option>
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
							<button type="submit" class="btn btn-success" name="submit">Simpan</button>
						</div>
					</div>
		</div>
		
</form>
<?php

		if(isset($_POST['submit'])){
		include 'koneksi.php'; 
		$data3 = $db->query("SELECT * FROM tb_barang where id_barang='$_POST[barang]'")->fetch_array();
		$total_harga = $_POST['jumlah'] * $data3['harga'];

			$q=mysqli_query($db, "update tb_chart set id_barang='$_POST[barang]',jumlah='$_POST[jumlah]',total_harga= '$total_harga' where id_chart = '$_GET[id]'");
			if($q)
			echo "<script>window.location='?p=chart'</script>";
			
		}
?>
</div>
</body>
</form>