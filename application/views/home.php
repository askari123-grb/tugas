<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Data pegawai</h1>

	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Data</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nim</td>
			<td>namapegawai</td>
			<td>status</td>
			<td>alamat</td>
			<td>Aksi</td>
		</tr>
		<?php 
			$count = 0;
			foreach ($queryAlltampil as $row) {
				$count = $count + 1;
		 ?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->nim ?></td>
			<td><?php echo $row->namapegawai ?></td>
			<td><?php echo $row->status ?></td>
			<td><?php echo $row->alamat ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->nim ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>