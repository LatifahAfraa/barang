
<center><h2>List Data Barang</h2></center>
<a href="?p=tambah_barang" class="btn btn-primary" > <span> <i class="fa fa-plus-circle "></i></span><span><i class="text"></i> Tambah Barang</span></a><br><br>
<table  id="example1" class="table table-hover table table-bordered" >
	<thead>
	<tr>
		<th>No</th>
		<th>Id Barang</th>
		<th>Nama Barang</th>
		<th>stok</th>
		<th>Harga</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		include 'koneksi.php';
		$data=mysqli_query($db, "select * from tb_barang where id_barang order by tb_barang.id_barang ASC");
		$no=1;
		while($row=mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $row['id_barang']; ?></td>
		<td><?= $row['nama_barang']; ?></td>
		<td><?= $row['stok']; ?></td>
		<td>Rp.<?= number_format($row['harga'],2); ?></td>
		<td>
			<a href="delete_barang.php?id=<?=$row['id_barang'] ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></a>
			|
			<a href="index.php?p=edit_barang&id=<?=$row['id_barang'] ?>" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
		</td>
	</tr>
	<?php
		$no++;
	}
	?>
</table>
</tbody>