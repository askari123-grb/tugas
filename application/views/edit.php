<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit</title>
</head>
<body>
	<h3>Halaman Edit</h3>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
	<table>
		<tr>
			<td>nim</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?php echo $querytampilDetail->nim ?>" readonly></td>
		</tr>
		<tr>
			<td>namapegawi</td>
			<td>:</td>
			<td><input type="text" name="namapegawai" value="<?php echo $querytampilDetail->namapegawai ?>"></td>
		</tr>
		<tr>
			<td>status</td>
			<td>:</td>
			<td><input type="text" name="status" value="<?php echo $querytampilDetail->status ?>"></td>
		</tr>
		<tr>
			<td>almat</td>
			<td>:</td>
			<td><input type="text" name="alamat" value="<?php echo $querytampilDetail->alamat ?>"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Update Data</button></td>
		</tr>
	</table>
	</form>
</body>
</html>