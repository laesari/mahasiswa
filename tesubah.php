<!DOCTYPE html>
<html>
<body>
	<?php
		include('crudmhs.php');
		$nim = "173310187";
		$nama = "Adlu fahir";
		$kelamin = "L";
		$jurusan = "TI";
		$hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);
		if($hasil == true){
			echo "Berhasil";
		}else{
			echo "Error";
		}
	?>
</body>
</html> 