<!DOCTYPE html>
<html>
<head>
	<title>Control Club</title>
	<link rel="stylesheet" type="text/css" href={{asset("css/stiloMenu.css")}}/>
	<link type="text/css" rel="stylesheet" href={{asset("css/controlasistencia.css")}}/>
	<link rel="stylesheet" type="text/css" href={{asset("css/historialalumno.css")}}/>
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
			<legend>Historial de Asistencia</legend>
			<div id="contenedorDatosAlumno">
			<label class="titulos">Nombre :</label>
			<label class="datos">Oscar</label>
			<label class="titulos">CI:</label>
			<label class="datos">736581</label>
			<br><br>
			<label class="titulos">Apellidos:</label>
			<label class="datos">Ovando</label>
		</div>
		<table>
			<caption>Febrero</caption>
			<thead>
				<tr>
					<th>Lunes</th>
					<th>Martes</th>
					<th>Miercoles</th>
					<th>Jueves</th>
					<th>Viernes</th>
					<th>Sabado</th>
					<th>Domingo</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
				</tr>
				<tr>
					<td style="background-color: #FB424B;color: white">7</td>
					<td style="background-color: #FB424B;color: white">8</td>
					<td style="background-color: #FB424B;color: white">9</td>
					<td style="background-color: #FB424B;color: white">10</td>
					<td style="background-color: #FB424B;color: white">11</td>
					<td style="background-color: #FB424B;color: white">12</td>
					<td style="background-color: #5C3CAF;color: white"><div class="tooltip">13<span class="tooltiptext">Estaba enfermo</span></div></td>
				</tr>
				<tr>
					<td>14</td>
					<td>15</td>
					<td>16</td>
					<td>17</td>
					<td>18</td>
					<td>19</td>
					<td>20</td>
				</tr>
				<tr>
					<td style="background-color: #FB424B;color: white">21 </td>
					<td style="background-color: #FB424B;color: white">22</td>
					<td style="background-color: #FB424B;color: white">23</td>
					<td style="background-color: #FB424B;color: white">24</td>
					<td style="background-color: #FB424B;color: white">25</td>
					<td style="background-color: #FB424B;color: white">26</td>
					<td style="background-color: #FB424B;color: white">27</td>
				</tr>
				<tr>
					<td>28</td>
					<td>29</td>
					<td>30</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<div id="contenedorSelectMes">
			<label>Mes</label>
			<select>
				<option>Febrero</option>
				<option>Marzo</option>
				<option>Abril</option>
				<option>Mayo</option>
				<option>Junio</option>
				<option>Julio</option>
			</select>
		</div>
		<button>Inicio</button>
		</fieldset>
	</section>
</body>
</html>