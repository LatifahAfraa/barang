<?php
include 'koneksi.php';
$q=mysqli_query($db, "DELETE FROM tb_chart WHERE id_chart='$_GET[id]'");
if($q)
	header('location:index.php?p=chart'); //redirect
?>