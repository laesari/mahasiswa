<!DOCTYPE html>
<?php
	include('crudmhs.php');
?>
<html>
<body>
	<?php
		$nim = $_GET['nim'];
		echo "Apakah anda akan menghapus mahasiswa dengan nim : $nim?";
	?>
	<form action = "proseshapus.php" method="post">
		<input type="submit" name="submit" value="OK">
		<input type="submit" name="cancel" value="Batal">
	</form>
</body>
</html> 