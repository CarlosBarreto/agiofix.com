<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	header('Content-Type: application/json; charset=utf-8');

	$codigohtml='
	<html>
	<head>
	<title>Comentarios</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	</head>
	<body>
	<div style="font-family:Arial,sans-serif;background-color: #6oBAED7;">
		<h1 style="color:#fff;">CONTACTO AGIOFIX</h1>
		<label for="nombre" style="font-weight:bold;color:#31536E; margin:20px 0 0 0;">Nombre:</label>
			<p style="font-weight:bold;margin: 0 10px 10px;">'.$_POST["nombre"].'</p>
		<label for="comentario" style="font-weight:bold;color:#31536E; margin:20px 0 0 0;">Empresa:</label>
			<p style="font-weight:bold;margin: 0 10px 10px;">'.$_POST["empresa"].'</p>
		<label for="telefono" style="font-weight:bold;color:#31536E; margin:20px 0 0 0;">Telefono:</label>
			<p style="font-weight:bold;margin: 0 10px 10px;">'.$_POST["telefono"].'</p>
		<label for="correo" style="font-weight:bold;color:#31536E; margin:20px 0 0 0;">Correo:</label>
			<p style="font-weight:bold;margin: 0 10px 10px;">'.$_POST["email"].'</p>
		<label for="asunto" style="font-weight:bold;color:#31536E; margin:20px 0 0 0;">Asunto:</label>
			<p style="font-weight:bold;margin: 0 10px 10px;">'.$_POST["asunto"].'</p>
		
	</div>
	</body>
	</html>

	';

	$email_b='contacto@agiofix.com.mx';
	$asunto='CONTACTO Agiofix';
	$headers="X-Mailer: PHP5\n";
	$headers.='MIME-VERSION: 1.0'."\n";
	$headers.='Content-type: text/html; charset=UTF-8'."\r\n";
	$headers .= "From: Web Agiofix<no-reply@".$_SERVER['SERVER_NAME'].">\r\nReply-To: ".$_POST["email"];



	//echo $codigohtml;
	if(mail($email_b,$asunto,$codigohtml,$headers))
		echo json_encode(array('success'=>"true"));
	else
		echo json_encode(array('success'=>"false"));
}else{	
	header('location: index');
}

?>