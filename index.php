<!DOCTYPE html>
<?php
	include("config.php");
?>
<html lang="en">
<head>	

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>KillDJ - Music for Real People</title>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<header class="header relative border-bottom">
		<a href="" class="button-menu icon-menu"></a>
		<nav class="menu">
			<ul class="list">
				<li class="item">
					<a href="#">New</a>
				</li>
				<li class="item">
					<a href="#">Change</a>
				</li>
				<li class="item">
					<a href="#">Delete</a>
				</li>
			</ul>
		</nav>
		<div class="title">
			<span>
				Home
			</span>
		</div>
	<?php
		$sql = mysql_query("SELECT * FROM discos WHERE id");

		while ($row = mysql_fetch_object($sql)) {
	 ?>
	<section class="container">
		<article class="band">
			<figure class="portada">
				<img src="images/<?php echo $row->portada; ?>" width="128" height="128" alt="Portada"/>
			</figure>
			<div class="left">
				<p class="banda">
					<?php echo $row->album; ?>
				</p>
				<p class="banda">
					<?php echo $row->grupo; ?>
				</p>
			</div>
			<div class="right">
				<div class="etiqueta">
					<?php echo $row->genero; ?>
				</div>
				<div class="etiqueta">
					<?php echo $row->salida; ?>
				</div>
				<div class="etiqueta">
					<?php echo $row->pais; ?>
				</div>
				<div class="etiqueta">
					<?php echo $row->precio; ?>
				</div>
			</div>

		</article>
	</section>
	<hr>
	<?php } ?>

	


	
</body>
<script src = "MyScript.js"></script>
</html>