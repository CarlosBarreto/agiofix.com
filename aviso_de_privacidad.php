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
			<h1><?php echo (isset($_GET['en']) ? "NOTICE OF PRIVACY" : "AVISO DE PRIVACIDAD" ); ?></h1>			
			<div class="text">
				<p>
					<?php echo (isset($_GET['en']) ? "Agiotech de Mexico, S.A. de C.V., located in 5051 of Aviación Avenue, Col. San Juan de Ocotán, P.O. Box 45019, Zapopan, Jalisco is responsible for collecting your personal data, their use and protection. Your personal information will be used to provide you with the products and services you have requested, as well as informing you of changes to them and assess the quality of service we provide." : "Agiotech de Mexico, S.A. de C.V., con domicilio en Av. Aviación 5051, Col. San Juan de Ocotán, C.P. 45019, en Zapopan, Jalisco es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Su información personal será utilizada para proveer los servicios	y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos." ); ?>
				</p>
				<p>
					<?php echo (isset($_GET['en']) ? "For purposes mentioned above, we need to obtain the following personal information: name, address, telephone and email, not considered as sensitive by the Federal Law for Protection of Personal Data Held by Private Persons. You have the right to access, correct and cancel your personal data, as well as objecting to the processing thereof or revoking consent given to us for that purpose through the procedures that we have implemented." : "Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales:	Nombre, Domicilio, Teléfono y Correo electrónico, no considerados como sensibles según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado." ); ?>
					
				</p>
				<p>
					<?php echo (isset($_GET['en']) ? "To know more about these procedures, requirements and deadlines, you can contact us at Phone +52 (33) 3627 7575 or via email to address <b><i>contacto@agiotech.com</i></b>, or visit our website at <b><i>http://www.agiotech.com/soporte.php</i></b>" 
					:
					 "Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nosotros al Teléfono +52 (33) 3627 7575 o vía correo electrónico a la dirección
					<b><i>contacto@agiotech.com</i></b>, o visitar nuestra página de Internet <b><i>http://www.agiotech.com/soporte.php</i></b>" ); ?>
					
				</p>
				<p>
					<?php echo (isset($_GET['en']) ? "Also, please note that we do not transfer your personal data to third parties.<br><br>If you wish to stop receiving promotional messages from us, please send us your request via email: <b><i>contacto@agiotech.com</i></b>." : "Asimismo, le informamos que nosotros no realizamos transferencias de sus datos personales a	terceros.<br><br>Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través	del correo electrónico: <b><i>contacto@agiotech.com</i></b>." ); ?>
					
				</p>
				<p>
					<?php echo (isset($_GET['en']) ? "Agiotech de Mexico, S.A. de C.V. reserves the right to update this notice periodically in order to reflect changes to our information practices. It is user responsibility to review the content of the Notice of Privacy at http://www.agiotech.com site. It is understood that unless otherwise expressed, you have read, understood and agreed to the terms set out there, what constitutes your consent to the changes set out in the updates regarding the processing of your personal data for the purposes of Federal Law for Protection of Personal Data Held by Private Persons and other applicable law. Any changes to this privacy notice can be viewed online at our website " : "Agiotech de Mexico, S.A. de C.V. se reserva el derecho de actualizar periódicamente el presente
					aviso para reflejar los cambios de nuestras prácticas de información. Es responsabilidad del usuario
					revisar periódicamente el contenido del Aviso de Privacidad en el sitio www.agiotech.com. El
					usuario, entenderá que de no expresar lo contrario, significa que ha leído, entendido y acordado
					los términos ahí expuestos, lo que constituye su consentimiento a los cambios establecidos en
					dichas actualizaciones respecto al tratamiento de sus Datos Personales para efectos de la LFPDP y
					demás legislación aplicable. Cualquier modificación a este aviso de privacidad podrá consultarla en
					nuestro sitio web " ); ?>
					
					<b><i>http://www.agiotech.com/aviso_de_privacidad</i></b>
				</p>
			</div>

			<div class="text text2">
				<p>
					<?php echo (isset($_GET['en']) ? "Agiotech de Mexico, S.A. de C.V., located in 5051 of Aviación Avenue, Col. San Juan de Ocotán, P.O. Box 45019, Zapopan, Jalisco is responsible for collecting your personal data, their use and protection. Your personal information will be used to provide you with the products and services you have requested, as well as informing you of changes to them and assess the quality of service we provide." : "Agiotech de Mexico, S.A. de C.V., con domicilio en Av. Aviación 5051 Nave 8, Col. San Juan de
					Ocotán, C.P. 45019, Zapopan, Jalisco es responsable del tratamiento de sus datos personales." ); ?>
					
				</p>

				<dl>
				<dt>
					<?php echo (isset($_GET['en']) ? "For what purposes we collect and use your personal data?" : "¿Para qué fines recabamos y utilizamos sus datos personales?" ); ?>
					</dt>
				<dd style="margin-left: 0px;">
					<p>
						<?php echo (isset($_GET['en']) ? "Your personal data will be used for the following purposes:" : "Sus datos personales serán utilizados para las siguientes finalidades:" ); ?>
						</p>
					<ul style = "padding-left: 0px;">
						<li><?php echo (isset($_GET['en']) ? "-Provide you with services and products required by you" : "-Proveer los servicios y productos requeridos por usted" ); ?></li>
						<li><?php echo (isset($_GET['en']) ? "-Report changes or new products or services related to the one contracted or purchased by the customer" : "-Informar sobre cambios o nuevos productos o servicios que estén relacionados con el contratado o adquirido por el cliente" ); ?></li>
						<li><?php echo (isset($_GET['en']) ? "-To comply with our obligations to our customers" : "-Dar cumplimiento a obligaciones contraídas con nuestros clientes" ); ?></li>
						<li><?php echo (isset($_GET['en']) ? "-Evaluate the quality of service, and do internal research on consumer habits." : "-Evaluar la calidad del servicio, y Realizar estudios internos sobre hábitos de consumo." ); ?></li>
					</ul>
				</dd>
				<dt><?php echo (isset($_GET['en']) ? "What personal information we collect and from where?" : "¿Qué datos personales obtenemos y de dónde?" ); ?></dt>
				<dd style="margin-left: 0px;">
					<p>
						<?php echo (isset($_GET['en']) ? "For the purposes outlined in this privacy notice, we may collect your personal information when you provide it directly to us by filling out the feedback form. Data we collect in this way may include:" : "Para las finalidades señaladas en el presente aviso de privacidad, podemos recabar sus datos
						personales cuando usted nos los proporciona directamente llenando el formulario de comentarios.	Los datos que obtenemos por este medio pueden ser:" ); ?>
						
					</p>
					<ul style = "padding-left: 0px;">
						<li><?php echo (isset($_GET['en']) ? "- Name" : "-Nombre" ); ?></li>
						<li><?php echo (isset($_GET['en']) ? "- Address" : "-Domicilio" ); ?></li>
						<li><?php echo (isset($_GET['en']) ? "- Phone number" : "-Teléfono" ); ?></li>
						<li><?php echo (isset($_GET['en']) ? "- E-mail" : "-Correo electrónico" ); ?></li>						
					</ul>
				</dd>
				<dt><?php echo (isset($_GET['en']) ? "Sensitive personal data" : "Datos personales sensibles" ); ?></dt>
				<dd style="margin-left: 0px;"> <?php echo (isset($_GET['en']) ? "Please note that we do not collect any sensitive personal information." : "-Le informamos que no recabamos ningún dato personal sensible." ); ?></dd>

				<dt><?php echo (isset($_GET['en']) ? "How to access, correct your personal details, cancel or object to their use?" : "¿Cómo acceder o rectificar sus datos personales o cancelar u oponerse a su uso?" ); ?></dt>

				<dd style="margin-left: 0px;">
					<p>
						<?php echo (isset($_GET['en']) ? "You have the right to access your personal data under our possession as well as details of their treatment, and also to rectify in case it is inaccurate or incomplete; cancel data anytime you consider it is no longer required for any of the purposes specified in this notice privacy, when being used for any purpose without consent or when contractual relationship or service has ended, either object to the processing thereof for specific purposes.<br><br>To do this we ask you to contact us at email " : "Usted tiene derecho de acceder a sus datos personales que poseemos y a los detalles del tratamiento de los mismos, así como a rectificarlos en caso de ser inexactos o incompletos; cancelarlos cuando considere que no se requieren para alguna de las finalidades señalados en el presente aviso de privacidad, estén siendo utilizados para finalidades no consentidas o haya finalizado la relación contractual o de servicio, o bien, oponerse al tratamiento de los mismos para fines específicos.<br><br>Para ello le pedimos que se ponga en contacto con nosotros al correo electrónico " ); ?>
						
						<b><i>contacto@agiotech.com</i></b>
					</p>					
				</dd>

				<dt>
					<?php echo (isset($_GET['en']) ? "How can you revoke your consent for the processing of your data?" : "¿Cómo puede revocar su consentimiento para el tratamiento de sus datos?" ); ?></dt>

				<dd style="margin-left: 0px;">
					<?php echo (isset($_GET['en']) ? "t any time, you may revoke consent given to us for treatment of your personal data in order to stop making use of them. To do this, you need to submit your request to email " : "En todo momento, usted podrá revocar el consentimiento que nos ha otorgado para el tratamiento de sus datos personales, a fin de que dejemos de hacer uso de los mismos. Para ello, es necesario que presente su petición al correo " ); ?>
					 <b><i>contacto@agiotech.com</i></b>
				</dd>

				<dt><?php echo (isset($_GET['en']) ? "Transfer of data to third parties" : "Transferencia de datos a terceros" ); ?></dt>
				<dd style="margin-left: 0px;">
					<?php echo (isset($_GET['en']) ? "Also, please note that we do not transfer your personal data to third parties." : "Asimismo, le informamos que nosotros no realizamos transferencias de sus datos personales a terceros." ); ?>
					
				</dd>

				<dt><?php echo (isset($_GET['en']) ? "Use of cookies and web beacons" : "Uso de cookies y web beacons" ); ?></dt>
				<dd style="margin-left: 0px;">
				<p>
					<?php echo (isset($_GET['en']) ? "Cookies are text files that are automatically downloaded and stored on the hard drive of the user's computer equipment when navigating in a specific website, which allow the web server to remember some facts about this person, including their preferences for the display of pages on that server, username and password.<br><br>On the other hand, web beacons are images embedded in a website or email, which might be used to monitor behavior of a visitor, and store information about the user's IP address, as well as duration of interaction time on that page and type of browser used, among others.<br><br>Please note we use cookies and web beacons to collect personal information from you, such as:" : "Las cookies son archivos de texto que son descargados automáticamente y almacenados en el disco duro del equipo de cómputo del usuario al navegar en una página de Internet específica, que permiten recordar al servidor de Internet algunos datos sobre este usuario, entre ellos, sus preferencias para la visualización de las páginas en ese servidor, nombre y contraseña.<br><br>Por su parte, las web beacons son imágenes insertadas en una página de Internet o correo electrónico, que puede ser utilizado para monitorear el comportamiento de un visitante, como almacenar información sobre la dirección IP del usuario, duración del tiempo de interacción en dicha página y el tipo de navegador utilizado, entre otros<br><br>Le informamos que utilizamos cookies y web beacons para obtener información personal de usted,
					como la siguiente:" ); ?>
					
				</p>

				<ul style = "padding-left: 0px;">
					<li><?php echo (isset($_GET['en']) ? "- Your type of browser and operating system." : "-Su tipo de navegador y sistema operativo." ); ?></li>
					<li><?php echo (isset($_GET['en']) ? "- Visited links within the page." : "-Los vínculos que sigue dentro de la página." ); ?></li>
					<li><?php echo (isset($_GET['en']) ? "- Site from which you were directed to this page." : "-El sitio que lo direccionó a esta página." ); ?></li>
				</ul>

				<p class="top25">
					<?php echo (isset($_GET['en']) ? "These cookies and other technologies may be disabled. To learn how, please refer to following link:" : "Estas cookies y otras tecnologías pueden ser deshabilitadas. Para conocer cómo hacerlo, consulte el siguiente vínculo:" ); ?>
					
					<b><i>http://windows.microsoft.com/es-ES/windows-vista/Delete-your-Internet-cookies</i></b>
				</p>
				</dd>
				<dt><?php echo (isset($_GET['en']) ? "Changes to privacy notice" : "Modificaciones al aviso de privacidad" ); ?></dt>
				<dd style="margin-left: 0px;">
					<p>
						<?php echo (isset($_GET['en']) ? "Agiotech de Mexico, S.A. de C.V. reserves the right to update this notice periodically in order to reflect changes to our information practices. It is user responsibility to review the content of the Notice of Privacy at http://www.agiotech.com site. It is understood that unless otherwise expressed, you have read, understood and agreed to the terms set out there, what constitutes your consent to the changes set out in the updates regarding the processing of your personal data for the purposes of Federal Law for Protection of Personal Data Held by Private Persons and other applicable law. Any changes to this privacy notice can be viewed online at our website" : "Agiotech de Mexico, S.A. de C.V. se reserva el derecho de actualizar periódicamente el presente
						aviso para reflejar los cambios de nuestras prácticas de información. Es responsabilidad del usuario
						revisar periódicamente el contenido del Aviso de Privacidad en el sitio http://www.agiotech.com. El
						usuario, entenderá que de no expresar lo contrario, significa que ha leído, entendido y acordado
						los términos ahí expuestos, lo que constituye su consentimiento a los cambios establecidos en
						dichas actualizaciones respecto al tratamiento de sus Datos Personales para efectos de la LFPDP y
						demás legislación aplicable. Cualquier modificación a este aviso de privacidad podrá consultarla en
						nuestro sitio web " ); ?>
						<b><i>http://www.agiotech.com/aviso_de_privacidad</i></b>
					</p>
				</dd>
				</dl>
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
