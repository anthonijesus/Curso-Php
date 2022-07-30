<?PHP
// 4. INCLUIMOS EL MODELO
require_once("modelos/alumnos_modelo.php");

// 11. Creamos una variable para que la url siempre nos indique que estamos en la ruta alumno
$rutaPagina = "alumnos";

// 5. INSTANCIAMOS EL MODELO, CREAMOS LA VARIABLE PARA ELLO
$objAlumnos = new alumnos_modelo();

//Ingresamos los datos que van por POST
if(isset($_POST["accion"]) && $_POST['accion'] == "ingresar"){
	
	$datos = array();

	$datos['documento'] 		= isset($_POST['txtdocumento'])?$_POST['txtdocumento']:""; 
	$datos['nombre'] 			= isset($_POST['txtnombre'])?$_POST['txtnombre']:"";
	$datos['apellido'] 			= isset($_POST['txtapellido'])?$_POST['txtapellido']:"";
	$datos['fechaNacimiento'] 	= isset($_POST['txtfechaNacimiento'])?$_POST['txtfechaNacimiento']:"";
	$datos['tipoDcoumento'] 	= isset($_POST['txtTipoDocumento'])?$_POST['txtTipoDocumento']:"";

	$objAlumnos = new alumnos_modelo($datos);

}

//12. Creamos un IF para pasar la url con el nro de la pagina // 13. Creamos la variable para el contador hacia delante de las paginas

$totalMaximo = $objAlumnos->totalPaginas();
if (isset($_GET['pagina']) && $_GET['pagina'] != "") {

	$pagina = (int)$_GET['pagina'];
	if ($pagina < 1) {
		$pagina = 1;
	} elseif ($pagina > $totalMaximo) {
		$pagina = $totalMaximo;
	} elseif (!is_int($pagina)) {
		$pagina = 1;
	}
	$paginaAnterior = $pagina - 1; // Variables para ir pagina anterior

	if ($paginaAnterior < 1) {  // Con este IF evitamos que el paginador regrese antes de la pagina 1
		$paginaAnterior = 1;
	}


	$paginaSiguiente = $pagina + 1; // Variables para ir pagina siguiente
	if ($paginaSiguiente > $totalMaximo) {  // Con este IF evitamos que el paginador siga hacia una pagina que no tiene registros
		$paginaSiguiente = $totalMaximo;
	}
} else {
	$pagina 		 = 1;
	$paginaAnterior  = 1;
	$paginaSiguiente = 2;
}

$arrayFiltros = array("pagina" => $pagina - 1); // Con el -1 le indicamos que estamos en la pagina 1 y no regrese antes de ella
$listaAlumnos = $objAlumnos->listar($arrayFiltros); // creamos la variable para traer la instancia creada anteriormentey llamar el motodo LISTAR del punto 3.

// con este prin_r solo nos sirve para ver los datos en la pagina
// sin formato ni en la tabla, es solo para visualizar
//print_r($listaAlumnos);
?>

<h2 class="center">Alumnos</h2>

<!-- Ingresamos el boton para agregar contenido a la tabla, asi como el modal -->
<a class="waves-effect waves-light btn modal-trigger blue black-text" href="#modal1">Ingresar</a>

<div id="modal1" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>Ingresar Alumno</h4>
		<div class="row">
			<form action= "index.php?r=<?= $rutaPagina?>" method="POST" class="col s12">
				<div class="row">
					<div class="input-field col s6">
						<input placeholder="Documento" id="Documento" type="text" class="validate" name="txtDocumento">
						<label for="Documento">Documento</label>
					</div>
					<div class="input-field col s6">
						<input placeholder="Nombre" id="Nombre" type="text" class="validate" name="txtNombre">
						<label for="Nombre">Nombre</label>
					</div>
					<div class="input-field col s6">
						<input placeholder="Apellido" id="Apellido" type="text" class="validate" name="txtApellido">
						<label for="Apellido">Apellido</label>
					</div>
					<div class="input-field col s6">
						<input placeholder="fecha de Nacimiento" id="fechaNacimiento" type="date" class="validate" name="txtfechaNacimiento">
						<label for="fechaNacimiento">Fecha de Nacimiento</label>
					</div>
					<div class="input-field col s6">
						<select name="txtTipoDocumento">
							<option value="" disabled selected>Tipo de Documento</option>
							<option value="CI">CI</option>
							<option value="Pasaporte">Pasaporte</option>
						</select>
						<label for="tipoDocumento">Tipo de Documento</label>
					</div>
				</div>
				
				<button class="btn waves-effect waves-light" type="submit" name="accion" value="ingresar">Enviar
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>

	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
	</div>
</div>

<table class="highlight">
	<thead>
		<tr>
			<th class="center">Documento</th>
			<th class="center">Nombre</th>
			<th class="center">Apellido</th>
			<th class="center">Fecha Nacimiento</th>
			<th class="center">Tipo Documento</th>
			<th class="center" style="width:200px">Botones</th>
		</tr>
	</thead>

	<tbody>

		<!-- Con este Foreach recorremos la variable ListaAlumnos
		 	 para incluirlos en la tabla html creada, aqui tambien creamos
		     el array donde se van a guardar los datos que traemos de la BD!-->

		<?php

		foreach ($listaAlumnos as $alumno) {
			// Aca el array es $alumno donde se van a guardar los datos de la BD
		?>
			<tr>
				<td class="center"><?= $alumno['documento'] ?></td>
				<td class="center"><?= $alumno['nombre'] ?></td>
				<td class="center"><?= $alumno['apellido'] ?></td>
				<td class="center"><?= $alumno['fechaNacimiento'] ?></td>
				<td class="center"><?= $alumno['tipoDocumento'] ?></td>
				<td>
					<div class="right">
						<a class="waves-effect waves-light btn indigo darken-3">
							<i class="material-icons left">edit</i>
						</a>
						<a class="waves-effect waves-light btn red">
							<i class="material-icons left">delete</i>
						</a>
						<div>
				</td>
			</tr>

		<?php
		}
		?>
		<tr class="white">
			<td colspan="6">
				<ul class="pagination center">

					<li class="waves-effect"><a href="index.php?r=<?= $rutaPagina?>&pagina=<?= $paginaAnterior ?>"><i class="material-icons blue">chevron_left</i></a></li>


					<?php
					// nos indica en que pagina estamos
					for ($i = 1; $i <= $totalMaximo; $i++) {
						$class = "waves-effect";
						$classText = "black-text";
						if ($i == $pagina) {
							$class = "active";
							$classText = "red-text";
						}
					?>
						<li class="<?= $class ?>">
							<a href="index.php?r=<?= $rutaPagina ?>&pagina=<?= $i ?>" class=<?= $classText ?>><?= $i ?></a>
						</li>



					<?php
					}
					?>

					<li class="waves-effect"><a href="index.php?r=<?= $rutaPagina ?>&pagina=<?= $paginaSiguiente ?>"><i class="material-icons blue">chevron_right</i></a></li>
				</ul>
			</td>
		</tr>
	</tbody>

</table>