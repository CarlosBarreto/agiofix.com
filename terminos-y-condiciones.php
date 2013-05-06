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
        
        <section class="terminos">
    <article id="aviso-legal" class="wrap">
        <div class="servicios-content">
            <h1><?php echo (isset($_GET['en']) ? "Terms and Conditions of Sale." : "Términos y Condiciones de Venta." ); ?> </h1>
            <div class="text">
                <p>
                    <?php echo (isset($_GET['en']) ? "That will apply to any transaction of sale of products and services that take place between AGIOTECH DE MEXICO, SA DE CV, who henceforth will be called \"Agiotech\", and any third party that acquires assets from the first, who henceforth will be called \"The Customer\", which are held they according to following:" : "Que seran aplicables a cualquier operacion de compraventa de productos y servicios que se celebre entre AGIOTECH DE MEXICO, S.A. DE C.V., a quien en lo sucesivo se le denominara “Agiotech”, y cualquier tercero que adquiera bienes del primero, a quien en lo sucesivo se le denominara “El cliente”, mismos que se sujetan al tenor de lo siguiente:" ); ?>
                </p>
                <p>
                    <?php echo (isset($_GET['en']) ? "Both Agiotech and the customer, accept giving precedence to Terms and Conditions contained herein with respect to any other agreement, term or condition contained in another document or statement is made between the parties, including verbally. Exception to this will be those agreements to be reached between the parties, provided that in the case of written agreements, which contain signatures of each party. The placing of an order or service order through written or electronic means, expresses the customer’s acceptance of these Terms and Conditions of Sale." : "Tanto Agiotech como el cliente, aceptan el otorgar prelacion a las condiciones y términos contenidos en el presente documento en relacion con cualquier otro acuerdo, condicion o termino, contenido en otro documento o comunicado que se realice entre las partes, inclusive de manera verbal. Excepcion a lo anterior seran aquellos convenios que se alcancen entre las partes, siempre y cuando se trate de acuerdos por escrito, que contengan las firmas de cada una de ellas. La realizacion de un pedido u orden de servicio por medios escritos u electronicos supone para el cliente su aceptación expresa a los presentes Términos y Condiciones Generales de Venta." ); ?>

                </p>
            </div>

            <div class="text text2">
                <dl>
                <dt>
                    1. <?php echo (isset($_GET['en']) ? "Scope of application." : "ambito de aplicación." ); ?>
                    </dt>
                <dd>
                    <p>
                        <?php echo (isset($_GET['en']) ? "These Terms and Conditions of Sale apply to any and all sales of products or services by Agiotech in Mexico, whether products advertised or included in any form, in our brochures, promotions, price lists, ads, budgets, Internet or verbally. Excludes any other terms or conditions that could replace them." : "Estos Términos y Condiciones Generales de Venta son aplicables a cualesquier y todas las ventas de productos o servicios realizadas por Agiotech dentro de la República Mexicana, ya sean productos promocionados o incluidos en cualquiera de sus formas, en nuestros folletos, promociones, listas de precios, anuncios, presupuestos, Internet o verbalmente. Se excluyen cualesquiera otros términos o condiciones que pudieran remplazar a estos. " ); ?>
                        </p>
                </dd>
                <dt>2. <?php echo (isset($_GET['en']) ? "Services" : "Servicios" ); ?></dt>
                <dd>
                    <p>
                        <?php echo (isset($_GET['en']) ? "Services, when agreed the delivery of them with the customer, shall be provided by Agiotech and courier service provider and may vary depending on the product or service requested. Response times are estimates and may vary depending on conditions of collection and/or delivery, location and accessibility to the product or the customer, as well as timely coverage of the payments from the customer. The service may be provided via telephone or Internet when appropriate." : "Los servicios, cuando se acuerde la prestacion de los mismos con el Cliente, seran prestados por Agiotech y un proveedor de servicios de mensajeria y podran variar dependiendo del producto o servicio solicitado. Los tiempos de respuesta son estimados y pueden variar según las condiciones de recolección y/o entrega, el emplazamiento/localizacion o accesibilidad al producto o al cliente, asi como del cubrimiento de los pagos correspondientes por parte del cliente. El servicio podra proporcionarse via telefonica o Internet cuando sea apropiado." ); ?>

                    </p>
                    <ul style="list-style: disc;padding-left:50px;text-align:justify">
                        <li><?php echo (isset($_GET['en']) ? "The customer agrees to testify and provide clear and accurate information regarding their contact details as well as failures and equipment conditions, in order to facilitate tasks of pickup and/or delivery of products, as well as diagnostics and repair services." : "El cliente se compromete a declarar y proporcionar informacion clara y veridica relacionada con sus datos de contacto, asi como sobre los fallos y condiciones del equipo, a efectos de facilitar las labores de recolección y/o entrega de sus productos, asi como los servicios de diagnostico y reparacion." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "The events of pickup and/or delivery of products to the customer will be made by the courier at the address given by the customer, where after two failed attempts to contact him, the customer shall personally deliver or collect his product according to the provisions of the conditions of product pickup, delivery and safeguarding." : "Los eventos de recolección y/o entrega de productos con el cliente se realizaran mediante el servicio de mensajeria en la direccion indicada por el mismo cliente, donde despues de dos intentos de contacto fallidos, el cliente debera entregar o recolectar personalmente su producto de acuerdo a lo establecido en las condiciones de recolección, entrega y resguardo." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "Agiotech is not responsible for data that may be stored on the computer at the time of repair. Therefore, customer’s responsibility to make a backup of all the information, software and programs contained in the product prior to Agiotech proceeds to provision of services or support, including via telephone support. Agiotech under no reason can copy or manage information of a private or personal nature, or material obtained illegally, prohibited by the laws currently in force or for which you do not have the proper license." : "Agiotech no se hace responsable de los datos que puedan estar almacenados en el equipo al momento de la reparacion. Por lo tanto, es responsabilidad del cliente efectuar un respaldo de la totalidad de la informacion, software y programas contenidos en el producto previo a que Agiotech proceda con la prestacion de los servicios o soporte, incluyendo soporte via telefonica. Agiotech por ningún motivo podra copiar u administrar informacion de indole particular o personal, o material obtenido en forma ilegal, prohibidos por el ordenamiento legal vigente o respecto de los cuales el cliente no cuente con la debida licencia de uso." ); ?></li>
                    </ul>
                </dd>
                <dt><?php echo (isset($_GET['en']) ? "Repair Service" : "Servicio de Reparación " ); ?></dt>
                <dd>
                    <ul style="list-style: disc;padding-left:50px;text-align:justify">
                        <li><?php echo (isset($_GET['en']) ? "The time to repair a computer is 48 hours, including the product pickup, repair and delivery. This time does not consider cases that require the exchange of a component and it is not available in our inventory, where total time will depend on the delivery of it by our component supplier." : "El tiempo para reparar un equipo es de 48 horas, incluyendo la recolección, reparacion y entrega. Este tiempo no considera los casos donde se requiere el intercambio de un componente y este no se encuentre disponible en nuestro inventario, donde el tiempo total dependera de la entrega del mismo por parte de nuestro proveedor de componentes." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "Without exception, all customer’s computers receive the basic service repair, including the diagnosis -and on those equipment whose functional conditions allows it-, hardware and software adjustments and updates. Once diagnostics performed over the equipment and/or performed the basic service repair on it, the customer will be contacted by our customer service staff for:" : "Sin excepcion, todos los equipos de los clientes reciben el servicio basico de reparacion, que incluye el diagnostico -y en aquellos equipos cuyo estado funcional lo permita-, ajustes de hardware, software y actualizaciones. Una vez diagnosticado el equipo y/o realizado el  servicio basico de reparacion sobre el mismo, el cliente sera contactado por parte de nuestro personal de atencion a clientes para:" ); ?>
                            <ol type="a">
                                <li><?php echo (isset($_GET['en']) ? "Being notified of successfully repair of his equipment, expected to cover related costs in order to Agiotech to proceed with shipping of repaired equipment;" : "Ser notificado de la reparacion del mismo, en espera de cubrir costo asociado para envio de equipo reparado;" ); ?></li>
                                <li><?php echo (isset($_GET['en']) ? "Communicate to the customer diagnostics details and request his acceptance of the additional cost of replacing defective component with a new one, and/or the additional cost of repairing defective components if applicable. In this case the customer will be able to proceed to:" : "Comunicarle los detalles del diagnostico y solicitar su autorizacion sobre el costo adicional por cambio de componente defectuoso por nuevo, y/o el costo adicional de la reparacion de componente defectuoso según aplique. En este caso el cliente podra:" ); ?>
                                    <ul style="list-style: disc;padding-left:50px;text-align:justify">
                                        <li><?php echo (isset($_GET['en']) ? "Accept quotation, for which the customer should make the corresponding payment, according to the payment terms and conditions mentioned in this document." : "Aceptar la cotizacion, para lo cual debera realizar el pago correspondiente de acuerdo a las condiciones y términos de pago mencionadas en este documento." ); ?></li>
                                        <li><?php echo (isset($_GET['en']) ? "Reject quotation, in which case the customer does not need to cover any additional costs but only those included in basic repair service, proceeding only with such payment. Agiotech then proceeds with the immediate delivery of the equipment to the customer." : "Rechazar la cotizacion, en cuyo caso el cliente no debera de cubrir ningún costo adicional al contemplado dentro del servicio de reparacion basico, procediendo solo con este último pago. Agiotech procedera entonces con la inmediata entrega del equipo al cliente." ); ?></li>
                                    </ul>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </dd>

                <dt><?php echo (isset($_GET['en']) ? "Service delivery of parts and components" : "Servicio de despacho de partes y refacciones" ); ?></dt>

                <dd>
                    <ul style="list-style: disc;padding-left:50px;text-align:justify">
                        <li><?php echo (isset($_GET['en']) ? "In parts delivery service, they will be sent to the customer from our facility within the first 24 hours after the service order is documented in Agiotech systems." : "En los servicios de entrega de refacciones, estas le seran enviadas al cliente desde nuestras instalaciones, dentro de las primeras 24 horas a partir de documentada la orden de servicio en los sistemas de Agiotech.." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "Agiotech reserves the right to supply at any time an alternative component to originally requested, but guarantees that the functions and operation of delivered components are equivalent to those requested, keeping the selling price previously quoted." : "Agiotech se reserva el derecho a suministrar componentes alternos a los solicitados en cualquier momento, pero garantiza que las funciones y el funcionamiento de los componentes entregados seran equivalentes a las de los solicitados, manteniendose en este caso el precio de venta oportunamente cotizado." ); ?></li>
                    </ul>
                </dd>

                <dt>3. <?php echo (isset($_GET['en']) ? "Warranty" : "Garantia" ); ?></dt>
                <dd>
                    <p>
                        <?php echo (isset($_GET['en']) ? "The repair service is guaranteed over labor with 90 days after delivery of repaired equipment, just presenting an invoice or receipt of service. Either new component sold or placed on your computer is guaranteed for one year, which shall be valid with the manufacturer." : "Las reparaciones tienen una garantia sobre mano de obra de 90 dias a partir de la entrega del equipo reparado, tan solo presentando factura o recibo de entregado. Tanto los componentes o refacciones nuevas vendidas como los componentes nuevos colocados en su equipo tienen una garantia de 1 año, la cual se hara valida con el fabricante." ); ?> <br><br>
                        <?php echo (isset($_GET['en']) ? "This warranty does not apply in case of any of the following situations:" : "La presente garantia no tendra validez en caso de presentarse alguna de las siguientes situaciones:" ); ?>
                        <ul style="list-style: disc;padding-left:50px;text-align:justify">
                        <li><?php echo (isset($_GET['en']) ? "Any clear manipulation of software or hardware that you've made by yourself or another service center different from Agiotech." : "Cualquier manipulacion evidente de software o hardware, que le haya realizado el usuario u otro centro servicio tecnico que no sea Agiotech." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "Any misuse of the equipment, such as falls, blows, contacts with humidity or corrosive agents any kind of liquid spill." : "Cualquier uso no debido del equipo, tales como: caidas, golpes, contacto con humedad, liquido corrosivo o manipulacion." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "Agiotech is exempt from all responsibility of any kind of problem on equipment that is not directly related to the repair performed on it." : "Agiotech queda exento de toda responsabilidad de cualquier otro tipo de fallo que no tenga relacion directa con la reparacion realizada." ); ?></li>
                    </ul>
                    </p>
                </dd>

                <dt>4. <?php echo (isset($_GET['en']) ? "Product pickup, delivery and safeguard" : "Recolección, entrega y resguardo de productos" ); ?></dt>
                <dd>
                    <ul style="list-style: disc;padding-left:50px;text-align:justify">
                        <li><?php echo (isset($_GET['en']) ? "vents of pickup and delivery of products with the customer will be made through the courier at the address given by the customer. The courier will make two attempts to contact the customer to carry out the pickup or delivery, whatever the case is. After two failed attempts at collection or delivery, the customer should personally deliver or pickup his product at Agiotech facilities, or cover the amount corresponding to an additional event for pickup or delivery at a cost of $ 150 Mexican pesos." : "Los eventos de recolección y entrega de productos con el cliente se realizaran a traves del servicio de mensajeria en la direccion indicada por el mismo cliente. El servicio de mensajeria realizara dos intentos de contacto con el cliente para llevar a cabo la recolección o entrega, cualquiera que sea el caso. Despues de 2 intentos fallidos en la recolección o la entrega, el cliente debera entregar o recolectar personalmente su producto en las instalaciones de Agiotech, o bien cubrir el monto correspondiente a un evento adicional de recolección o entrega con un costo de $150 pesos mexicanos." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "For those events where the customer has not been successfully contacted after two contact attempts by the courier when delivering the customer’s product, the product will return to Agiotech facilities, considered from this point \"under guard\" of Agiotech. The customer can collect his product personally at Agiotech facilities or cover the amount corresponding to an additional delivery event at a cost of $ 150 Mexican pesos." : "Para los eventos donde no se haya tenido exito en la entrega del producto al cliente en los dos intentos de contacto por parte de la mensajeria, el producto retornara a las instalaciones de Agiotech, considerandose a partir de ese momento “bajo resguardo” de Agiotech. El cliente podra recolectar su equipo personalmente en las instalaciones de Agiotech o bien cubrir el monto correspondiente a un evento adicional de entrega con un costo de $150 pesos mexicanos." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "For those events where the customer personally delivers his product at Agiotech installations, customer product is considered \"under guard\" of Agiotech from the moment in which the customer is notified of product repair, or the customer has rejected the repair quotation. From this point, the client shall pick up his equipment in the same Agiotech facilities." : "Para los eventos donde el cliente entregue personalmente su equipo en las instalaciones de Agiotech, el equipo del cliente se considerara “bajo resguardo” de Agiotech a partir del momento en que le sea notificado al cliente la reparacion del mismo o que el cliente haya rechazado la cotizacion de reparacion. A partir de este momento, el cliente podra recoger su equipo en las mismas instalaciones de Agiotech." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "In either case where an \"under guard\" period has begun over customer product at Agiotech facilities, the customer has a period of 15 days to pick up his equipment or authorize an additional event of delivery. After this period, it will generate a charge for storage concept of $ 40 pesos for each additional calendar day that the product remains \"under guard\" in Agiotech facilities." : "En cualquiera de los casos en que haya dado inicio el periodo “bajo resguardo” del equipo o producto del cliente en las instalaciones de Agiotech, el cliente dispone de un plazo de 15 dias para recoger su equipo o bien autorice un evento adicional de entrega. Despues de este plazo, se generara un cobro por concepto de almacenaje de $40 pesos mexicanos por cada dia natural adicional que el equipo permanezca “bajo resguardo” en las instalaciones de Agiotech." ); ?></li>
                    </ul>
                </dd>

                <dt>5. <?php echo (isset($_GET['en']) ? "Prices and terms of payment" : "Precios y términos de pago" ); ?></dt>
                <dd>
                    <p><?php echo (isset($_GET['en']) ? "The parties agree that the price determined by Agiotech, for the purchase of services, equipment or spare parts, is based on the Terms and Conditions herein. Quotations or bids will be valid only in writing and during the period indicated therein. Unless indicated any period shall be 30 calendar days. Prices quoted or shown in the catalog of products and services do not include Value Added Tax." : "Las partes acuerdan que el precio determinado por Agiotech, para la compraventa de servicios, equipo o piezas de refaccion, se basa en los presentes Términos y Condiciones en este documento. Los presupuestos u ofertas economicas, solo seran validas por escrito y durante el plazo que en ellos se indique. De no indicarse ningún plazo, este sera de 30 dias naturales. Los precios cotizados o mostrados en el catalogo de productos y servicios no incluyen Impuesto al Valor Agregado." ); ?>
                    </p>
                    <ul style="list-style: disc;padding-left:50px;text-align:justify">
                        <li><?php echo (isset($_GET['en']) ? "Applicable payments should be made Mexican pesos, either through credit card or bank transfer to the account specified when making monetary operation with Agiotech." : "Los pagos aplicables deberan realizarse en Pesos Mexicanos, ya sea a traves de tarjeta de credito o transferencia bancaria a la cuenta indicada al momento de realizar la operacion monetaria con Agiotech." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "In no event the customer will be charged for the realization of a budget, whether it is accepted or rejected the concept of it." : "En ningún caso se cobrara al cliente la realizacion de un presupuesto, sin importar si se acepta o se rechaza el concepto del mismo." ); ?></li>
                        <li><?php echo (isset($_GET['en']) ? "In case of repair services:" : "En el caso de servicios de reparacion:" ); ?>
                            <ul style="list-style: disc;padding-left:50px;text-align:justify">
                                <li><?php echo (isset($_GET['en']) ? "The cost of the basic repair service which includes the diagnostics -and in those equipment whose functional condition allows it-, hardware and software adjustments and updates, will be covered by the customer at the time that our customer service staff confirm to the customer successful repair." : "El costo del servicio basico de reparacion que incluye el diagnostico, - y en aquellos equipos cuyo estado lo permita - ajustes de hardware, software y actualizaciones, habra de cubrirse por parte del cliente en el momento en que nuestro personal de servicio a clientes le confirme la reparacion del mismo." ); ?></li>
                                <li><?php echo (isset($_GET['en']) ? "In the case of requiring a major repair involving the placement of new components or repair of defective, the payment will be made after having communicated to the customer the amount applicable and accepted the quotation. To proceed with these repairs, the client should make the payment within the first 24 hours after being notified and accepted the quotation. Otherwise, the client computer will be considered \"under guard\", according to the terms set out in section of product pickup, delivery and safeguard." : "En el caso de requerirse una reparacion mayor que implique la colocacion de componentes nuevos o reparacion de defectuosos, el pago habra de efectuarse posterior a haber comunicado al cliente los montos aplicables y aceptado este el presupuesto de cotizacion. Para proceder con estas reparaciones, el cliente debera realizar dicho pago dentro de las primeras 24 horas posteriores a ser notificado y aceptada la cotizacion. En caso contrario, el equipo del cliente se considerara “bajo resguardo”, de acuerdo a los términos establecidos en la seccion de recolección, entrega y resguardo de productos." ); ?></li>
                            </ul>
                        </li>
                        <li><?php echo (isset($_GET['en']) ? "In case of spare parts and components dispatch services:" : "En el caso de servicios de despacho de componentes o refacciones:" ); ?>
                            <ul style="list-style: disc;padding-left:50px;text-align:justify">
                                <li><?php echo (isset($_GET['en']) ? "For cases in which the component or spare inventory is available in our store, the payment for the shipment of components will take place when the customer places his service order, either through credit card in Agiotech online portal or, via deposit in specified  bank account." : "Para los casos en que el inventario del componente o refaccion se encuentre disponible en nuestro almacen, el pago por el envio de componentes habra de realizarse en el momento en que el cliente levante su orden de servicio, ya sea a traves de tarjeta de credito a traves del portal en linea o bien, deposito en la cuenta bancaria indicada." ); ?></li>
                                <li><?php echo (isset($_GET['en']) ? "In case of components or parts for which system does not display available inventory, and the customer requests the sale through our customer service staff, the customer will be asked to deposit in advance a part of the total cost of the component, so that later, once it arrives at Agiotech installations, the total cost is covered so that the component will be shipped to the customer." : "Para los componentes o refacciones sobre los que el sistema no muestre y el cliente solicite la venta a traves de nuestro personal atencion a clientes, a manera de anticipo se le solicitara al cliente un deposito parcial del costo total del componente, para que posteriormente, una vez que el mismo arribe a las instalaciones de Agiotech, se cubra el costo total a fin de que el componente le sea embarcado al cliente." ); ?></li>
                            </ul>
                        </li>


                    </ul>
                </dd>

                <dt>6. <?php echo (isset($_GET['en']) ? "Customer rights and obligations" : "Derechos y obligaciones del cliente" ); ?></dt>
                <dd>
                    <p>
                        <?php echo (isset($_GET['en']) ? "The customer is responsible for making payments to cover delivery of products or services under the terms specified in this document. In turn, the customer is responsible for providing enough information, cooperation and collaboration to enable Agiotech to fulfill their commitments, otherwise Agiotech will be exempt from his obligations." : "El cliente es responsable de realizar los pagos correspondientes al cubrimiento de entrega de productos o servicios bajo los términos especificados en este documento. A su vez, el cliente es responsable de facilitar informacion, cooperacion y colaboracion suficientes para permitir a Agiotech cumplir con sus compromisos, de lo contrario quedaremos exentos de nuestras obligaciones." ); ?>
                        <br><br>
                        <?php echo (isset($_GET['en']) ? "The customer is responsible for creating of data backups, as well as confidentiality of the data contained in the product and compliance with any other legal requirement." : "El cliente es responsable de la creacion de copias de seguridad y de la confidencialidad de los datos contenidos en el producto y del cumplimiento de cualquier otro requisito legal." ); ?>
                        <br><br>
                        <?php echo (isset($_GET['en']) ? "As the customer a Consumer, nothing in this document in any way affects the public policy provisions on consumer rights." : "Al ser el cliente un Consumidor, ninguna disposicion en este documento afectara en modo alguno las disposiciones de orden público en materia de derechos de los consumidores." ); ?>
                    </p>

                </dd>

                <dt>7. <?php echo (isset($_GET['en']) ? "Acceptance and returns" : "Aceptación y devolución" ); ?></dt>
                <dd>
                    <p>
                    <?php echo (isset($_GET['en']) ? "The customer must immediately validate the service or product received upon delivery or within the first 72 hours. After such time, the customer is deemed to have accepted the product or service. For cases of dissatisfaction with the product or service, the customer is entitled to:" : "El cliente debera validar inmediatamente el servicio o producto recibido tras la entrega o dentro las primeras 72 horas. Una vez transcurrido dicho plazo, se considerara que el cliente ha aceptado el producto o servicio. Para los casos de inconformidad con el producto o servicio, el cliente tiene derecho a:" ); ?>
                    <br><br>
                    <?php echo (isset($_GET['en']) ? "In case of dissatisfaction with the component or spare part received." : "En caso de inconformidad con el componente o refaccion." ); ?>
                    <br><br>
                    <?php echo (isset($_GET['en']) ? "Request the return of the component or spare part after evaluation and approval by Agiotech, who will provide the customer with a return number for this purpose. The customer must return the spare part or in its original condition with its packaging, return note and invoice." : "Solicitar la devolución del componente o refaccion previa valoracion y autorizacion por parte de Agiotech, quien le proporcionara al cliente un número retorno para tales efectos. El cliente debera devolver el componente o refaccion en sus condiciones originales, con su empaquetado, nota de devolución y factura." ); ?>
                    <br><br>
                    <?php echo (isset($_GET['en']) ? "In case of dissatisfaction with repair service." : "En caso de inconformidad con el servicio de reparacion." ); ?>
                    <br><br>
                    <?php echo (isset($_GET['en']) ? "Request the return of the equipment and the solution of dissatisfaction causes. Agiotech will attend such nonconformity, validating each case individually and opening a new customer service order.<br><br>For those cases where Agiotech is responsible of discontent with the product or service from the customer, return or service order reopening costs shall be borne by Agiotech." : "Solicitar la devolución del equipo y solucion de la inconformidad presentada. Agiotech atendera dicha inconformidad, validando individualmente cada caso y abriendo una nueva orden de servicio al cliente.<br><br>
                    Para aquellos casos en que se confirme la responsabilidad de Agiotech en la inconformidad hacia el producto o servicio, los costos de devolución o reapertura de orden de servicio correran por cuenta de Agiotech." ); ?>
                    </p>
                </dd>
                <dt>8. <?php echo (isset($_GET['en']) ? "Limitation of liability" : "Límite de responsabilidad" ); ?></dt>
                <dd>
                    <p>
                        <?php echo (isset($_GET['en']) ? "THE PARTIES AGREE THAT AGIOTECH TOTAL AGGREGATED CIVIL RESPONSIBILITY (ARISING FROM OR IN CONNECTION WITH BUT NOT LIMITED TO BREACH OF CONTRACT, NEGLIGENCE, TORT, LIQUIDATION OF DAMAGES, SPECIFIC COMPLIANCE, TERMINATION, CANCELLATION, INCLUDING THE REPAYMENT BY THE CONTRACT PRICE, EQUIPMENT OR PARTS, FUNDAMENTAL BREACH, BREACH OF WARRANTY, LACK OF REPRESENTATION, DEFAULT, FAILURE TO PAY OR ANY OTHER) WHETHER BASED ON CONTRACT COMPLIANCE IN CLAIM FOR DAMAGES, CIVIL RESPONSIBILITY SHALL NOT EXCEED THE PRICE AMOUNT PAID TO AGIOTECH." : "LAS PARTES ACUERDAN QUE LA RESPONSABILIDAD CIVIL TOTAL AGREGADA DE AGIOTECH (DERIVADA DE O EN CONEXIoN CON PERO NO LIMITADA A CUALQUIER INCUMPLIMIENTO DE CONTRATO, NEGLIGENCIA, RESPONSABILIDAD CIVIL, LIQUIDACIoN DE DAÑOS, PERJUICIOS, CUMPLIMIENTO ESPECIFICO, TERMINACIoN, CANCELACIoN, INCLUYENDO EL REPAGO POR DEL PRECIO DEL CONTRATO, EQUIPO O PARTES DEL MISMO, INCUMPLIMIENTO FUNDAMENTAL, INCUMPLIMIENTO DE GARANTiAS, FALTA DE REPRESENTACIoN, OMISIoN, FALTA DE PAGO, O CUALQUIER OTRA) SEAN BASADOS EN CUMPLIMIENTO DE CONTRATO, EN RECLAMACIoN DE DAÑOS o PERJUICIOS POR RESPONSABILIDAD CIVIL, NO EXCEDERa EL PRECIO PAGADO A AGIOTECH." ); ?>
                    </p>
                    <p><?php echo (isset($_GET['en']) ? "Agiotech accepts no responsibility for delays (including delivery or service) caused by circumstances beyond our reasonable control and will then be entitled to an extension of time for execution, including, without limitation, the following: strikes, transportation problems, supply or production, exchange rate fluctuations, government action and natural disasters. If the cause lasted more than two months, the transaction could be completed or resolved by any party, without compensation." : "No aceptamos responsabilidad por demoras (incluyendo entregas o servicios) causadas por circunstancias que escapen a nuestro control razonable y tendremos en tal caso derecho a una prorroga para su ejecucion; incluyendo, sin limitacion a las siguientes huelgas, problemas de transporte, suministro o produccion, fluctuaciones de tipos de cambio, accion gubernamental y desastres naturales. Si la causa durase mas de 2 meses, la transaccion podria ser terminada o resuelta por cualquier parte, sin derecho a compensacion " ); ?></p>
                </dd>

                <dt>9. <?php echo (isset($_GET['en']) ? "Jurisdiction" : "Jurisdicción" ); ?></dt>
                <dd>
                    <p><?php echo (isset($_GET['en']) ? "This document is subject to the laws of the United States of Mexico. Any dispute shall be submitted to the courts of the state of Jalisco and both the client and Agiotech expressly waive any other jurisdiction that may be applicable due to their present or future." : "Este documento queda sometido a las leyes de los Estados Unidos Mexicanos. Cualquier controversia se sometera a los tribunales del estado de Jalisco y tanto Agiotech como el cliente renuncian expresamente a cualquier otro fuero que pudiera corresponderles en razon de su domicilio presente o futuro." ); ?></p>
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
