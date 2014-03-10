<?php include "config.php"; ?>
<link rel="stylesheet" href="css/styles.css">
<form action="" method="post" enctype="multipart/form-data">
<div class="tabla">
	  <p>
	  <label>ID</label>
		<input name="id" type="text" id="id" size="25" maxlength="10" required pattern=".{4,}[0-9]{6}" title="Remember the ID's standard: 4 Characters, 6 Numbers"/>
      <label>Band/Artist</label>
		<input name="band" type="text" id="band" size="25" maxlength="100" required>
       <label>Album</label>
		<input name="album" type="text" id="album" size="25" maxlength="100" required></p>
	  <p>
      	<label>Year of Release</label>
		<select name="year" id="year">
			<?php 


				for($i=2014;$i>=1930;$i--){
			?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
		</select>
    </p>
			<p><label>Género(s)</label></p>
			<p><label>País</label></p>
			<select name="pais" id="pais">
				<?php 
					$sql = mysql_query("SELECT * FROM paises");
					while($row = mysql_fetch_object($sql)){
				?>
				<option value="<?php echo $row->pais; ?>"><?php echo utf8_encode($row->pais); ?></option>
				<?php } ?>
			</select>
			<p><label>Precio</label></p>
            <p>
      <label>Album Artwork</label>
      	<input type="file" name="artwork" id="artwork" /></p>
</div>
<button id = "boton">Submit</button>
</form>
