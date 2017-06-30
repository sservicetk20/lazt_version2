$.fn.editable.defaults.mode = 'inline';
$.fn.editable.defaults.ajaxOptions = {type: 'PUT' };


$(document).ready(function(){
    
	$(".select-plan").editable({
	    source:[
		{value:"gratuito",text:"Gratuito"},
		{value:"trimestral", text: "Trimestral"},
		{value:"perpetuo", text: "Perpetuo"},
		]
	});

	$(".select-status").editable({
		source:[
		{value:"creado",text:"Vigente"},
		{value:"enviado", text: "Cancelado"},
		]
	});
	
	
});