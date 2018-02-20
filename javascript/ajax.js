//Inspecciona la url para obtener su valor
//ej ==> www.algo.com?valor=ejemplo
$.request = function(parametro){
	var results = new RegExp('[\?&]' + parametro + '=([^&#]*)').exec(window.location.href)
	return decodeURI(results[1])
}

//Marca la serie como pendiente
$(document).ready(function(){
    $("#pendiente").click(function(){
	$.get("../controlador/agregar.php",{serie:$.request('anime'),estado:"pendiente"}, function(respuesta){
		//TODO -->Cambiar icono de agregar
	})
    })
})

//Marca la serie como terminada
$(document).ready(function(){
    $("#terminada").click(function(){
	$.get("../controlador/agregar.php",{serie:$.request('anime'),estado:"terminada"}, function(respuesta){
		//TODO -->Cambiar icono de agregar
	})
    })
})

//Escribe el comentario en la bbdd
$(document).ready(function(){
    $("#comentar").click(function(){
	$.get("../controlador/comentar.php",{serie:$.request('anime'),capitulo:$.request('cap'),comentario:$('#comentario').val()}, function(respuesta){
		//TODO
	})
    })
})

