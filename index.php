<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<title>KillDJ - Music for Real People</title>
	<link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/favicon3.png" />
</head>
<body>
	<header>
		<?php include "menu.php"; 
		if(@$_GET['type'] == 'alta');
			include "alta.php";
		?>
	</header>
	
</body>
<script src = "MyScript.js"></script>
</html>