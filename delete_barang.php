<?php
include 'koneksi.php';
$q=mysqli_query($db, "DELETE FROM tb_barang WHERE id_barang='$_GET[id]'");
if($q)
	header('location:index.php?p=barang'); //redirect
?>