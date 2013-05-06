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
                        <li data-click="leventar" class="span4 orden-noselect"><a href="levantar-orden">LEVANTAR ORDEN</a></li>
                        <li data-click="seguimiento" class="span3 orden-select"><a href="#">SEGUIMIENTO</a></li>
                        <li data-click="precios" class="span4-b orden-noselect"><a href="precios">PRECIOS</a></li>
                    </ul>
                </nav>
                <p>
                    Introduce tu número de rastreo y al momento conoceras el estatus de producto o tambien puedes llamarnos al <strong>+52 (33) 3627-7577</strong> donde con gusto te atenderemos.
                </p>                
                </div>
            </header>
            <article id="seguimiento">
                <header>
                    <div id="seguimiento-codigo" class="orden-content wrap">
                    <h2 class="span3">CÓDIGO DE RASTREO</h2>
                    <form>
                        <input class="span6" type="text">
                        <input class="span2" type="submit" value="Estatus">
                    </form>
                </div>                              
                </header>
                <div class="orden-point wrap">
                <div id="seguimiento-estado" class="orden-content">
                    <hgroup>
                        <h2 class="span3">ORDEN A NOMBRE DE:</h2>
                        <h3 class="span8"></h3>
                    </hgroup>
                    <div id="seguimiento-etiquetas">
                        <div class="etiqueta-diag span3-b"></div>
                        <div class="etiqueta-rep span3-b span-m45-left"></div>
                        <div class="etiqueta-res span3-b span-m45-left"></div>
                        <div class="etiqueta-tran span3-b span-m45-left"></div>

                        <p class="span3-b">DIAGNÓSTICO</p>
                        <p class="span3-b span-m45-left">REPARACIÓN</p>
                        <p class="span3-b span-m45-left">RESTAURACIÓN</p>
                        <p class="span3-b span-m45-left">TRANSPORTE</p>

                        <div class="span" id="seguimiento-bar-diagnostico"></div>
                        <div class="span" id="seguimiento-bar-reparacion"></div>
                        <div class="span" id="seguimiento-bar-restauracion"></div>
                        <div class="span" id="seguimiento-bar-transporte"></div>

                        <div id="seguimiento-colores" class="span12-b">
                            <ul>
                                <li class="seg-esra span2">EN ESPERA</li>
                                <li class="seg-proc span2">EN PROCESO</li>
                                <li class="seg-fin span2">FINALIZADO</li>
                            </ul>
                        </div>
                    </div>
                </div>
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
