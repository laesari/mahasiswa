<?php
	require_once("crudmk.php");
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Tambah Data Matakuliah</h2>
	<form action="prosestambahmk.php" method="POST">
		<table border="0">
			<tr>
				<td>Kode</td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>sks</td>
				<td><input type="numeric" name="sks" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
    </body>
</html> 