$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
	url: 'buscar.php',
	type: 'POST',
	datatype: 'html',
	data: {consulta: consulta},
})

.done(function(respuesta){
	$("#datos").html(respuesta);

})
.fail(function() {
	console.log("error");
})

}