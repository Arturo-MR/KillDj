function validar(form, object){

	if (form == null || form =='') {
		alert("introduce "+object);
		document.formulario.id.focus();
		return false;

	};
	return true;
}

function validaFormulario(){

	var id = document.forms['formulario'] ['id'].value;
	var banda = document.forms['formulario']['band'].value;
	var album = document.forms['formulario']['album'].value;
	var year = document.forms['formulario']['year'].value;
	var pais = document.forms['formulario']['pais'].value;

	validar(id,'id');
	validar(banda,'banda');
	validar(album,'album');
	validar(year,'year');
	validar(pais,'pais');

};