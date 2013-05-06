<?php 
	require_once('lib/nusoap.php'); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Untitled Document </title>
	</head>
	<body>
    <script type="text/javascript">
        	function Metodo(idM){
            	if(idM==1){
                	document.getElementById('hidMetodo').value=1;
                }
                if(idM==2){
                    document.getElementById('hidMetodo').value=2;
                }                    
				if(idM==2){
                    document.getElementById('hidMetodo').value=3;
                }                            
			}
		</script>
	<form>
		<h2>Consumo del web service php</h2>
		<br />
		Nombre:&nbsp;<input type="text" id="txtNombre" name="txtNombre" />
		Clave:&nbsp;<input type="text" id="txtClave" name="txtClave" />
		<br />
		<input type="submit" id="subValidar" name="subValidar" value="Validar" onclick="Metodo(1)"/>
		<br />
		<input type="submit" id="subEncriptar" name="subEncriptar" value="Encriptar" onclick="Metodo(2)"/>
        <br /><input type="submit" id="subSuma" name="subSuma" value="Sumar" onclick="Metodo(3)"/>
		<input type="hidden" id="hidMetodo" name="hidMetodo" />
	</form>
</body>
</html>
<?php
	$nombre=$_REQUEST['txtNombre'];   
	$clave=$_REQUEST['txtClave'];               
	if($_REQUEST['hidMetodo']==1){
		$client = new nusoap_client ("http://agiofix.com.mx/service/wservice.php?wsdl&#8217;", true);                           
        $result = $client->call('validar', array('nombre' => $nombre,'clave' => $clave));                              
        if($result==true){
        	echo "<label style='color:#0000ff'>válido</label>";
		}
		else{
			echo "<label style='color:#ff0000′>no es válido</label>";
		}
	}
    
	if($_REQUEST['hidMetodo']==2){                                         
    	$client = new nusoap_client ("http://agiofix.com.mx/service/wservice.php?wsdl&#8217;", true);                          
        $result = $client->call('encriptar', array('nombre' => $nombre,'clave' => $clave));                                                                                        
        if($result['nombreE']!='' && $result['claveE']!=''){
        	echo "<label style='color:#ff0000′>Nombre encriptado: " .$result['nombreE']."<br/> Clave encriptada: ".$result['claveE']."</label>";                                         
        }                                                       
	}
	
	if($_REQUEST['hidMetodo']==3){                                         
    	$client = new nusoap_client ("http://agiofix.com.mx/service/wservice.php?wsdl&#8217;", true);                          
        $result = $client->call('sumar', array('op1' => $nombre,'op2' => $clave));        
		echo $nombre."<br />";
		echo $clave."<br />";                                                                                
        echo $result."<br />";
	}
	
?>