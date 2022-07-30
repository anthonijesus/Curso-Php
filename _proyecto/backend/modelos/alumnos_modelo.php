<?php
// Gestiona toda la tabla Alummnos a traves del modelo

// 1. Creamos la clase con los atributos de la tabla correspondiente a la BD
// 2. Creamos el metodo constructor
// 3. Creamos una funcion para listar a los alumnos, en esta funcion creamos una variable SQL
// 4. Nos dirigimos al archivo de la vista e incluimos el modelo
// 5. Instanciar el modelo
// 6. Creamos una variable para listar los alumnos
// 7. Creamos en el archivo de VISTA un foreach para recorrer la lista de Alumnnos de la DB
// ubicamos en la vista el HTML correspondiente a la lista que vamos a insertar desde la BD al HTML
// y creamos una variable array donde se van a guardar
// 8. Creamos un metodo para cada vez que vayamos a realizar una consulta y no tener que escribir de nuevo el codigo del punto 3
// 9. Creamos un archivo de configuracion para no mostrar los datos de conexion a la BD
// 10. Hacemos la paginacion: a. Creamos una variable array $filtro vacio dentro de la misma funcion LISTAR
//b. Hacemos la consulta usando el LIMIT correspondiente al nro de registros que queremos mostrar
// c. Creamos un IF para validar la condicion de pagina creada en el array anterior
// d. Creamos la variable $pagina
//13. Para saber el total de pagina creamos una funcion realizando una consulta a la BD

//1. CLASE
class alumnos_modelo
{

	protected $documnto;

	protected $nombre;

	protected $apellido;

	protected $tipoDocumento;

	protected $fechaNacimiento;

	protected $totalEnLista = 3;

	// 2. METODO CONSTRUCTOR
	public function __constructor($data = array())
	{

		$this->documnto 		= $data ['documento'];
		$this->nombre 			= $data ['nombre'];
		$this->apellido 		= $data ['apellido'];
		$this->tipoDocumento 	= $data ['tipoDocumento'];
		$this->fechaNacimiento 	= $data ['fechaNacimiento'];
		
	}

	// 3. FUNCION LISTAR ALUMNOS
	public function listar($filtros = array())
	{
		
		$sql = "SELECT * FROM alumnos"; // Consulta a la BD

		// Este IF con el isset comprueba si existe el lugar del array 
		if (isset($filtros['pagina']) && $filtros['pagina'] != "") {

			$pagina = $filtros['pagina'] * $this->totalEnLista; // creamos la variable para definir el nro de pagina
			$sql .= " LIMIT " . $pagina. "," .$this->totalEnLista. ""; // Creamos la otra parte de la consulta
		} else {
			$sql .= " LIMIT 0," .$this->totalEnLista; // Limita el nro de registros que se ven en la tabla
		}

		$lista = $this->traerListado($sql);
		return $lista;
	}

	//13.	
	public function totalPaginas()
	{
		
		$sql = "SELECT count(*) AS total FROM alumnos"; 
		$lista = $this->traerListado($sql);
		$totalRegistros = $lista[0]['total'];
		$totalPaginas = ceil($totalRegistros/$this->totalEnLista);
		
		return $totalPaginas;
	}
	// 8. METODO PARA HACER CONSULTAS A LA BD 
	//Creamos este metodo para cada ocasion que vayamos a hacer una consulta 

	public function traerListado($sql, $arrayData = array())
	{
		/*
				$sql = Es la consulta contra la base de datos
				$arrayDatos = son los datos que van por parametro en la consulta
			*/
		include("configuracion/configuracion.php"); // Hacemos este include para traer el archivo de configuracion

		// Carga las credenciales para logeo a la BD
		// 9.
		$host = $BDMYSQL['host'];
		$dbName = $BDMYSQL['dbName'];
		$user = $BDMYSQL['user'];
		$password = $BDMYSQL['password'];
		// Array de configuracion general para PDO (Programacion orientada a Objetos)
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_CASE => PDO::CASE_NATURAL,
			PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
		];

		// Creamos la variable para realizar la conexion a la BD
		$objConexion = new PDO("mysql:localhost=" . $host . ";dbname=" . $dbName . "", $user, $password, $options);

		$preparo = $objConexion->prepare($sql); // creamos la Variable que Prepara la consulta
		// para ejecutarla, pero aun no la ejecuta

		$preparo->execute($arrayData); // Ejecuta la consulta mediante un array en caso de que la 
		// consulta tenga parametros, con esto evitamos la inyeccion de codigo SQL

		$lista = $preparo->fetchAll(); // creamos variable para traer el listado

		return $lista;
	}
}

?>








