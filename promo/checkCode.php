<?php

// Make a MySQL Connection
$mysql_db = "agiotech_agiofixpromo";//"integrat_agiofixpromo";
$mysql_user = "agiotech_promo";//"integrat_agiofix";
$mysql_pass = "3SqiTX!punrk";//"agiofixAdmin1";
$mysql_server = "localhost";//"integratto.net";

$codigo = $_POST["json"];
/*$mysql_db = "futuromi_fragua";
$mysql_user = "futuromi_fragua";
$mysql_pass = "fraguaAdmin1";
$mysql_server = "futuromillonario.com.mx";*/
$query = "SELECT * FROM registro_codigos_promo WHERE Codigo = '$codigo'";

mysql_connect($mysql_server, $mysql_user, $mysql_pass) or die(mysql_error());
mysql_select_db($mysql_db) or die(mysql_error());

// Retrieve all the data from the "example" table
$result = mysql_query($query) or die(mysql_error());  

// store the record of the "example" table into $row
//$row = mysql_fetch_array( $result );
// Print out the contents of the entry 
if(mysql_num_rows($result)==0)
{
	$query = "INSERT INTO registro_codigos_promo(Codigo) VALUES ('$codigo')";
	$result = mysql_query($query);
	
	$codigo = $_POST["json"];
	$url = 'PDFTEST.php';
	$myvars = 'json=' . $codigo;

	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

	curl_exec( $ch );
	
	$reply['success'] = "valid"; //Create an associative array which is going to be input of json_encode()
	echo json_encode($reply);
}
else
{
	echo json_encode("encontrado");
}

?>