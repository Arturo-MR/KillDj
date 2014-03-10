// JavaScript Document


(function(){
	var id, button;
	id = document.getElementById("id");
	button = document.getElementById("boton");
	
	button.addEventListener("click", clicked);
	function clicked(){
		var numbers = [];
		numbers = id.split('');
		alert(id[1].value);
	}

})();