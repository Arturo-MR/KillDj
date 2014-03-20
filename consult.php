	<!-- <section>
		<?php
		// if(@$_GET['type'] == 'new');
		// 	include "alta.php"; ?>
			

	</section> -->
<!DOCTYPE html>
<html lang="en">
<?php
	include("config.php");
?>
<head>	
	<meta charset="UTF-8">
	<title>KillDJ - Consult</title>
	<link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/favicon5.png" />
    
</head>
<body>
	<header>
		<div id="logo"><a href="index.php"><img src="images/logo.png" fixed/></a></div>
		<h1>Consult</h1>
	</header>
	<?php include "menu.php"; 
		?>
		<section id= "caja">

		<?php
			$sql = mysql_query("SELECT * FROM discos WHERE id");

			while ($row = mysql_fetch_object($sql)) {
		 ?>
		 <p>
			<label><?php echo $row->id; ?></label>
			<label for="Matricula"><?php echo $row->grupo; ?></label>
			<label for="Matricula"><?php echo $row->album; ?></label>
			<label for="Matricula"><img src="images/<?php echo $row->portada; ?>"/></label>
			
			<label for="Matricula"><?php echo $row->salida; ?></label>
			<label for="Matricula"><?php echo $row->genero; ?></label>
			<label for="sexo"><?php echo $row->pais; ?></label>
			<label for="sexo"><?php echo $row->precio; ?></label>
		</p>
			

		<?php } ?>
	</section>
</body>
<script src = "MyScript.js"></script>
</html>