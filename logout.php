<!DOCTYPE html>
<html>
	<body>
		<?php
			session_start();
			// menghapus semua variabel sesi
			session_unset(); 
			// menghancurkan sesi 
			session_destroy();
			header("Location: login.php"); 
		?>
	</body>
</html>