<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Bizkaibus - Consultas</title>

	<style type="text/css">

		* {
			margin: 0;
			padding: 0;
			font-family: 'Helvetica Neue', arial, sans-serif;
		}

		.page-section {
			width: 100%;
			border-bottom: 10px solid #fff;
		}

		.page-section h1 {
			font-size: 4em;
			margin: 50px 0;
		}
		.page-section h1 span {
			font-weight: 200;
		}
		/*
		.page-section h2 {
			font-size: 1em;
			font-weight: 900;
			color: #fff;
			margin: 0 0 30px;
			text-shadow: 2px 2px 2px #000;
		}*/
		.page-section p {
			font-size: 1.2em;
			font-weight: 200;
			margin: 0 25% 20px 0;
		}
		.page-section p.lead {
			font-size: 1.8em;
		}
		.page-section p.caption {
			color: #fff;
			padding: 20px;
			background: url(images/trans_black_25.png);
			text-shadow: 1px 1px 1px #000;
		}

		.btn {
			font-weight: 200;
			/*margin-bottom: 2px;*/
		}
		.btn-dark {
			background: #444;
			color: #fff;
		}
		.btn-dark:hover {
			background: #000;
			color: #fff;
		}
		.back-to-top {
			display: inline-block;
			clear: both;
			/*background: #fff;*/
			background: grey;
			color: #333;
			padding: 5px 10px 5px;
			margin: 5px 0 0;
			text-shadow: none;
		}
		.back-to-top:hover {
			background: #333;
			color: #fff;
			text-decoration: none;
		}

		.table{
			margin-top: 20px;
			width: 56%;
		}

		.input-group{
			width: 330px;
		}

		.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
		    background-color: #EFEFEF;
		}


		.table-striped > thead {
		    background-color: #4A4A4A;
		    color: #f5f5f5;
		}


		#container{
			/*width: 77.5%;*/
			padding-top: 10px;
			margin-left: 2%;
			width: 91%;
		}

		#form_busqueda{
			height: 150px;
		}
		
		#content_municipios{
			margin-top: 10px;
		}

		.form-group legend{
			width: 56%;
		}


		.glyphicon{
			top: 2px;
		}

		hr {
			border-color: #ddd;
			width: 70%;

		}

	@media (min-width: 768px) {

	}

	@media (max-width: 480px) {
		.page-section h1 {
			font-size: 3em;
		}
		.page-section h2 {
			font-size: 2em;
		}
		.page-section p {
			font-size: 1em;
			margin: 0 0 20px;
		}

		.table{
			width:100%;
		}

		#form_busqueda{
			width: 100%;
			margin-left: 3%;
			/*margin-right: auto;*/
		}

		.form-group legend{
			width: 94%;
		}


	}

	</style>

</head>
<body>
	<!-- <div id="select-busqueda-municipio"> -->
	<!-- <div id="prueba">
		<p>
			<select name="town" id="townsellll"></select>
		</p>

		<p>
			<select name="lines" id="linesselsel" class="selectpicker"></select>
		</p>
	</div> --> <!-- Fin del div "prueba" -->

	<div id="container">
		<div id="form_busqueda">
			<form id="busqueda_form_municipio" class="form-horizontal" role="form">
				<div class="form-group">
					<legend>Búsqueda de Líneas de Bizkaibus</legend>
				</div>
			
				<div class="col-lg-3">
					<p><b>Selecciona un Municipio: </b></p>
		    		<div class="input-group">
		    			<select name="town" id="townsel"></select>
						<!--
		    			<input type="text" name="input_municipio" id="input_municipio" class="form-control"
						placeholder="Buscar..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar Municipio...'" 
						autofocus="autofocus">
						-->
						
						<!--
		      			<span class="input-group-btn">
							<button type="submit" id="btn_submit_municipio" class="btn btn-primary">Buscar</button>
		      			</span>
		      		    -->
		    		</div><!-- /input-group -->
				</div>
			</form>
		</div>
	<!--
		<form id="busqueda_form_municipio">
			<table>					
				<tr>
					<p><b>Inserta el nombre del Municipio: </b></p>
				</tr>
				<tr>
					<td>
						<input type="text" name="input_municipio" id="input_municipio" class="required" 
						placeholder="Buscar..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar...'" 
						autofocus="autofocus">
					</td>
					<td>
                        <button type="button" id="btn_submit_municipio">Buscar</button>
                    </td>
				</tr>
			</table>
		</form>
	-->
	<!--</div>-->

		<div id="content_municipios">
			<div id="texto"></div>
			<table id="tabla_municipio" class="table table-striped table-hover">
				<thead>
					<tr>
	                    <th style="text-align: center;"><b>Línea</b></th>
	                	<th style="padding-left: 30%;"><b>Denominación Línea</b></th>                                
					</tr>
				</thead>
				<tbody></tbody>
			</table>

			<br>
			<p style="vertical-align: middle;">A continuacion se muestran los próximos autobuses que pasan por 
				la parada <b>48054069 [Calle Mayor (Getxo)]</b>:</p>
			<button type="button" id="btn_actualiza_datos_linea" class="btn btn-primary">Actualizar</button>

			<table id="tabla_paso_parada" class="table table-striped table-hover">
				<thead>
					<tr>
	                    <th style="text-align: center;"><b>Línea</b></th>
	                	<th style="text-align: center;"><b>Destino</b></th> 
	                	<th style="text-align: center;"><b>Próximo [Mins.]</b></th>                                                                
	                	<th style="text-align: center;"><b>Distancia [m]</b></th>
	                	<th style="text-align: center;"><b>Siguiente [Mins.]</b></th>                                	                               
					</tr>
				</thead>
				<tbody></tbody>
			</table>		
		<a href="#" class="scroll-top back-to-top" style="border-radius: 15px;">&uarr; Gora</a>
	    </div>	
	</div> <!-- Fin de Container -->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">		
       
		function btnSubmitOnClickMunicipio(busq,desc)
		{                          
			/*var busq = $("#input_municipio").val(); */
			/*var busq = $("#townsel option:selected").val();*/

			//console.log('%s', busq);

			if(busq == ''){
											 
				alert("No has introducido ningún Municipio.");
			
			}else{    
				$.ajax({
					url: 'realiza_busqueda_lineas_municipio.php',
					data: {
							busqueda: busq
						  },  
					type: 'POST',
					dataType: 'json',
					success: function(data){			
						var html = '';

				        /*busqUC = busq.substring(0, 1).toUpperCase() + busq.substring(1);*/

						$("#texto").html("<p>A continuación se muestran las líneas que pasan por <b>"+desc+"</b>:");

						if(data.length > 0){
							$.each(data, function(i,item){
								html += '<tr>';
									html += '<td style="text-align: center;">'+item.CodigoLinea+'</td>';
									html += '<td>'+item.DenominacionLinea+'</td>';
								html += '</tr>';
							});							
						}
					if(html == '') html = '<tr><td colspan="2" align="center">No se han encontrado líneas que pasen por el municipio.</td></tr>';
					$("#tabla_municipio tbody").html(html);
					$("#content_municipios").show();
					}
				});

				var parada_getxo = "48054069";

				$.ajax({
					url: 'realiza_busqueda_paso_parada.php',
					data: {
							parada: parada_getxo
						  },  
					type: 'POST',
					dataType: 'json',
					success: function(data){			
						var html = '';

						if(data.length > 0){
							$.each(data, function(i,item){
								html += '<tr>';
									html += '<td style="text-align: center;">'+item.Linea+'</td>';
									html += '<td style="text-align: center;">'+item.Ruta+'</td>';
									html += '<td style="text-align: center;">'+item.Tiempos[0].minutos+'</td>';
									html += '<td style="text-align: center;">'+item.Tiempos[0].metros+'</td>';
									html += '<td style="text-align: center;">'+item.Tiempos[1].minutos+'</td>';								
								html += '</tr>';
							});							
						}
					if(html == '') html = '<tr><td colspan="5" align="center">No se han encontrado municipios.</td></tr>';
					$("#tabla_paso_parada tbody").html(html);
					}
				});


			}//Fin del else
		}// Fin de la funcion btnSubmitOnClick


		function actualizaDatosLinea()
		{                          
			var parada_getxo = "48054069";

			$.ajax({
				url: 'realiza_busqueda_paso_parada.php',
				data: {
						parada: parada_getxo
					  },  
				type: 'POST',
				dataType: 'json',
				success: function(data){			
					var html = '';

					if(data.length > 0){
						$.each(data, function(i,item){
							html += '<tr>';
								html += '<td style="text-align: center;">'+item.Linea+'</td>';
								html += '<td style="text-align: center;">'+item.Ruta+'</td>';
								html += '<td style="text-align: center;">'+item.Tiempos[0].minutos+'</td>';
								html += '<td style="text-align: center;">'+item.Tiempos[0].metros+'</td>';
								html += '<td style="text-align: center;">'+item.Tiempos[1].minutos+'</td>';	
							html += '</tr>';
						});							
					}
				if(html == '') html = '<tr><td colspan="5" align="center">No se han encontrado municipios.</td></tr>';
				$("#tabla_paso_parada tbody").html(html);
				}
			});
		}// Fin de la funcion actualizaDatosLinea
		
		$(document).ready(function(){	

			

			$("#input_municipio").val("");
			$("#content_municipios").hide();
			
			/*
			//Cuando pulsamos el boton de "Buscar"
			$("#btn_submit_municipio").click(function(){ 
				  btnSubmitOnClickMunicipio(); 
			}); 
			
			//Para introducir los datos seguidos del boton "Enter"
			$('form').submit(function(e){
				e.preventDefault();
				btnSubmitOnClickMunicipio();
				return false;
			});	
			*/

			//Cuando pulsamos el boton de "Actualizar"
			$("#btn_actualiza_datos_linea").click(function(){ 
				  actualizaDatosLinea(); 
			});	

	// NUEVOOOOOOOOOOOOOOOOOOO

		//Get Town list
		$.getJSON("http://openbizkaibus.appspot.com/api/Consultar_FamiliasCentros?jsoncallback=?",
		{},
		function(data) {
			$.each(data, function(i,object){
				$.each(object.Registros, function(i,registro){
					$('#townsel').append(new Option(registro.DescripcionElemento, registro.CodigoElemento, true, true));
				});
			});
		});//Fin del "Get Town List"

		//
		$("#townsel").change(function()	{
			var CodigoElemento;
			var DescripcionElemento;

			CodigoElemento = $("#townsel").val();
			DescripcionElemento = $("#townsel option:selected").text();

			if(CodigoElemento.length < 2){
				CodigoElemento = "00"+CodigoElemento;
			}
		
			if(CodigoElemento.length < 3){
				CodigoElemento = "0"+CodigoElemento;
			}
			
			btnSubmitOnClickMunicipio(CodigoElemento,DescripcionElemento);

		}); //Fin del #townsel


		});
	</script>
</body>
</html>