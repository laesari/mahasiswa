<!DOCTYPE html>
<html>
<body>
	<?php
		include('crudmhs.php');
		$submit = $_POST['submit'];
		if($submit=="OK"){
			$nim = $_GET['nim'];
			$nama = $_POST['nama'];
			$kelamin = $_POST['kelamin'];
			$jurusan = $_POST['jurusan'];
			$hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);
			header ("Location : bacamhs2.php");
		}
		else {
			header ("Location : ubahmhs.php");
		}
	?>
</body>
</html> 