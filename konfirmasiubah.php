<!DOCTYPE html>
<?php
	include('crudmhs.php');
?>
<html>
<body>
	<h2>Pengubahan Data Mahasiswa</h2>
	<form action = "prosesubah.php" method="post">
		<?php
			$nim = $_GET['nim'];
			$data = cariMhs($nim);
			function cekkelamin ($kelamin, $kel){
				if ($kelamin == $kel){
					echo "checked = 'checked'";
				}
			}
			function cekjurusan ($jurusan, $jur){
				if ($jurusan == $jur){
					echo "checked = 'checked'";
				}
			}
		?>
		NIM : <?php echo $nim ?><br>
		Nama <input type="text" name="nama" value="<?php echo $data['nama']?>"><br>
		Jenis Kelamin
		<input type="radio" name="kelamin" value="L" <?php cekkelamin($data['kelamin'],'L');?>>Laki-laki
		<input type="radio" name="kelamin" value="P" <?php cekkelamin($data['kelamin'],'P');?>>Perempuan<br>
		Jurusan
		<input type="radio"  name="jurusan" value="TI" <?php cekjurusan($data['jurusan'],'TI');?>>TI
		<input type="radio"  name="jurusan" value="SI" <?php cekjurusan($data['jurusan'],'SI');?>>SI
		<input type="radio"  name="jurusan" value="MI" <?php cekjurusan($data['jurusan'],'MI');?>>MI
		<input type="radio"  name="jurusan" value="KA" <?php cekjurusan($data['jurusan'],'KA');?>>KA
		<input type="radio"  name="jurusan" value="TK" <?php cekjurusan($data['jurusan'],'TK');?>>TK<br>
		<input type="submit" name="submit" value="OK">
		<input type="submit" name="submit" value="Batal">
	</form>
</body>
</html>
