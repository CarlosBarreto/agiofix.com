<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">        
        <link rel="shortcut icon" href="favico.ico">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <header class="header">
            <div class="wrap txt-left">
                <a href="levantar-orden<?php echo (isset($_GET['en']) ? "?en" : "" ); ?>"><img alt="Logo agiofix" src="img/logo.png"></a>
            </div>
            <div id="header-banda">
                <div id="header-banda-contenedor">
                    <p id="banda-content" class="float-right">
                            <a href="tel:+523336277577" id="banda-telefono"></a>
                            <a href="#" id="banda-email" data-select="banda-email"></a>

                    </p>
                    <div id="globo-form-email">
                        <form class="form_contacto">
                            <input class="input" type="text" name="nombre">
                            <input class="input" type="text" name="empresa">
                            <input class="input" type="tel" name="telefono">
                            <input class="input" type="email" name="email" required="">
                            <textarea class="input" name="asunto" required=""></textarea>
                            <input type="submit" value="" name="enviar">
                            <span class="form-true l10"></span>

                        </form>
                    </div>
                </div>
            </div>
        </header>
        <section class="principal-screen">
            <header class="menu-header">
                <div class="wrap">
                <nav>
                    <ul id="orden-menu" class="row">
                        <li data-click="leventar" class="span4 orden-select"><a href="#">LEVANTAR ORDEN</a></li>
                        <li data-click="seguimiento" class="span3 orden-noselect"><a href="seguimiento">SEGUIMIENTO</a></li>
                        <li data-click="precios" class="span4-b orden-noselect"><a href="precios">PRECIOS</a></li>
                    </ul>
                </nav>
                <p>
                    Puedes levantar una orden, de esta forma podrás enviarnos tu producto o pasaremos a tu domicilio.<br>Cuando tu orden sea revisada, recibirás un correo con el número de órden, el cual te servirá también como código de rastreo.
                </p>                
                </div>
            </header>
            <article id="levantar_orden">
                <header>         
                <div class="wrap bgcolor-base orden-pasos">
                    <div class="levantar-a levantar-f1">
                        <h2>A</h2>
                        <p>Consulta costos de servicio</p>
                    </div>
                    <div class="levantar-b levantar-f1">
                        <h2>B</h2>
                        <p>Llena el formulario y acepta términos, condiciones y costos de transporte y diagnóstico</p>
                    </div>
                    <div class="levantar-c levantar-f1">
                        <h2>C</h2>
                        <p>Recibe número de orden junto con nuestras instrucciones de envío y rastreo de tu producto</p>
                    </div>
                    <div class="levantar-c levantar-f1">
                        <h2>D</h2>
                        <p>Una vez realizado el diagnóstico se te contactará para indicar el tiempo, costo de reparación y detalles de la falla</p>
                    </div>

                    <div class="levantar-a levantar-f2">
                        <h2>E</h2>
                        <p>Consulta el status de la orden en linea</p>
                    </div>
                    <div class="levantar-b levantar-f2">
                        <h2>F</h2>
                        <p>Recibe tu presupuesto</p>
                    </div>
                    <div class="levantar-c levantar-f2">
                        <h2>G</h2>
                        <p>Realiza el pago</p>
                    </div>
                    <div class="levantar-c levantar-f2">
                        <h2>H</h2>
                        <p>Obtén tu producto reparado</p>
                    </div>  
                </div>                         
                </header>
                <div class="wrap">
                    <form  name="form_levantar_orden" class="txt-left" id="form_levantar_orden" method="POST">
                        <!--<div class="span12-bie">
                            <label class="span2-b"><?php echo (isset($_GET['en']) ? "Client type" : "Tipo de cliente" ); ?></label>
                            <select class="span3" required name="tipo_cliente" placeholder="Seleccionar...">
                                <option value="0" disabled selected="selected"><?php echo (isset($_GET['en']) ? "Select..." : "Seleccionar..." ); ?></option>
                                <option value="Usuario"><?php echo (isset($_GET['en']) ? "User" : "Usuario" ); ?></option>
                                <option value="Empresa"><?php echo (isset($_GET['en']) ? "Business customer" : "Empresa" ); ?></option>
                            </select>
                        </div> -->
                        <div class="span12-bie">
                            <label  class="span2-b" for="nombre"><?php echo (isset($_GET['en']) ? "Name" : "Nombre" ); ?></label>
                            <input required name="nombre" class="span6" type="text">
                            <!--
                            <label class="span2-a"><?php echo (isset($_GET['en']) ? "Customer number" : "Número de cliente" ); ?></label>
                            <input name="num_cliente" class="span3-b" type="text">
                            -->
                        </div>
                        <div class="span12-bie">
                            <label class="span2-b">RFC</label>
                            <input name="rfc" class="span3" type="text">
                            <label  class="span60" for="email">E-mail</label>
                            <input required class="span6" name="email" type="email">
                        </div>
                        <div class="span12-bie">
                            <label  class="span2-b" for="calle"><?php echo (isset($_GET['en']) ? "Street" : "Calle" ); ?></label>
                            <input required class="span4" name="calle" type="text">
                            <label class="span2-a" for="num_ext"><?php echo (isset($_GET['en']) ? "Exterior number" : "Número Exterior" ); ?></label>
                            <input required class="span2-b" name="num_ext" type="text">
                            <label class="span2-a" for="num_int"><?php echo (isset($_GET['en']) ? "Interior number" : "Número Interior" ); ?></label>
                            <input class="span2-b" name="num_int" type="text">
                        </div>
                        <div class="span12-bie">
                            <label class="span2-b" for="colonia"><?php echo (isset($_GET['en']) ? "Suburb" : "Colonia" ); ?></label>
                            <input class="span3-a" name="colonia" type="text">

                            <label class="span1" for="ciudad"><?php echo (isset($_GET['en']) ? "City" : "Ciudad" ); ?></label>
                            <input class="span3" name="ciudad" type="text">
                            <label  class="span1" for="estado"><?php echo (isset($_GET['en']) ? "State" : "Estado" ); ?></label>
                            <input required class="span3-b" name="estado" type="text">

                        </div>
                        <div class="span12-bie">
                            <label class="span2-b" for="pais"><?php echo (isset($_GET['en']) ? "Country" : "País" ); ?></label>
                                <input required class="span3-a" name="pais" type="text">
                            <label class="span1" for="cp"><?php echo (isset($_GET['en']) ? "Zip" : "Código Postal" ); ?></label>
                            <input required class="span1" name="cp" type="text">

                        </div>
                        <div class="span12-bie">
                            <label class="span2-b" for="telefono"><?php echo (isset($_GET['en']) ? "Telephone 1" : "Teléfono 1" ); ?></label>
                            <input required name="tel1" class="span2" type="tel">
                            <label class="span2" for="telefono"><?php echo (isset($_GET['en']) ? "Telephone 2" : "Teléfono 2" ); ?></label>
                            <input name="tel2" class="span2" type="tel">
                            <label class="span2" for="telefono"><?php echo (isset($_GET['en']) ? "Telephone 3" : "Teléfono 3" ); ?></label>
                            <input name="tel3" class="span2" type="tel">
                        </div>
                        <div class="span12-bie" style="border-top:1px dotted #000;padding-top:10px">
                            <label class="span3-b"><?php echo (isset($_GET['en']) ? "Product Class" : "Clase de producto" ); ?></label>
                            <select required id="select_producto"  class="span2" name="clase_producto"  placeholder="Seleccionar...">
                                <option value="0" disabled selected="selected"><?php echo (isset($_GET['en']) ? "Select..." : "Seleccionar..." ); ?></option>
                                <option data-p="1" value="Equipo"><?php echo (isset($_GET['en']) ? "Product" : "Equipo" ); ?></option>
                                <option data-p="2" value="Componente"><?php echo (isset($_GET['en']) ? "Component" : "Componente" ); ?></option>

                                <?php echo (isset($_GET['en']) ? "" : '<option data-p="2" value="Accesorio">' ); ?><?php echo (isset($_GET['en']) ? "Accessorie" : "Accesorio" ); ?><?php echo (isset($_GET['en']) ? "" : '</option>' ); ?>

                            </select>
                            <label class="span2"><?php echo (isset($_GET['en']) ? "Product Type" : "Tipo de producto" ); ?></label>
                            <select class="span2" disabled name="tipo_producto" id="select_tipo"  placeholder="Seleccionar...">
                                <option value="0" disabled selected="selected"><?php echo (isset($_GET['en']) ? "Select..." : "Seleccionar..." ); ?></option>
                                <option class="t_com" value="MBD">MBD</option>
                                <option class="t_com" value="MEM">MEM</option>
                                <option class="t_com" value="HDD">HDD</option>
                                <option class="t_com" value="ODD">ODD</option>
                                <option class="t_com" value="LCD">LCD</option>

                                <option class="t_pro" value="PC">PC</option>
                                <option class="t_pro" value="Monitor"><?php echo (isset($_GET['en']) ? "Screens" : "Monitor" ); ?></option>
                                <option class="t_pro" value="Telefono"><?php echo (isset($_GET['en']) ? "Telephone" : "Teléfono" ); ?></option>
                                <option class="t_pro" value="Laptop">Laptop</option>
                                <option class="t_pro" value="Proyector"><?php echo (isset($_GET['en']) ? "Searchlight" : "Proyector" ); ?></option>
                                <option class="t_pro" value="Impresora"><?php echo (isset($_GET['en']) ? "Printer" : "Impresora" ); ?></option>
                                <option class="t_pro" value="Tablet">Tablet</option>
                                <option class="t_pro" value="Smartphone">Smartphone</option>
                                <option class="t_pro" value="Audio/Video">Audio/Video</option>

                                <option class="" value="Otro"><?php echo (isset($_GET['en']) ? "Other" : "Otro" ); ?></option>
                            </select>


                        </div>
                        <div class="span12-bie" >
                            <label class="span3-b"><?php echo (isset($_GET['en']) ? "Other products (specify)" : "Otro producto (especificar)" ); ?></label>
                            <input name="otro_producto" class="span" type="text">
                            <label class="span2"><?php echo (isset($_GET['en']) ? "Trademark" : "Marca de producto" ); ?></label>
                            <select id="marca_producto" class="span2" name="marca_producto"  placeholder="Seleccionar...">
                                <option value="0" disabled selected="selected"><?php echo (isset($_GET['en']) ? "Select..." : "Seleccionar..." ); ?></option>
                                <option>3M</option>
                                <option>Acer</option>
                                <option>Alcatel</option>
                                <option>Alpine</option>
                                <option>Amazon</option>
                                <option>Apple</option>
                                <option>Asus</option>
                                <option>AT&T</option>
                                <option>Audiobox</option>
                                <option>Boss</option>
                                <option>Brother</option>
                                <option>Bushnell</option>
                                <option>Canon</option>
                                <option>Canon</option>
                                <option>Celestron</option>
                                <option>Cisco</option>
                                <option>Clarion</option>
                                <option>Dell</option>
                                <option>Draper</option>
                                <option>DXG</option>
                                <option>Dynex</option>
                                <option>e-Replacement</option>
                                <option>Electra</option>
                                <option>Elektra</option>
                                <option>Elite Screens</option>
                                <option>Epson</option>
                                <option>Fujifilm</option>
                                <option>Fujitsu</option>
                                <option>Garmin</option>
                                <option>GE</option>
                                <option>General Electric</option>
                                <option>GoPro</option>
                                <option>Hitachi</option>
                                <option>HP</option>
                                <option>HTC</option>
                                <option>Humminbird</option>
                                <option>Infity</option>
                                <option>Infocus</option>
                                <option>Ingram Micro</option>
                                <option>Insignia</option>
                                <option>JVC</option>
                                <option>JVL</option>
                                <option>kenwood</option>
                                <option>Kicker</option>
                                <option>Kyocera</option>
                                <option>Lanix</option>
                                <option>Lawrance</option>
                                <option>Lenmar</option>
                                <option>Lenovo</option>
                                <option>Lexmark</option>
                                <option>LG</option>
                                <option>Meebox</option>
                                <option>Megabyte Technology</option>
                                <option>Megallan</option>
                                <option>Microsoft</option>
                                <option>Midland</option>
                                <option>Mitsubishi</option>
                                <option>Motorola</option>
                                <option>Mustek</option>
                                <option>Nikon</option>
                                <option>Nintendo</option>
                                <option>Nokia</option>
                                <option>Olympus</option>
                                <option>Optoma</option>
                                <option>Palm</option>
                                <option>Panasonic</option>
                                <option>Pantech</option>
                                <option>Pentax</option>
                                <option>Phillips</option>
                                <option>Pioneer</option>
                                <option>Polycom</option>
                                <option>Power Acoustik</option>
                                <option>Pyle</option>
                                <option>Pyramid</option>
                                <option>Rand McNally</option>
                                <option>RCA</option>
                                <option>RIM</option>
                                <option>Rockford fosgate</option>
                                <option>Samsung</option>
                                <option>Sanyo</option>
                                <option>Sharp</option>
                                <option>SONY</option>
                                <option>Sony Ericsson</option>
                                <option>TomTom</option>
                                <option>Toshiba</option>
                                <option>Uniden</option>
                                <option>V7</option>
                                <option>Verizon</option>
                                <option>View Sonic</option>
                                <option>Vtech</option>
                                <option>Xerox</option>
                                <option>Otro..</option>
                            </select>
                        </div>
                        <div class="span12-bie">
                            <label class="span3-b"><?php echo (isset($_GET['en']) ? "Model" : "Modelo" ); ?></label>
                            <input name="modelo" class="span2" type="text">
                            <label class="span2"><?php echo (isset($_GET['en']) ? "Description" : "Descripción" ); ?></label>
                            <input name="descripcion" class="span5" type="text">


                        </div>
                        <div class="span12-bie">
                            <label class="span3-b"><?php echo (isset($_GET['en']) ? "Part number / SKU #" : "Número de parte / SKU #" ); ?></label>
                            <input name="num_parte" class="span2" type="text">
                            <label class="span2"><?php echo (isset($_GET['en']) ? "Series" : "Serie" ); ?></label>
                            <input name="serie" class="span3" type="text">
                            <label class="span1"><?php echo (isset($_GET['en']) ? "Review" : "Revisión" ); ?></label>
                            <input name="revision" class="span1" type="text">
                        </div>

                        <div class="span12-bie" style="border-top:1px dotted #000;padding-top:10px">
                            <label class="span3-b"><?php echo (isset($_GET['en']) ? "Class of Service" : "Clase de Servicio" ); ?></label>
                            <select required class="span3" name="clase_servicio" placeholder="Seleccionar...">
                                <option value="0" disabled selected="selected"><?php echo (isset($_GET['en']) ? "Select..." : "Seleccionar..." ); ?></option>
                                <option value="Reparacion"><?php echo (isset($_GET['en']) ? "Repair" : "Reparación" ); ?></option>
                                <option value="Restauracion"><?php echo (isset($_GET['en']) ? "Restoration" : "Restauración" ); ?></option>
                                <option value="Embarque de refaccion"><?php echo (isset($_GET['en']) ? "Shipping spare" : "Embarque de refacción" ); ?></option>
                                <option value="Intercambio"><?php echo (isset($_GET['en']) ? "Exchange" : "Intercambio" ); ?></option>
                                <option value="Diagnostico"><?php echo (isset($_GET['en']) ? "Diagnosis" : "Diagnóstico" ); ?></option>
                                <option value="Otro"><?php echo (isset($_GET['en']) ? "Model" : "Otro" ); ?></option>
                            </select>
                            <label class="span3"><?php echo (isset($_GET['en']) ? "Another class of service (specify)" : "Otra clase de servicio (especificar)" ); ?></label>
                            <input name="clase_servicio_otro" class="span2" type="text">
                        </div>
                        <!-- Upd By CarlosB 2013-05-01 -- Begin -->
                         <div class="span12-bie" style="padding-top:10px">
                            <label class="span2"><?php echo (isset($_GET['en']) ? "Freight" : "Servicio de Recolección y Entrega" ); ?></label>
                            <select required class="span4" name="flete" placeholder="Seleccionar...">
                                <option value="Mostrador"><?php echo (isset($_GET['en']) ? "In Place" : "No Gracias (Entrega en Mostrador)" ); ?></option>
                                <option value="Completo (360)"><?php echo (isset($_GET['en']) ? "Complete" : "Servicio 360°(Completo)" ); ?></option>
                                <option value="Solo Recolección"><?php echo (isset($_GET['en']) ? "Receive Only" : "Solo Recolección" ); ?></option>
                                <option value="Solo Envío"><?php echo (isset($_GET['en']) ? "Ship Only" : "Solo Entrega" ); ?></option>
                                
                                
                            </select>
                       </div>
                       <div class="span12-bie" style="padding-top:10px">
                            <label class="span2"><?php echo (isset($_GET['en']) ? "Collection Time" : "Horario Sugerido de Recolección" ); ?></label>
                             <select required class="span4" name="Horario" placeholder="Seleccionar...">
                                <option value="9 a 12"><?php echo (isset($_GET['en']) ? "9:00 a.m. to 12:00 p.m." : "De 9:00 a.m. a 12:00 p.m." ); ?></option>
                                <option value="12 a 3"><?php echo (isset($_GET['en']) ? "9:00 a.m. to 12:00 p.m." : "De 12:00 p.m. a 3:00 p.m." ); ?></option>
                                <option value="3 a 6"><?php echo (isset($_GET['en']) ? "9:00 a.m. to 12:00 p.m." : "De 3:00 p.m. a 6:00 p.m" ); ?></option>
                            </select>
                        </div>
                        <!-- Upd By CarlosB 2013-05-01 -- End -->
                        <div class="span12-bie">
                            <label class="span12-b"><?php echo (isset($_GET['en']) ? "Fail Details" : "Tipo de falla presentada:" ); ?></label>
                            <label class="span12-b" style="text-align:left"><?php echo (isset($_GET['en']) ? "(Please specify fail symptoms as detailed as possible, when it happens, what are its effects on equipment performance, functionality, etc.)" : "( Especificar sintomas, cuando se presenta la falla,  desde cuándo y cuáles son las afectaciones al desempeño del producto)" ); ?></label>
                            <input required name="tipo_falla" class="span12-b" type="text">
                        </div>
                        <div class="span12-bie">
                            <label class="span12-b"><?php echo (isset($_GET['en']) ? "Comments" : "Comentarios" ); ?>:</label>
                            <textarea class="span12-bie" name="comentarios"></textarea>
                        </div>
                        <div>
                        <input class="span" required type="checkbox" id="true_terminos"><label><a href="terminos-y-condiciones<?php echo (isset($_GET['en']) ? "?en" : "" ); ?>" target="_black"><?php echo (isset($_GET['en']) ? "I have read and accept the terms and conditions" : "He leido y acepto los terminos y condiciones" ); ?></a></label>
                        <input type="submit" value=" " class="send">
                        <span class="form-true"></span>                  
                        </div>
                    </form>
                </div>
            </article>
        </section>        
        <footer>
            <div class="footer-header bgcolor-base"></div>
            <div class="footer-links">
                <nav class="nav-footer wrap">
            <ul class="span7-b">
                <li class="li-title">
                    <a href="//www.agiotech.com">CONOCE MÁS SOBRE NUESTRA EMPRESA <img alt="logo agiotech" src="img/agiotech-logo.png"></a>
                </li>
                <li class="li-title">
                    <a href="//www.agiostore.com.mx">VENTA DE PRODUCTOS Y COMPONENTES AGIOSTORE <img alt="logo agiostore" src="img/agiostore.png"></a>
                </li>
            </ul>
            <ul class="span370">
                <li><div class="siguenos-content span5">
                <ul class="ul-siguenos float-right">
                    <li class="clickable"><a class="ico-facebook" href="https://www.facebook.com/pages/Agiofix/134770403367529?fref=ts" target="_blank"></a></li>
                    <li class="clickable"><a class="ico-twitter" href="//twitter.com/Agiofix"></a></li>

                    <li class="li-title li-sig">SÍGUENOS</li>
                </ul>                
            </div></li> 
                <li class="li-title">REALIZA TU PAGO AQUÍ <img src="img/banamex-header.png"><img width="120" src="img/VisaMastercardPaypal.png"></li>                
            </ul>            
            
        </nav>
            </div>
            <div class="footer">
				<ul>
					<li class="li-footer"><a href="aviso_de_privacidad<?php echo (isset($_GET['en']) ? "?en" : "" ); ?>"><?php echo (isset($_GET['en']) ? "Notice of Privacy" : "Aviso de Privacidad" ); ?> |</a></li>
					<li class="li-footer"><a href="aviso_legal<?php echo (isset($_GET['en']) ? "?en" : "" ); ?>"><?php echo (isset($_GET['en']) ? "Legal Notice" : "Aviso Legal" ); ?> |</a></li>
					<li class="li-footer"> Copyrigth &#169; 2012 Agiotech. <?php echo (isset($_GET['en']) ? "All rights reserved" : "Todos los derechos reservados" ); ?></li>
				</ul>
			</div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>       
    </body>
</html>
