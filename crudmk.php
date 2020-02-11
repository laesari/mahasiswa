<!DOCTYPE html>
<html>
<body>
	<?php
		require_once ("koneksiakad.php");
		function bacaMtKuliah($sql){
			$data = array();
			$koneksi = koneksiAkademik();
			$hasil = mysqli_query($koneksi, $sql);
			if (mysqli_num_rows($hasil) == 0) {
				mysqli_close($koneksi);
				return null;
			}
			$i=0;
			while($baris = mysqli_fetch_assoc($hasil)){
				$data[$i]['kode']= $baris['kode'];
				$data[$i]['nama'] = $baris['nama'];
				$data[$i]['sks'] = $baris['sks'];
				$i++;
			}
			mysqli_close($koneksi);
			return $data;
		} 
		function tambahMtKuliah($kode, $nama, $sks){
			$koneksi = koneksiAkademik();
			$sql = "insert into matakuliah values('$kode', '$nama', '$sks')";
			$hasil = 0;
			if(mysqli_query($koneksi, $sql))
				$hasil = 1;
			mysqli_close($koneksi);
			return $hasil;
		}
		// menghapus 1 record berdasar field kunci nim
		function hapusMtKuliah($kode){
			$koneksi = koneksiAkademik();
			$sql = "delete from matakuliah where nim='$kode'";
			if (!mysqli_query($koneksi, $sql)){
				die('Error: ' . mysqli_error());
			}
			$hasil = mysqli_affected_rows($koneksi);
			mysqli_close($koneksi);
			return $hasil;
		}	
		function bacasemuaMK(){
			return bacaMtKuliah("SELECT * FROM matakuliah");
		}
	?>
</body>
</html>