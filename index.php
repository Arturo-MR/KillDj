<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<title>KillDJ - Music for Real People</title>
	<link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/favicon5.png" />
    
</head>
<body>
	<header>
		<div id="logo"><a href="index.php"><img src="images/KillDJ, 3.png" fixed/></a></div>
		<?php include "menu.php"; 
		?>
	</header>
	<section>
		<?php
		if(@$_GET['type'] == 'new');
			include "alta.php"; ?>

	</section>
</body>
<script src = "MyScript.js"></script>
</html>