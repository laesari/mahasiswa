<!DOCTYPE html>
<html>
<body>
	<h2>Cari Mahasiswa</h2>
	<form action="carimhs.php" method="get">
		Cari<input type="text" name="nim">
		<input type="submit" name="cari" value="cari">
	</form>
	<?php
		include('crudmhs.php');
		$nim = $_GET['nim']; // contoh nim yang dicari
		$hasil = cariMhs($nim);
		$jk = $hasil['kelamin'];
		
		if($hasil != null){
			echo '<br>Data Mahasiswa <br><br>';
			echo 'Nim: '.$hasil['nim'].'<br>';
			echo 'Nama: '.$hasil['nama'].'<br>';
			if ($jk == 'P'){
				$jk='Perempuan';
			}
			else{
				$jk='Laki-Laki';
			}
			echo 'Jenis kelamin: '.$jk.'<br>';
			echo 'Jurusan: '.$hasil['jurusan'];
		}
		else {
			echo 'Tidak ada data';
		}
	?>
</body>
</html> 