
<!DOCTYPE html>
<html>
<head>
	<title>Control Club</title>
	<link rel="stylesheet" type="text/css" href={{asset("css/stiloMenu.css")}}/>
	<link type="text/css" rel="stylesheet" href={{asset("css/controlasistencia.css")}}/>
</head>
<body>
	<nav id='menu'>
		<ul>
			<a href="/registrar"><img src={{asset("img/registro.png")}}/>Registrar Estudiante</a>
			<a href="/asistencia"><img src="img/asistencia.png">Control de Asistencia</a>
			<a href="#"><img src="img/pago.png">Pago Mensualidad</a>
			<a href="#"><img src="img/examen.png">Examen del Club</a>
			<a href="#"><img src="img/evento.png">Agregar al Evento</a>
			<a href="/deudores"><img src="img/lista.png">Lista Deudores</a>
			<a href="/eventos"><img src="img/listaEvento.png">Listas del Evento</a>
			<a href="#"><img src="img/configu.png">Configuraciones</a>
		</ul>
	</nav>
	<section>
		<fieldset>
			<legend>Control Asistencia</legend>
			<form>
				<div id="contenedorGrupoBusqueda">
					<div id="contenedorGrupo">
						<label id="labelGrupo">Grupo:</label>
						<a href="#popup" class="popup-link" id="nombreGrupo">Grupo 3</a>
					</div>
					<div id="contenedorBusqueda">
						<button type="submit" id="botonBusqueda"><img src="img/iconoBusqueda.png" width="18px;"></button>
						<input type="search" name="textoBusqueda" id="textoBusqueda" placeholder=" Buscar alumno con nro CI o nombres">
						
					</div>
				</div>
				<div id="contenedorTablaPrincipal">
					<table class="tablaPrincipal">
						<thead>
							<tr>
								<th>Nro Cedula Identidad</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Grado</th>
								<th>Asistencia</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name="" checked="" class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name="" class="checkbox"  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
								<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name="" checked=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name="" checked=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242A</a></td>
								<td>HEIDY ERICA</td>
								<td>CAPUMA ARCE </td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">06523</a></td>
								<td>RODRIGO</td>
								<td>ACHOCALLA ESCALERA</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
							<tr>
								<td><a href="/historialalumno">1242</a></td>
								<td>WARA ALEJANDRA</td>
								<td>SILES CAMACHO</td>
								<td>Negro-Rojo</td>
								<td><input type="checkbox" name=""  class="checkbox"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="contenedorBotonesInferiores">
					<input type="submit" name="inicio" id="inicio" value="Inicio">
					<input type="submit" name="guardar" id="guardar" value="Guardar">
				</div>
			</form>
		</fieldset>
	</section>
	<div class="modal-wrapper" id="popup">
   		<div class="popup-contenedor">
      		<table class="tablaHorarios">
					<thead>
						<tr>
							<th>Grupo/Instructor</th>
							<th>Lunes</th>
							<th>Martes</th>
							<th>Miercoles</th>
							<th>Jueves</th>
							<th>Viernes</th>
							<th>Sabado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo2/Maria Leticia <br>Blanco Coca</a></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo5/Fernando da aaaaaaaa</a></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo1/Maria Rene</a></td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo7/Cae Santivañez</a></td>
							<td>10:00 - 11:30</td>
							<td></td>
							<td>10:00 - 11:30</td>
							<td></td>
							<td>10:00 - 11:30</td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo10/Christian Poma</a></td>
							<td>14:00 - 15:30</td>
							<td></td>
							<td>14:00 - 15:30</td>
							<td></td>
							<td>14:00 - 15:30</td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo6/Julio Santi</a></td>
							<td></td>
							<td>10:00 - 11:30</td>
							<td></td>
							<td>10:00 - 11:30</td>
							<td></td>
							<td>10:00 - 11:30</td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo12/Alex Smuki</a></td>
							<td>16:00 - 17:30</td>
							<td>16:00 - 17:30</td>
							<td></td>
							<td>16:00 - 17:30</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo8/Andrea Quiroz</a></td>
							<td></td>
							<td>17:00 - 18:30</td>
							<td></td>
							<td>17:00 - 18:30</td>
							<td></td>
							<td>17:00 - 18:30</td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo13/Laura V.</a></td>
							<td>15:00 - 16:30</td>
							<td></td>
							<td>15:00 - 16:30</td>
							<td></td>
							<td>15:00 - 16:30</td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo20/Alison O.</a></td>
							<td></td>
							<td></td>
							<td></td>
							<td>15:00 - 16:30</td>
							<td>15:00 - 16:30</td>
							<td>08:00 - 09:30</td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo2/Eduardo Mun</a></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo5/Fernando da Silva</a></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo1/Maria Rene</a></td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
							<td></td>
							<td>08:00 - 09:30</td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo13/Laura V.</a></td>
							<td>15:00 - 16:30</td>
							<td></td>
							<td>15:00 - 16:30</td>
							<td></td>
							<td>15:00 - 16:30</td>
							<td></td>
						</tr>
						<tr>
							<td><a href="../views/controlAsistenciaListaAlumnos.php?idGrupo=3">Grupo20/Alison O.</a></td>
							<td></td>
							<td></td>
							<td></td>
							<td>15:00 - 16:30</td>
							<td>15:00 - 16:30</td>
							<td>08:00 - 09:30</td>
						</tr>
					</tbody>
				</table>
      		<a class="popup-cerrar" href="#">X</a>
   		</div>
	</div>
</body>
</html>