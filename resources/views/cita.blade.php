<!DOCTYPE html>
<html>
<head>
	<title>Babicar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/nike-selectcita.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/magic-input.min.css">

</head>
<body>
	<section>
		<div class="container-fluid px-5 pt-5">
			<div class="row m-0">
				<div class="col-2 text-center">
					<div class="w-100 text-center mb-3">
						<img src="/assets-web/img/Grupo2033.png" class="img_circular_compa">
					</div>
					<a href="" class="link_regresar_compa">< Regresar</a>
				</div>
				<div class="col-8">
					<h1 class="h1_titulo_compar">Cita con asesor</h1>
					<p class="p_book_compa ml-2">Solicite una cita seleccionando la fecha y horario de su disponibilidad, un agente se comunicará con usted mediante una video llamada.</p>
					<div class="linea_plomo_compa mb-3"></div>
					<div class="mt-5 pl-5">
						<p class="p_datos mt-2 ml-5">Datos del interesado</p>
							<input type="text" name="" placeholder="Alexander Neil Gaimann Tolkein" class="input_contacto mb-2 ml-5">
							<div class="div_form_input ml-5">
								<input type="number" name="" placeholder="998 998 761" class="input_contacto1 input_rigth">
								<input type="email" name="" placeholder="alex1988@gmail.com" class="input_contacto1 input_left">
							</div>
					</div>
					<div class="linea_plomo_compa my-3 "></div>
					<div class="pl-5">
						<p class="p_datos mt-2 ml-5">Datos del interesado</p>
							<div class="idv_select ml-5 mb-2">
								<div class="div_celect1">
									<select>
										<option>Seleccionar fecha</option>
									</select>
								</div>
								<div class="div_celect2">
									<select>
										<option>Seleccionar hora</option>
									</select>
								</div>
							</div>
							<div class="div_form_input ml-5 mb-5">
								<input type="number" name="" placeholder="998 998 761" class="input_contacto1 input_rigth">
								<input type="email" name="" placeholder="alex1988@gmail.com" class="input_contacto1 input_left">
							</div>
					</div>
					<a href="" class="link_calcular float-right text-center">Enviar</a>
				</div>
			</div>
		</div>
	</section>

	<script src="/assets-web/js/jquery.min.js"></script>
	<script src="/assets-web/js/bootstrap.min.js"></script>
	<script src="/assets-web/js/nice-select.js"></script>
	<script>
	$(document).ready(function() {
    $('select').niceSelect();
		});
	</script>
</body>
</html>