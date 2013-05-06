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
$mysql_db = "integrat_daga";
$mysql_user = "integrat";
$mysql_pass = "fritrubi";
$mysql_server = "integratto.net";

/*$mysql_db = "futuromi_fragua";
$mysql_user = "futuromi_fragua";
$mysql_pass = "fraguaAdmin1";
$mysql_server = "futuromillonario.com.mx";*/

mysql_connect($mysql_server, $mysql_user, $mysql_pass) or die(mysql_error());
mysql_select_db($mysql_db) or die(mysql_error());

// Retrieve all the data from the "example" table
$result = mysql_query("SELECT * FROM generos") or die(mysql_error());  

// store the record of the "example" table into $row
$row = mysql_fetch_array( $result );
// Print out the contents of the entry 

echo "genero: ".$row['ID'];


?>
