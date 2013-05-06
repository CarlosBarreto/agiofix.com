<?php
//Varificar que la orden sea recibida desde una peticion POST
if($_SERVER['REQUEST_METHOD']=="POST"){
	//Cabecera para Codificación json
	header('Content-Type: application/json; charset=utf-8');
	
	//Extraer las variables, método CarlosB
	foreach ($_POST as $nombre_campo => $valor) {
		$asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
		eval($asignacion);
	}
	
	$return_array = array();
	
	try {
		//To set the DataBase Connection
		//include('_/source/dataAccess.class.php');
		//include('DatabaseConnection.class.php');
		
		// 2013.04.29
		#Conectamos con MySQL
		$config['host'] = "localhost";
        $config['dbname'] = "agiotech_service";
        $config['username'] = "agiotech_agiofix";
        $config['password'] = "Agiotech01";
		
		$conexion = mysql_connect($config['host'],$config['username'], $config['password']);

		#Seleccionamos la base de datos a utilizar
		mysql_select_db($config['dbname']);
		
		#Obtener el OrderID
		$strSQL = "SELECT CreateOrder('" . utf8_decode(mysql_real_escape_string($nombre)) ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($rfc))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($email))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($calle))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string("$num_ext"))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string("$num_int"))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($colonia))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($ciudad))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($estado))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($pais))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string("$cp"))  ."', ";
		$strSQL .= "'" . utf8_decode( mysql_real_escape_string("$tel1"))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string("$tel2"))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string("$tel3"))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($clase_producto))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($tipo_producto)) ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($otro_producto))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($marca_producto))  ."', ";
		$strSQL .= "'', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($modelo))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($descripcion))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($num_parte))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($serie))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($revision))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($clase_servicio))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($clase_servicio_otro))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($tipo_falla))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($comentarios))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($flete))  ."', ";
		$strSQL .= "'" . utf8_decode(mysql_real_escape_string($horario))  ." ');";
		
		$strSQL = utf8_decode($strSQL);
		
		$result = mysql_query($strSQL, $conexion);
		while( $row = mysql_fetch_array ( $result )) {
			$msg = '¡Gracias! Se ha registrado su información bajo el número de órden ['. $row[0] . ']. Pronto, recibirá una confirmación por correo electrónico';//.$strSQL; //$tipo_cliente;
  		}
		
		
		
		/*$array = array('0', $tipo_cliente, $nombre, $num_cliente, $email, $calle, $num_ext, $num_int, $colonia, $ciudad, $estado, $pais,					   $cp, $tel1, $tel2, $tel3, $clase_producto, $tipo_producto, $otro_producto, $marca_producto, $modelo, $descripcion, $num_parte, $serie, $revision, $clase_servicio, $clase_servicio_otro, $tipo_falla, $comentarios, 'NEW');
		*/
		
		/*
		$strSQL = "INSERT INTO `ordenes`(`ID`, `tipo_cliente`, `nombre_cliente`, `numero_cliente`, `email`, `calle`, ";
		$strSQL .= "`numero_exterior`, `numero_interior`, `colonia`, `ciudad`, `estado`, `pais`, `cp`, `telefono1`, ";
		$strSQL .= "`telefono2`, `telefono3`, `clase_producto`, `tipo_producto`, `otro_producto`, `marca_producto`, ";
		$strSQL .= "`otra_marca`, `Modelo`, `descripcion`, `numero_parte`, `serie`, `revision`, `clase_servicio`, ";
		$strSQL .= "`otra_clase`, `tipo_falla`, `comentarios`, `Status`) ";
		
		$strSQL .= " VALUE (0, '". $tipo_cliente ."' ,'". $nombre ."' ,'". $num_cliente ."' ,'". $email ."' ,'". $calle . "' ,";
		$strSQL .= "'". $num_ext ."' ,'". $num_int ."' ,'". $colonia ."' ,'". $ciudad ."' ,'". $estado ."' ,'". $pais ."' ,'". $cp ."' ,'". $tel1 ."' ,";
		$strSQL .= "'". $tel2 ."' ,'". $tel3 ."' ,'". $clase_producto ."' ,'". $tipo_producto ."' ,'". $otro_producto ."' ,'". $marca_producto ."' ,";
		$strSQL .= "'' ,'". $modelo ."' ,'". $descripcion ."' ,'". $num_parte ."' ,'". $serie ."' ,'". $revision ."' ,'". $clase_servicio ."' ,";
		$strSQL .= "'". $clase_servicio_otro ."' ,'". $tipo_falla ."' ,'". $comentarios ."', 'NEW')";
		
		mysql_query($strSQL, $conexion);
			//echo $arr_orden;
	
		#Cerramos la conexión con la base de datos
		mysql_close($conexion);
		
		//$db= new DatabaseConnection();
		//$db->insertInto('ordenes', $array, true);
		
		//$dbaction = $db->alter($strSQL);
	
		*/
		$return_array['success'] = "true";
		$return_array['msg'] = $msg; //'¡Gracias! Se ha registrado su información, pronto, recibirá la confirmación'.$strSQL; //$tipo_cliente;
		
		
	}  catch (Exception $e) {
		$return_array['success'] = "false";
		$return_array['msg'] = 'El error ocurre aquí' . $e->getMessage();
	}	
	
	echo json_encode($return_array);
	//echo json_encode(array('success'=>"true"));
		
} else{	
	header('location: index');
}
?>