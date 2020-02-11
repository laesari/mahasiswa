<!DOCTYPE html>
	<?php
		include('crudmhs.php');
	?>
<html>
<body>
	<?php
		$submit = $_POST['submit'];
		$nim = $_GET['nim'];
		if($submit =='OK'){
			$hasil = hapusMhs($nim); 
			header("Location: bacamhs2.php");
		}else {
			header("Location: hapusmhs.php");
		}
	?>
</body>
</html> 