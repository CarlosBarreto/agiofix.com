<?php  
/* Método para validar el nombre y la clave */
function validar($nombre, $clave){
	if($nombre == "usuario" && $clave == "claveUsuario"){
		return true;
	}
	else{
		return false;
	}
}
             
/* Método para encriptar */
function encriptar($nombre, $clave){
	return array("nombreE" => md5($nombre), "claveE" => md5($clave));
}      

function sumar ($op1, $op2) {
	return $op1 + $op2;
}

/*Retorna un array con una orden */
function getNewOrder_ws() {
	$array = array();
	$db = new dbConn;
	$array = $db->getNewOrder();
	
	return $array;
}

function setOrderDONE_ws($OrderID) {
	//Validar que el status sea el correcto
	$result = false;
	$db = new dbConn;
	$result = $db->setStatusDONE($OrderID);
	
	return $result;
}

class dbConn  {
	private static $conn;

    public function __construct(){
		#Conectamos con MySQL
		$config['host'] = "localhost";
        $config['dbname'] = "agiotech_service";
        $config['username'] = "agiotech_agiofix";
        $config['password'] = "Agiotech01";
		
		try {
			self::$conn = mysql_connect($config['host'],$config['username'], $config['password']);
			#Seleccionamos la base de datos a utilizar
			mysql_select_db($config['dbname']);
		} catch (Exception $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
		
		
	public function __destruct() {
		#Cerrando la conexión a la Base de Datos
		mysql_close(self::$conn);
	}
	
	/* Método que retorna un una orden (Todos sus datos) */
	public function getNewOrder() {
		$strSQL = "SELECT * FROM  `ordenes`  WHERE  `Status` =  'NEW' LIMIT 1";
	
		$result = mysql_query($strSQL, self::$conn);
		$row = mysql_fetch_array ( $result );
		
		#Retornar en un array, todos los datos
		return array ('OrderID' => $row['OrderID'], 'tipo_cliente' => $row['tipo_cliente'], 'nombre_cliente' => $row['nombre_cliente'], 'numero_cliente' => $row['numero_cliente'], 'RFC' => $row['RFC'], 'email' => $row['email'], 'calle' => $row['calle'], 'numero_exterior' => $row['numero_exterior'], 'numero_interior' => $row['numero_interior'], 'colonia' => $row['colonia'], 'ciudad' => $row['ciudad'], 'estado' => $row['estado'], 'pais' => $row['pais'], 'cp' => $row['cp'], 'telefono1' => $row['telefono1'], 'telefono2' => $row['telefono2'], 'telefono3' => $row['telefono3'], 'clase_producto' => $row['clase_producto'], 'tipo_producto' => $row['tipo_producto'], 'otro_producto' => $row['otro_producto'], 'marca_producto' => $row['marca_producto'], 'otra_marca' => $row['otra_marca'], 'modelo' => $row['Modelo'], 'descripcion' => $row['descripcion'], 'numero_parte' => $row['numero_parte'], 'serie' => $row['serie'], 'revision' => $row['revision'], 'clase_servicio' => $row['clase_servicio'], 'otra_clase' => $row['otra_clase'], 'tipo_falla' => $row['tipo_falla'], 'comentarios' => $row['comentarios'], 'Flete' => $row['Flete'], 'Horario' => $row['Horario']);
		
	}
	
	public function setStatusDONE($OrderID) {
		$result = true;
		$strSQL = "UPDATE `ordenes`  SET `Status` =  'DONE' WHERE `OrderID` = '" . $OrderID . "'";
		try {
			mysql_query($strSQL, self::$conn);
		}  
		catch (Exception $e) {
			$result = false;
		}
	}
		
}

?>