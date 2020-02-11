<?php
	include('crudmhs.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Cari Mahasiswa</h2>
	Masukan NIM
	<form action="bacamhs4.php" method="post">
		<input type="text" name="nim">
		<input type="submit" name="submit" value="cari">
	</form>
	<?php
		//Latihan
		if(isset($_POST['nim'])){
			$nim = $_POST['nim'];
			$data = cariMhsDariNim($nim);
			if($data == null){
				echo "Tidak ada data mahasiswa";
			}else{
				?>
				<table border="1">
					<tr>
						<th>NIM</th>
						<th>Nama</th>
						<th>JenisKelamin</th>
					</tr>
				<?php 
					foreach($data as $mhs){
						$nim = $mhs['nim'];
						$nama = $mhs['nama'];
						$kelamin = $mhs['kelamin'];
						echo "
							<tr>
								<td>$nim</td>
								<td>$nama</td>
								<td>$kelamin</td>
							</tr>
						";
					}
					echo '</table>';
			}
		}
	?>
</body>
</html> 
