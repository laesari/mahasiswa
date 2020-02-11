<?php
	require_once("crudmk.php");
?>
<!DOCTYPE html>
<html>
<head>
        <title>Daftar Matakuliah</title>
</head>
<body>
    <h2>Daftar Matakuliah</h2>
    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>SKS</th>
        </tr>
        <?php
			$data = bacasemuaMK();
			if($data == null){
				echo "Tidak ada data matakuliah";
			}else{
				foreach($data as $mk){
					$kode = $mk['kode'];
					$nama = $mk['nama'];
					$sks = $mk['sks'];
					echo "
					<tr>
						<td>$kode</td>
						<td>$nama</td>
						<td>$sks</td>
					</tr>";
				} 
				echo '</table>';
			}
		?>
    </body>
</html> 