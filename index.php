<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0" >
	<title>HOLA MUNDO</title>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script 
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

		<div id="wrapper">
		<!-- SIDEBAR -->
			<div id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li><a href="#">USUARIO</a></li>
					<li><a href="#">CUENTAS</a></li>
					<li><a href="#">BALANCE</a></li>
				</ul>
			</div>
		</div>

		<!-- CONTENIDO DE LA PAGINA -->

		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<button href="#" class="btn btn-success" id="menu-toggle">HOLA EDUARD</button>
						<h1>LOS SIDEBAR SON LO MEJOR</h1>
						<p>Navegadores móviles como Fennec muestran ("render": renderizan) las páginas en una "ventana" virtual  (El viewport), usualmente más amplia que la pantalla, para de esta forma no tener que apretar cada diseño de página en una ventana diminuta (lo que rompería muchos sitios no optimizados para móvil). Los usuarios pueden hacer zoom y vista panorámica para ver distintas áreas de la página.</p>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
	$(document).ready(function(){

    $("#menu-toggle").click(function (e){
        e.preventDefault();
        $("#wrapper").toggleClass("menuDisplayed");
        $("#page-content-wrapper").toggleClass("menuDisplayed");
    });
});
</script>

	
</body>
</html>