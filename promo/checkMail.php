<?php

/*$mysql_db = "integrat_agiofixpromo";
$mysql_user = "integrat_agiofix";
$mysql_pass = "agiofixAdmin1";
$mysql_link = mysql_connect("www.integratto.net", $mysql_user, $mysql_pass);
mysql_select_db($mysql_db, $mysql_link);


$result = mysql_query($mysql_link,"SELECT * FROM registro_clientes_promo");// WHERE Correo =" + $_POST["json"]);

if(mysql_num_rows($query)===0)
{
	$reply['success'] = "valid"; //Create an associative array which is going to be input of json_encode()
	echo json_encode($reply);
}
else
{
	echo $row['Correo'];
}

mysql_close($mysql_link);*/


// Make a MySQL Connection
$mysql_db = "agiotech_agiofixpromo";//"integrat_agiofixpromo";
$mysql_user = "agiotech_promo";//"integrat_agiofix";
$mysql_pass = "3SqiTX!punrk";//"agiofixAdmin1";
$mysql_server = "localhost";//"integratto.net";

$mail = $_POST["json"];
/*$mysql_db = "futuromi_fragua";
$mysql_user = "futuromi_fragua";
$mysql_pass = "fraguaAdmin1";
$mysql_server = "futuromillonario.com.mx";*/
$query = "SELECT * FROM registro_clientes_promo WHERE Correo = '$mail'";

mysql_connect($mysql_server, $mysql_user, $mysql_pass) or die(mysql_error());
mysql_select_db($mysql_db) or die(mysql_error());

// Retrieve all the data from the "example" table
$result = mysql_query($query) or die(mysql_error());  

// store the record of the "example" table into $row
//$row = mysql_fetch_array( $result );
// Print out the contents of the entry 
if(mysql_num_rows($result)==0)
{
	$query = "INSERT INTO registro_clientes_promo(Correo) VALUES ('$mail')";
	$result = mysql_query($query);
	$reply['success'] = "valid"; //Create an associative array which is going to be input of json_encode()
	echo json_encode($reply);
}
else
{
	echo json_encode("encontrado");
}

?>
