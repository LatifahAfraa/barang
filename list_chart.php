<center><h2>List Data Chart</h2></center>
<a href="?p=tambah_chart" class="btn btn-primary" > <span> <i class="fa fa-plus-circle "></i></span><span><i class="text"></i> Tambah Chart</span></a><br><br>
<table  id="example1" class="table table-hover table table-bordered" >
	<thead>
	<tr>
		<th>No</th>
		<th>Id Chart</th>
		<th>Nama Barang</th>
		<th>Jumlah</th>
		<th>Total Harga</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		include 'koneksi.php';
		$data=mysqli_query($db, "select * from tb_barang,tb_chart where tb_chart.id_barang=tb_barang.id_barang order by tb_chart.id_chart ASC");
		$no=1;
		while($row=mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $row['id_chart']; ?></td>
		<td><?= $row['nama_barang']; ?></td>
		<td><?= $row['jumlah']; ?></td>
		<td>Rp.<?= number_format($row['total_harga'],2) ?></td>
		<td>
			<a href="delete_chart.php?id=<?=$row['id_chart'] ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger">Hapus <i class="fa fa-trash"></i></a>
			|
			<a href="index.php?p=edit_chart&id=<?=$row['id_chart'] ?>" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
		</td>
	</tr>
	<?php
		$no++;
	}
	?>
</table>
</tbody>