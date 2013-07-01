$("#nuevo-text").click(function(){
	var type='text';/*type of the widget*/

	var b1='<div class="modal-body">';
	var b2='</div>';	
	var b3='<div class="modal-footer">';
	var b4='<a data-dismiss="modal" class="btn btn-danger" href="#">Cerrar</a>';
	var b5='</div>';

	var ht1="<form id='ftext-"+cont+"' action='"+base_url+"index.php/objetivos/saveItem/"+id+"' method='POST'>"+b1+'<div class="control-group">';
	var ht2="<div class='controls'><input type='text' name='widget_nombre' placeholder='Nombre' /></div>";
	var ht3="<input type='hidden' value='"+type+"' name='type'><input type='hidden' value='"+id+"' name='obj_id'>";
	var ht4="<div class='controls'><textarea style='width:100%' name='descripcion' rows='7'></textarea></div></div>"+b2;

	var ht5=b3+"<input type='submit' class='btn btn-primary' value='Guardar' name='save-text'>"+b4+b5;

	var ht6="</form>";
	var html_div=ht1+ht2+ht3+ht4+ht5+ht6;
	$("#items").html(html_div);
	cont++;//Aumentar id del widget
});
/*$("#nuevo-comentario").click(function(){
	var type='comentario';

	var b1='<div class="modal-body">';
	var b2='</div>';	
	var b3='<div class="modal-footer">';
	var b4='<a data-dismiss="modal" class="btn btn-danger" href="#">Cerrar</a>';
	var b5='</div>';

	var ht1="<form id='ftext-"+cont+"' action='"+base_url+"index.php/objetivos/saveItem/"+id+"' method='POST'>"+b1+'<div class="control-group">';
	var ht2="<div class='controls'><input type='text' name='widget_nombre' placeholder='Nombre' /></div>";
	var ht3="<input type='hidden' value='"+type+"' name='type'><input type='hidden' value='"+id+"' name='obj_id'>";
	var ht4="<div class='controls'><textarea style='width:100%' name='cuerpo' rows='7'></textarea></div></div>"+b2;

	var ht5=b3+"<input type='submit' class='btn btn-primary' value='Guardar' name='save-comentario'>"+b4+b5;

	var ht6="</form>";
	var html_div=ht1+ht2+ht3+ht4+ht5+ht6;
	$("#items").html(html_div);
	cont++;//Aumentar id del widget
});*/
$("#nuevo-check").click(function(){
	var type='check';/*type of the widget*/

	var b1='<div class="modal-body">';
	var b2='</div>';	
	var b3='<div class="modal-footer">';
	var b4='<a data-dismiss="modal" class="btn btn-danger" href="#">Cerrar</a>';
	var b5='</div>';

	var ht1="<form id='ftext-"+cont+"' action='"+base_url+"index.php/objetivos/saveItem/"+id+"' method='POST'>"+b1+'<div class="control-group">';
	var ht2="<div class='controls'><input type='text' name='widget_nombre' placeholder='Nombre' /></div>";
	var ht3="<input type='hidden' value='"+type+"' name='type'><input type='hidden' value='"+id+"' name='obj_id'>";
	var ht7="<div class='checkinline'><input type='checkbox' name='status[]' ></div>";
	var ht8="<button class='del-reg btn btn-danger btn-mini'><i class='icon-trash'></i> Borrar</button>";
	var ht4="<div class='controls'><input type='text' name='cuerpo[]' placeholder='Opción del checklist'>"+ht7+ht8+"</div></div>"+b2;

	var ht5=b3+"<button id='add"+cont+"' class='btn btn-info'>Agregar</button> <input type='submit' class='btn btn-primary' value='Guardar' name='save-check'>"+b4+b5;

	var ht6="</form>";
	var html_div=ht1+ht2+ht3+ht4+ht5+ht6;
	$("#items").html(html_div);
	$(".del-reg").click(function(){
		$(this).parent('div').remove();
	});

	$("#add"+cont).click(function(e){
		var ht1="<div class='controls'><input type='text' name='cuerpo[]' placeholder='Opción del checklist'>";
		var ht3="<input type='button' value='Borrar' class='del-reg btn btn-danger btn-mini'>";
		var ht2="<div class='checkinline'><input type='checkbox' name='status[]' ></div>"+ht3+"</div>";
		$(this).parent().parent().children('.modal-body').children('.control-group').append(ht1+ht2);
		$(".del-reg").click(function(){
			$(this).parent('div').remove();
		});
		return false;
	});
	cont++;//Aumentar id del widget

});
$(".add-check").click(function(){
	var ht1="<div class='controls'><input type='text' name='cuerpo[]' placeholder='Opción del checklist'>";
	var ht3="<input type='button' value='Borrar' class='del-reg btn btn-danger btn-mini'>";
	var ht2="<div class='checkinline'><input type='checkbox' name='status[]' ></div>"+ht3+"</div>";
	$(this).parent().parent().children('.modal-body').children('.form-elements').children('.control-group').append(ht1+ht2);
	//console.log($(this).parent().parent().children('.form-elements'));
	$(".del-reg").click(function(){
		$(this).parent('div').remove();
	});
});
$("#nuevo-impacto").click(function(){
	var type='impacto';/*type of the widget*/
	var html_div="<div class='item-text'><form id='ftext-"+cont+"' action='"+base_url+"index.php/objetivos/saveItem/"+id+"' method='POST'><input type='button' id='add"+cont+"' value='add'><input type='submit' value='guardar' name='save-text'><input type='text' name='widget_nombre' placeholder='Nombre' /><input type='hidden' value='"+type+"' name='type'><input type='hidden' value='"+id+"' name='obj_id'>";
	html_div+="<br /><input type='text' name='cuerpo[]' placeholder='Cuerpo' /><input type='text' name='descripcion[]' placeholder='Descripción' /></form><div class='mensaje'></div></div>";
	$("#items").html(html_div);
	$("#add"+cont).click(function(e){
		$(this).parent('form').append("<br/><input type='text' name='cuerpo[]' placeholder='Cuerpo' /><input type='text' name='descripcion[]' placeholder='Descripción' />");
		return false;
	});
	cont++;//Aumentar id del widget
});
$(".add-impacto").click(function(){
	/*Que se cree otro div y el anterior se oculte*/

	var html_div="<div class='form-fields'><input type='text' name='cuerpo[]' placeholder='Cuerpo' /><input type='text' name='descripcion[]' placeholder='Descripción' /><input type='button' value='borrar' class='del-reg' rid='-1'></div>";
	$(this).parent().parent().children('.modal-body').children('.form-elements').children('.control-group').append(html_div);
	console.log($(this).parent().parent().children('.form-elements'));
	$(".del-reg").click(function(){
		$(this).parent('div').remove();
	});
});
$(".del-reg").click(function(){
	$.ajax({
		type: 'POST',
		url: base_url+"index.php/objetivos/delReg/",
		context: $(document),
		data: {
			id:$(this).attr('rid'),
		}
	}).done(function(data) {
		$(this).parent('div').remove();
	});
});
$(".del-check").click(function(){
	$.ajax({
		type: 'POST',
		url: base_url+"index.php/objetivos/delCheck/",
		context: $(this),
		data: {
			id:$(this).attr('rid'),
		}
	}).done(function(data) {
		$(this).parent().remove();
		console.log($(this).parent('div'));
	});
});

