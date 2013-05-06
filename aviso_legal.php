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
<section class="principal">
	<article id="aviso-legal">
		<div class="servicios-content">			
			<h1><?php echo (isset($_GET['en']) ? "LEGAL NOTICE" : "AVISO LEGAL" ); ?></h1>
			<h4><?php echo (isset($_GET['en']) ? "Legal provisions" : "Disposiciones legales" ); ?></h4>
			<div class="text">
				<p>
					<?php echo (isset($_GET['en']) ? "Agiotech is not responsible for other web sites that may be accessed through this website. If you access
to an external website through Agiotech, please understand that it is independent, so the company has
no control over its content. Existence of a link to an external site does not mean that Agiotech accepts
any responsibility for the content or use of that site. Whether external content is free of viruses and
other destructive agents or not, will be under your responsibility." : "Agiotech no se responsabiliza de otros sitios web a los que se pueda acceder a través de este web. Si
					accede a un sitio web externo a Agiotech, deberá entender que es independiente de éste, por lo que la
					empresa no ejerce ningún control sobre sus contenidos. La existencia de un link a un web externo no
					significa que Agiotech acepte ningún tipo de responsabilidad sobre el contenido o el uso de dicho web.
					Usted será responsable de que lo que decida utilizar esté libre de virus u otros agentes destructivos." ); ?>
					
				</p>
				<p>
					<?php echo (isset($_GET['en']) ? "AGIOTECH WILL BE LIABLE UNDER NO CIRCUNSTANCES FOR ANY CONSEQUIENTIAL DAMAGES CAUSED
IN ANY WAY BY THE USE OF THIS WEB SITE OR ANY OTHER WEB SITE ACCESSED THROUGH THIS ONE,
INCLUDING, WITHOUT LIMITATION, ANY LOST PROFITS, BUSINESS INTERRUPTION, LOSS OF SOFTWARE,
OR OTHER DATA ON YOUR INFORMATION SYSTEMS, REGARDLESS AGIOTECH HAS BEEN ADVISED OF
THE POSSIBILITY OF SUCH CONSEQUIENTIAL DAMAGES." : "BAJO NINGÚN CONCEPTO AGIOTECH SE HARÁ RESPONSABLE DE DAÑOS Y PERJUICIOS, DIRECTOS,
					INDIRECTOS, ESPECIALES O DE CUALQUIER OTRA NATURALEZA, DERIVADOS DEL USO DE ESTE WEB
					O DE CUALQUIER OTRO WEB AL QUE SE HAYA ACCEDIDO A TRAVÉS DE ÉSTE, INCLUYENDO, SIN
					NINGUNA LIMITACIÓN, CUALQUIER PÉRDIDA DE BENEFICIOS, INTERRUPCIÓN DEL NEGOCIO, PÉRDIDA
					DE PROGRAMAS U OTROS DATOS DE SUS SISTEMAS DE INFORMACIÓN, AUNQUE AGIOTECH HAYA SIDO
					AVISADA DE LA POSIBLE EXISTENCIA DE ESTOS DAÑOS Y PERJUICIOS." ); ?>
					
				</p>
				<p>
					<?php echo (isset($_GET['en']) ? "The contents of this site are only general information topics. The application and impact of laws can
vary substantially depending on the facts referred to therein. Given the changing nature of laws,
regulations and the risks inherent in electronic communication, there may be delays, omissions or
inaccuracies in the information on this site." : "Los contenidos de este web son únicamente para información general de temas de interés. La
					aplicación e impacto de las leyes puede variar de manera sustancial dependiendo de los hechos que
					en ellas se contemplan. Dada la naturaleza cambiante de las leyes, las regulaciones y los riesgos
					inherentes a las comunicaciones electrónicas, pueden producirse retrasos, omisiones o imprecisiones
					en la información de este web." ); ?>					
				</p>
				<p>
					<?php echo (isset($_GET['en']) ? "Although we have made ​ ​ every effort to ensure that the contents of this site come from reliable
sources, Agiotech is not responsible for any errors, omissions or outcomes derived from use of this
information. Information in this site is presented as is, with no guarantee that it is complete, accurate,
appropriate, nor of the results obtained from the use of this information, without warranty of any kind,
explicit or implied, including, among others, warranties of accomplishment, merchantability and fitness
for a particular intention. Agiotech, partners, companies, agents or employees, under no circumstances
will acquire any responsibility for any decision made ​ or action taken with reference to the information
on this site, nor shall be liable for damages, even though they have been informed of the possible
damage." : "Aunque hemos realizado todos los esfuerzos para asegurarnos de que los contenidos de este web
					procedan de fuentes fiables, Agiotech no se hace responsable de los errores, omisiones o resultados
					derivados del uso de esta información. La información de este web se presenta tal y como es, sin
					ninguna garantía de que sea completa, precisa, apropiada, ni tampoco de los resultados obtenidos del
					uso de esta información, sin garantía de ningún tipo, explícita o implícita, incluyendo, entre otras, las
					garantías de cumplimiento, comerciabilidad y aptitud para una intención determinada. Bajo ningún
					concepto adquirirán Agiotech, sus socios, empresas, agentes o empleados, ninguna responsabilidad
					por cualquier decisión tomada o acción realizada con referencia a la información de este web, así como
					tampoco serán responsables por daños y perjuicios, aunque hayan sido informados de los posibles
					daños." ); ?>
					
				</p>
				<p>
					<?php echo (isset($_GET['en']) ? "Agiotech reserves the right to modify or amend this document at any time and under any
circumstances. None of the content involves establishing a contract between Agiotech and visitors of
this site, regardless they have provided their identity or not." : "Agiotech se reserva el derecho a modificar o corregir este documento en cualquier momento y bajo
					cualquier concepto. Ninguno de sus contenidos implica el establecimiento de un contrato entre
					Agiotech y el visitante de este web, haya proporcionado o no sus datos de identidad." ); ?>
					
				</p>
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
