<?php  
	require_once('lib/nusoap.php');  
	require_once('metodos.php');
	
    $server = new nusoap_server;           
	//Cambiar la codificación a UTF-8
	$server->soap_defencoding = 'UTF-8';
    // Configura WSDL
    $server->configureWSDL('wservice', 'urn:wservicewsdl');         
	// Un tipo complejo que se usa con el método encriptar
	
	$server->wsdl->addComplexType(
    	'ArrayEnc',
    	'complexType',
    	'struct',
    	'all',
    	'',
    	array(
        	'nombreE' => array('name' => 'nombreE', 'type' => 'xsd:string'),
        	'claveE' => array('name' => 'claveE', 'type' => 'xsd:string')       
    	)
	);
	
	#tipo complejo para los datos de una orden
	$server->wsdl->addComplexType(
    	'OrderArray',
    	'complexType',
    	'struct',
    	'all',
    	'',
    	array(
        	'OrderID' 			=> array('name' => 'OrderID', 'type' => 'xsd:string'),
        	'tipo_cliente' 		=> array('name' => 'tipo_cliente', 'type' => 'xsd:string'),
			'nombre_cliente' 	=> array('name' => 'nombre_cliente', 'type' => 'xsd:string'),
			'numero_cliente' 	=> array('name' => 'numero_cliente', 'type' => 'xsd:string'),
			'RFC'				=> array('name' => 'RFC', 'type' => 'xsd:string'),
			'email' 			=> array('name' => 'email', 'type' => 'xsd:string'),
			'calle' 			=> array('name' => 'calle', 'type' => 'xsd:string'),
			'numero_exterior' 	=> array('name' => '', 'type' => 'xsd:string'),
			'numero_interior' 	=> array('name' => '', 'type' => 'xsd:string'),
			'colonia' 			=> array('name' => 'colonia', 'type' => 'xsd:string'),
			'ciudad' 			=> array('name' => 'ciudad', 'type' => 'xsd:string'),
			'estado' 			=> array('name' => 'estado', 'type' => 'xsd:string'),
			'pais' 				=> array('name' => 'pais', 'type' => 'xsd:string'),
			'cp' 				=> array('name' => 'cp', 'type' => 'xsd:string'),
			'telefono1' 		=> array('name' => 'telefono1', 'type' => 'xsd:string'),
			'telefono2' 		=> array('name' => 'telefono2', 'type' => 'xsd:string'),
			'telefono3' 		=> array('name' => 'telefono3', 'type' => 'xsd:string'),
			'clase_producto' 	=> array('name' => 'clase_producto', 'type' => 'xsd:string'),
			'tipo_producto' 	=> array('name' => 'tipo_producto', 'type' => 'xsd:string'),
			'otro_producto' 	=> array('name' => 'otro_producto', 'type' => 'xsd:string'),
			'marca_producto' 	=> array('name' => 'marca_producto', 'type' => 'xsd:string'),
			'otra_marca' 		=> array('name' => 'otra_marca', 'type' => 'xsd:string'),
			'modelo' 			=> array('name' => 'modelo', 'type' => 'xsd:string'),
			'descripcion' 		=> array('name' => 'descripcion', 'type' => 'xsd:string'),
			'numero_parte' 		=> array('name' => 'numero_parte', 'type' => 'xsd:string'),
			'serie' 			=> array('name' => 'serie', 'type' => 'xsd:string'),
			'revision' 			=> array('name' => 'revision', 'type' => 'xsd:string'),
			'clase_servicio' 	=> array('name' => 'clase_servicio', 'type' => 'xsd:string'),
			'otra_clase' 		=> array('name' => 'otra_clase', 'type' => 'xsd:string'),
			'tipo_falla' 		=> array('name' => 'tipo_falla', 'type' => 'xsd:string'),       
			'comentarios' 		=> array('name' => 'comentarios', 'type' => 'xsd:string'),
			'Flete' 		=> array('name' => 'Flete', 'type' => 'xsd:string'),
			'Horario' 		=> array('name' => 'Horario', 'type' => 'xsd:string')
		)
	);

	// Registro de los métodos expuestos
	$server->register('validar',                // Nombre del método
    	array('nombre' => 'xsd:string','clave'=>'xsd:string'),        // Entradas
    	array('return' => 'xsd:string'),      // Salidas
    	'urn:wservicewsdl',                      // namespace
    	'urn:wservicewsdl#validar',              // soapaction (URI del header)
        'rpc',                                   // protocolo
    	'encoded',                               // como se encuentran los datos en el xml
    	'Web service de validación'              // documentación del método
	);
	
	$server->register('encriptar',               
    	array('nombre' => 'xsd:string','clave'=>'xsd:string'),
    	array('return' => 'tns:ArrayEnc'),     
    	'urn:wservicewsdl',                    
    	'urn:wservicewsdl#encriptar',          
    	'rpc',                               
    	'encoded',                            
    	'Web service de encriptación'        
	);
    
	//Registrar el método suma
	$server->register('sumar', 
	array('op1' => 'xsd:int','op2'=>'xsd:int'),        // Entradas
    	array('return' => 'xsd:string'),      // Salidas
    	'urn:wservicewsdl',                      // namespace
    	'urn:wservicewsdl#sumar',              // soapaction (URI del header)
        'rpc',                                   // protocolo
    	'encoded',                               // como se encuentran los datos en el xml
    	'Web service de sumar'              // documentación del método
	);
	
	//Registrar el nuevo método
	$server->register('getNewOrder_ws', 
		array('op1' => 'xsd:int'), 
		array('return' => 'tns:OrderArray'),
		'urn:wservicewsdl',                    
    	'urn:wservicewsdl#getNewOrder_ws',          
    	'rpc',                               
    	'encoded',                            
    	'Web service de getNewOrder_ws'        
	);
	
	$server->register('setOrderDONE_ws', 
		array('OrderID' => 'xsd:string'), 
		array('return' => 'xsd:boolean'),
		'urn:wservicewsdl',                    
    	'urn:wservicewsdl#setOrderDONE_ws',          
    	'rpc',                               
    	'encoded',                            
    	'Web service de setOrderDONE_ws'        
	);
	
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
    $server->service($HTTP_RAW_POST_DATA);
?>