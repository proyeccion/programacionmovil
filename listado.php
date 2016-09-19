<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Programacion Movil con JQuery Mobile</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page"data-fullsreen="true">
		<div data-role="header" data-position="fixed">
			<h1>Programacion Movil</h1>
            <div data-role="navbar">
			<ul>
					<li><a href="javascript:alert('inicio');">
					Inicio</a></li>
					<li><a href="javascript:alert('listado');">
					Listado</a></li>
					<li><a href="javascript:alert('nuevo');">
					Nuevo</a></li>
			</ul>
			</div>

		</div>
		<div data-role="content">
			<h1>Bienvenidos</h1>

		<ul>
		<div data-filter="true">
			<div data-role="listview">
			<li data-role="list-dividir">Grupo1</li>
			<li><a href="">magaly</a></li>
			<li><a href="">carla</a></li>
			<li><a href ="">jeny</a></li>
			<li><a href="">karen</a></li>
		</ul>


			<p>este sitio fue creado por alguien extraordinario</p>
			<p>...volver a <a href="index.html">inicio </a></p>
		</div>
		<div data-role="footer" data-position="fixed">
			<h1>UNITEK-Puno</h1>
			<div data-role="navbar">
			<ul>
					<li><a href="javascript:alert('inicio');">
					Inicio</a></li>
					<li><a href="javascript:alert('listado');">
					Listado</a></li>
					<li><a href="javascript:alert('nuevo');">
					Nuevo</a></li>
			</ul>
			</div>

		</div>
	</div>

	<!--un archivo html puede contener mas de una pagina(page)-->
	<!--una pagina(page) puede definirse en un archivo fisico separado-->
	<!--varias paginas en un archivo fisico unico no generan resquest-response adicionales-->
	<!-- paginas en archivos fisicos separados generan grupos request-response adicionales-->
	<!-- los archivos de recursos/librerias(css,js)pueden ser locales al sitio o ser usados desde un CDN-->
</body>
</html>
