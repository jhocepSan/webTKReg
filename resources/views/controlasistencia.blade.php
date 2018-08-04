
<!DOCTYPE html>
<html>
<head>
	<title>Control Asistencia</title>
	<link rel="stylesheet" type="text/css" href={{asset("css/stiloMenu.css")}}/>
	<link type="text/css" rel="stylesheet" href={{asset("css/controlAsistencia.css")/>
</head>
<body>
	<div id="principal">
		<div id="contenedorSuperior">
			<div id="contenedorBarraBusqueda">
					<select name="grupos" id="selectGrupo" onchange="this.form.submit()" style="width:100px;height:35px">
		    			<?php echo listaGrupos(); ?>
					</select>
					<input type="search" name="busqueda" placeholder="Buscar alumno, nro cedula de identidad o nombre" autofocus style="width:400px;height:35px">
					<input type="submit" name="buscar" value="buscar" style="width:60px;height:35px">
				</div>
		</div>
		<nav id='menu'>
			<div id="perfilUsuario">
				
			</div>
			<ul>
				<a href="#"><img src="img/asistencia.png">Control de Asistencia</a>
				<a href="#"><img src="img/registro.png"/>Registrar Estudiante</a>
				<a href="#"><img src="img/pago.png">Pago Mensualidad</a>
				<a href="#"><img src="img/examen.png">Examen del Club</a>
				<a href="#"><img src="img/evento.png">Agregar al Evento</a>
				<a href="#"><img src="img/lista.png">Lista Deudores</a>
				<a href="#"><img src="img/listaEvento.png">Listas del Evento</a>
				<a href="#"><img src="img/configu.png">Configuraciones</a>
			</ul>
		</nav>
		<section>
			<header id="encabezado">
				
			</header>
		
			<div id="contenedorTablaGrupos">
				<?php 
					echo listaHorarios();
			 	?>
			</div>
		</section>
	</div>
</body>
</html>