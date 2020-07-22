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
					<div class="text-left mt-5">
						<a href="" class="link_regresar_compa">Volver a filtrar por:</a>
						<p class="p_monto mt-3 mb-2">Monto de cobertura</p>
						<select class="mb-4">
							<option>$150,000</option>
						</select>
						<p class="p_monto mb-0">Prima</p>
						<input type="range" name="">
						<label class="mt-3 mb-3"><input type="checkbox" class="mgc mgc-warning"/><span class="ml-2 span_check"> Mostrar solo planes con devolución de prima</span></label>
					</div>
					<a href="" class="link_calcular">Calcular</a>
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
					<p class="link_regresar_compa ml-2">Para continuar haz click en tu opción preferida:</p>
					<table class="table table-bordered w-100">
					  <thead>
					    <tr>
					      <th scope="col" class="table_anchura"></th>
					      <th scope="col" class="table_anchura text-center"><img src="/assets-web/img/Enmascarargrupo2.png" class="img_table"></th>
					      <th scope="col" class="table_anchura text-center"><img src="/assets-web/img/Enmascarargrupo1.png" class="img_table"></th>
					      <th scope="col" class="table_anchura text-center"><img src="/assets-web/img/Enmascarargrupo3.png" class="img_table"></th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row" class="text-center table_anchura font_table">10 años</th>
					      <td class="text-center table_anchura font_table">$US 75</td>
					      <td class="text-center table_anchura font_table">$US 75</td>
					      <td class="text-center table_anchura font_table">$US 75</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-center table_anchura font_table">15 años</th>
					      <td class="text-center table_anchura font_table">$US 78</td>
					      <td class="text-center table_anchura font_table">$US 75</td>
					      <td class="text-center table_anchura font_table">$US 75</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-center table_anchura font_table">20 años</th>
					      <td class="text-center table_anchura font_table">$US 75</td>
					      <td class="text-center table_anchura font_table">$US 75</td>
					      <td class="text-center table_anchura font_table">$US 75</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-center table_anchura font_table">30 años</th>
					      <td class="text-center table_anchura font_table">$US 75</td>
					      <td class="text-center table_anchura font_table">$US 75</td>
					      <td class="text-center table_anchura font_table">$US 75</td>
					    </tr>
					  </tbody>
					</table>
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