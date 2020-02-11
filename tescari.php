<!DOCTYPE html>
<html>
<body>
	<?php
		include('crudmhs.php');
		$kondisi = "jurusan = 'TI' && kelamin='P'";
		$data = cariSemuaMhs($kondisi);
		if($data != null){
			foreach($data as $mhs){
				$nim = $mhs['nim'];
				$nama = $mhs['nama'];
				echo "$nim, $nama <br>";
			}
		}
		else {
			echo 'Tidak ada data';
		}
	?>
</body>
</html> 