<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
	<h3>Tambah Data</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table>
		<tr>
			<td>nim</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Namapegawai</td>
			<td>:</td>
			<td><input type="text" name="namapegawai"></td>
		</tr>
		<tr>
			<td>status</td>
			<td>:</td>
			<td><input type="text" name="status"></td>
		</tr>
		<tr>
			<td>alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Tambah Data</button></td>
		</tr>
		<tr>
	</table>
	</form>
</body>
</html>