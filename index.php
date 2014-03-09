<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KillDJ</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<?php include "menu.php"; 
		if(@$_GET['type'] == 'alta');
			include "alta.php";
		?>
	</header>
	
</body>
</html>