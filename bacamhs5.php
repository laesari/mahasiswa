<?php
	include('crudmhs.php');
	if (array_key_exists('nim',$_POST))
		$nim = $_POST['nim'];
	else
		$nim ='';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Cari Mahasiswa</h2>
	Masukan NIM
	<form action="bacamhs5.php" method="post">
		<input type="text" name="nim">
		<input type="submit" name="submit" value="cari">
	</form>
	<?php
		$data = cariMhsDariNim($nim);
		$kelamin ='';
		if ($data['kelamin'] == 'p')
			$kelamin = 'Perempuan';
		else 
			$kelamin = 'Laki-laki';
		if ($data != null) {	
			echo "NIM : ".$data['nim'];
			echo "Nama : ".$data['nama'];
			echo "Jenis Kelamin : ".$kelamin;
			echo "Jurusan : ".$data['jurusan'];
		}
		else {
			echo "Tidak ada data mahasiswa";
		}
	?>
</body>
</html> 
