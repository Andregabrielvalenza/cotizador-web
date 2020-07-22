<!DOCTYPE html>
<html>
<head>
	<title>Babicar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/nike-select.css">
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
					<h1 class="h1_titulo_compar">Cotización para propuesto asegurado</h1>
					<p class="p_book_compa ml-2">Alexander Neil Gaimann Tolkein</p>
					<div class="linea_plomo_compa mb-3"></div>
					<p class="p_monto mt-0 mb-0 p_number_form ml-2"><span>Masculino</span> l <span>No Fumador</span></p>
					<div class="row m-0">
						<div class="col-6 pl-2">
							<p class="mt-0 mb-0 p_number_form"><span class="p_monto">Monto de cobertura</span>  <span class="p_book_compa ml-2">$150,000</span></p>
							<p class="mt-0 p_number_form"><span class="p_monto">Edad</span>  <span class="p_book_compa ml-2">34</span></p>
						</div>
						<div class="col-6">
							<p class="mt-0 mb-0 p_number_form"><span class="p_monto">Número de teléfono</span>  <span class="p_book_compa ml-2">+51 998 998 761</span></p>
							<p class="mt-0 p_number_form"><span class="p_monto">Correo electrónico</span> <span class="p_book_compa ml-2">alex1988@gmail.com</span></p>
						</div>
					</div>
					<div class="linea_plomo_compa mb-3"></div>
					<p class="link_regresar_compa ml-2">Producto seleccionado</p>
					<div class="row m-0">
						<div class="col-4">
							<p class="mb-0 p_aseguradora">Aseguradora</p>
							<img src="/assets-web/img/Enmascarargrupo1.png">
						</div>
						<div class="col-8">
							<table class="table table-bordered w-100">
							  <thead>
							    <tr>
							      <th scope="col" class="table_anchura datos_table">Producto</th>
							      <th scope="col" class="table_anchura datos_table">Años de cobertura</th>
							      <th scope="col" class="table_anchura datos_table">Prima anual</th>
							      <th scope="col" class="table_anchura datos_table">Devolución de prima</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row" class="text-center table_anchura font_table">10 años</th>
							      <td class="text-center table_anchura font_table">$US 75</td>
							      <td class="text-center table_anchura font_table">$US 75</td>
							      <td class="text-center table_anchura font_table">$US 75</td>
							    </tr>
							  </tbody>
							</table>
							<div class="d-flex justify-content-between">
								<a href="" class="link_pdf"><i class="fa fa-file-pdf mr-1"></i><ins>Descargar PDF</ins></a>
								<p class="p_prima_anual">Prima anual - $75 (ahorra - $40)</p>
							</div>
						</div>
					</div>
					<div class="linea_plomo_compa mb-3"></div>
					<div class="row m-0">
						<div class="col-4">
							<p class="mb-0 p_enviar">Enviar a correo</p>
						</div>
						<div class="col-8 position-relative">
							<p class="p_datos mt-2">Datos del interesado</p>
							<input type="text" name="" placeholder="Alexander Neil Gaimann Tolkein" class="input_contacto mb-2">
							<div class="div_form_input">
								<input type="number" name="" placeholder="998 998 761" class="input_contacto1 input_rigth">
								<input type="email" name="" placeholder="alex1988@gmail.com" class="input_contacto1 input_left">
							</div>
							<div class="d-flex justify-content-end align-items-center my-3">
								<button class="btn_circulo mr-2"><i class="fas fa-share-alt"></i></button>
							   	<a href="" class="link_envia_pdf mr-2">Enviar a correo</a>
							   	<a href="" class="link_envia_pdf">Ver PDF</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 pt-5 text-center">
					<a href="" class="link_calcular">Solicitar cita</a>
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