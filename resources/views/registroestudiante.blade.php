<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>	
	<title>Control Club</title>
	<link rel="stylesheet" type="text/css" href={{asset("css/stiloMenu.css")}}>
	<link rel="stylesheet" href={{asset("css/estilos.css")}}>
</head>
<body>
	<nav id='menu' class="">
		<ul>
			<a href="#"><img src="img/registro.png"/>Registrar Estudiante</a>
			<a href="#"><img src="img/asistencia.png">Control de Asistencia</a>
			<a href="#"><img src="img/pago.png">Pago Mensualidad</a>
			<a href="#"><img src="img/examen.png">Examen del Club</a>
			<a href="#"><img src="img/evento.png">Agregar al Evento</a>
			<a href="#"><img src="img/lista.png">Lista Deudores</a>
			<a href="#"><img src="img/listaEvento.png">Listas del Evento</a>
			<a href="#"><img src="img/configu.png">Configuraciones</a>
		</ul>
	</nav>
	<div id="panel-central" class="fondo-main">
		<div id="datos-personales" class="dos-col">
			<h1>Registro de Estudiante</h1>
			<form> 
				<fieldset>
					<legend>Datos Personales:</legend>		
					<label>ci:</label>
					<input type="text" name="ci" id="">					
					<label>Peso:</label>
					<input type="text" name="peso" id="">
					<br>					
					<label>Nombre(s):</label>
					<input type="text" name="nombre" id="">
					<br>					
					<label>Ap. Paterno:</label>
					<input type="text" name="ap-paterno" id="">
					<br>					
					<label>Ap. Materno:</label>
					<input type="text" name="ap-materno" id="">
					<br>
					<label>Fecha de Nacimiento:</label>
					<input type="date" name="fecha-nac" id="">
					<label>Tipo Sangre:</label>
					<select name="tipo-sangre">
						<option value="o-positivo">O-</option>
						<option value="o-negativo">O+</option>
						<option value="a-negativo">A-</option>
						<option value="a-positivo">A+</option>
						<option value="b-negativo">B-</option>
						<option value="b-positivo">B+</option>
						<option value="ab-negativo">AB-</option>
						<option value="ab-positivo">AB+</option>
					</select>	
					<br>		
					<label>Teléfono:</label>
					<input type="text" name="telf" id="">
					<br>
					<label>Teléfono Tutor:</label>
					<input type="text" name="telf-tutor" id="">
					
				</fieldset>
				<fieldset class="fieldset2">
					<legend>Datos Adicionales:</legend>
					<label>Grado:</label>
					<select name="grado">
						<option value="o-positivo">grado1</option>
						<option value="o-negativo">grado2</option>
					</select>
					<br>
					<label>Club:</label>
					<input type="text" name="club" id="" value="nombre de mi-club" disabled>
					<br>
					<label>Turno:</label>
					<select name="turno">
						<option value="o-positivo">turno1</option>
						<option value="o-negativo">turno2</option>
					</select>
					<br>
					<label>Horario:</label>
					<select name="horario">
						<option value="o-positivo">hora1</option>
						<option value="o-negativo">hora2</option>
					</select>
					<br>
					<label>Fecha Inicio:</label>
					<input type="date" name="fecha-ini" id="">
					<br>
					<label for="">Foto Estudiante</label>
					<input type="file" name="foto-est" id="">
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>