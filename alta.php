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
    	<input type = "text" name = "release" size = "25" maxlength = "4" required pattern="[0-9]{4}" title="Just 4 Numbers"></p>
			<p><label>Género(s)</label></p>
			<p><label>País</label></p>
			<p><label>Precio</label></p>
            <p>
      <label>Album Artwork</label>
      	<input type="file" name="artwork" id="artwork" /></p>
</div>
<button id = "boton">Submit</button>
</form>
