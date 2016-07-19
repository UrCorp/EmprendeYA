@extends('site.layouts.main')
@section('content')
<section>
  <div class="app-faq-1 col-md-12">
    <div class="col-md-10 col-md-offset-1">
      <header>
        <div class="header">
          <h1 class="title">FAQ</h1>
          <p class="explanation">Estas son lagunas de las dudas más frecuentes entre nuestros clientes. Si necesitas más información contáctanos a nuestro correo electrónico: <a href="mailto:comienzaya@emprendeya.org">comienzaya@emprendeya.org</a></p>
        </div>
      </header>
      <div class="col-md-12 no-side-padding">
        <div class="col-md-3 no-side-padding">
          <nav>
            <ul class="nav nav-pills nav-stacked faq-nav">
              <li role="presentation" class="active"><a href="#phone" aria-controls="phone" role="tab" data-toggle="tab">TELÉFONO</a></li>
              <li role="presentation"><a href="#financing" aria-controls="financing" role="tab" data-toggle="tab">FINANCIAMIENTO</a></li>
              <li role="presentation"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">DISEÑO</a></li>
              <li role="presentation"><a href="#legal" aria-controls="legal" role="tab" data-toggle="tab">CONTRATOS Y ASESORÍA LEGAL</a></li>
              <!--[Tags: Accounting, Contax, Contabilidad]
              <li role="presentation"><a href="#accounting" aria-controls="accounting" role="tab" data-toggle="tab">CONTABILIDAD</a></li>
              -->
              <li role="presentation"><a href="#business-platform" aria-controls="business-platform" role="tab" data-toggle="tab">PLATAFORMA DE NEGOCIOS</a></li>
              <li role="presentation"><a href="#card-terminal" aria-controls="card-terminal" role="tab" data-toggle="tab">TERMINAL MÓVIL</a></li>
              <li role="presentation"><a href="#management" aria-controls="management" role="tab" data-toggle="tab">ADMINISTRACIÓN</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="phone">
              <article>
                <h2 class="title">TELCEL</h2>
                <h3>¿Qué hago si no tengo servicio de Internet (datos)?</h3>
                <ul>
                  <li>Verifica que la itinerancia de datos de tu teléfono (Roaming de datos) esté activada.</li>
                  <li>Resetea el equipo.</li>
                  <li>En caso de ser necesario, cambia la opción de 4G a 3G o 2G.</li>
                </ul>
                <p>La configuración de estas funciones puede variar dependiendo del Sistema Operativo, la marca y modelo del teléfono.</p>
                <h3>¿Cómo consulto el Buzón de voz?</h3>
                <p>Si eres usuario de Plan de Renta, para tener acceso al servicio de Buzón de voz desde el extranjero, es necesario que configures tu NIP antes de salir de México, a la marcación *86.</p>
                <p>Sigue estos sencillos pasos:</p>
                <ul>
                  <li>Marca signo (+) 521, los 10 dígitos de tu número celular y oprime "send"</li>
                  <li>Al escuchar la grabación, interrumpe con el signo #</li>
                  <li>Ingresa nuevamente número celular a 10 dígitos y presiona la tecla #</li>
                  <li>Ingresa tu NIP de 4 dígitos (previamente configurado en México, el mismo NIP con el que recuperas tus mensajes de voz en tu ciudad de origen)</li>
                  <li>Escucha los mensajes de tu buzón.</li>
                </ul>
                <h3>¿Cuáles son las características y alcances de los principales servicios que presta Telcel? </h3>
                <ul>
                  <li>Servicios Complementarios: Son cada uno de los servicios de telecomunicaciones o de cualquier otra índole que requieren, (i) para su contratación: una solicitud expresa del Cliente en cualquier momento y (ii) para su provisión: que el equipo de telecomunicaciones cuente con las funcionalidades técnicas necesarias. Los Servicios Complementarios pueden ser prestados directamente por Telcel o por terceros a través de éste. De manera enunciativa, más no limitativa, se mencionan los siguientes Servicios Complementarios: acceso a correo electrónico, video streaming, atención en emergencias, seguro contra robo de equipos, entre otros.</li>
                  <li>Servicios Disponibles: Son cada uno de los servicios de telecomunicaciones y de cualquier otra índole que el Cliente puede utilizar de manera eventual mediante solicitud expresa, empleando funcionalidades y marcaciones específicas desde su equipo y que requieren para su aprovechamiento, que las funcionalidades técnicas del mismo así lo permitan; los Servicios Disponibles son prestados directamente por Telcel o por terceros a través éste.  La información correspondiente a los Servicios Disponibles y las tarifas aplicables a los mismos, estarán disponibles en los medios donde se publiciten u oferten. De manera enunciativa, más no limitativa, se mencionan los siguientes Servicios Disponibles: consulta de buzón de voz, envío y recepción de mensajes cortos (SMS), envío y recepción de mensajes multimedia (MMS), Roaming Internacional, servicios de transmisión de datos para navegación en Internet, acceso y descarga de contenidos y acceso a marcaciones especiales y números 01 800, entre otros.</li>
                  <li>Servicio Local Móvil: Servicio proporcionado conforme a lo establecido en nuestros títulos de concesión, mediante dispositivos móviles que no tienen una ubicación geográfica determinada, es decir, los equipos vendidos por Telcel.</li>
                  <li>Servicios de Larga Distancia: Son los servicios que Telcel presta y que permiten a sus Clientes generar llamadas telefónicas hacia números de una ASL distinta a la que pertenezca esa línea (larga distancia nacional) y hacia números de otros países (larga distancia internacional). Dependiendo del caso, los Servicios de Larga Distancia serán, parte del Plan Tarifario o bien, parte de los Servicios Disponibles, en cuyo caso el Cliente deberá asumir los Cargos Adicionales al tiempo aire local que se origine por el uso de dichos servicios.</li>
                  <li>Servicios de Usuario Visitante (Roaming): Telcel no cobra el concepto de Roaming, independientemente que sus Usuarios se ubiquen fuera del área de servicio local o región en la que contrataron el servicio.
                  <br/>
                  Ejemplo: Un Cliente que contrató el servicio en la Ciudad de México viaja a Monterrey y éste hace una llamada a otro Usuario que se ubica en cualquier otra ciudad del país, solo pagará la tarifa de larga distancia aplicable en su caso, pero ya no el servicio de Roaming.</li>
                  <li>Servicios de Valor Agregado (diferentes al acceso a Internet): Son aquéllos que emplean una red pública de telecomunicaciones y que tienen efecto en el formato, contenido, código, protocolo, almacenaje o aspectos similares de la información transmitida por algún Usuario y que comercializan a éstos información adicional, diferente o reestructurada, o que implican interacción del Usuario con información almacenada. Consulta la gama de Servicios de Valor Agregado disponibles.</li>
                  <li>Servicio de Mensajes Cortos (SMS): Es una funcionalidad de la Red de Telcel que permite a sus Usuarios el envío y recepción de mensajes de texto alfanuméricos de hasta 160 caracteres entre equipos móviles que tengan esta funcionalidad habilitada. Conoce los Paquetes disponibles.</li>
                  <li>Servicio de Mensajes Multimedia (MMS): Permite el envío y recepción de imágenes, gráficos, texto, audio y/o video susceptibles mediante el equipo terminal móvil, siempre y cuando permitan esta función. Consulta más detalles aquí. </li>
                  <li>Servicio de acceso a Internet: Es la posibilidad que tiene un Usuario de Telcel para conectarse a Internet a través de nuestra red móvil, utilizando un equipo celular, módem o router que gestione dichas conexiones. Consulta Paquetes y Equipos disponibles.</li>
                </ul>
              </article>
            </div>
            <div role="tabpanel" class="tab-pane" id="financing">
              <article>
                <h2 class="title">PROYECTO PYME</h2>
                <h3>¿Por qué Proyecto PyME?</h3>
                <p>8 de cada 10 empleos en México son generados por PyMES. El 25% del PIB del país es generado por las PYMES Y sin embargo solo el 13% de estas son atendidas por las instituciones bancarias.</p>
                <p>Proyecto PYME, conociendo que la pobreza en México no se puede combatir limitando los recursos a quienes los necesitan para trabajar, nace en Querétaro desde 2010 para dar servicio a estas personas y empresas que necesitan de un apoyo para lograr hacer cada vez mas negocio y así romper el círculo vicioso que les limita.</p>
                <p>Historias de éxito de nuestros clientes son nuestro mayor orgullo, aquellas empresas o personas que han logrado vender más de diez veces lo que vendían, gracias a la confianza que les hemos dado, y a su honestidad y compromiso en regresar esta misma confianza. Ya no tienen clientes inalcanzables ni pedidos muy grandes para ellos, ahora con su trabajo, todo es posible.</p>
                <p>Proyecto PYME esta legalmente constituida, opera bajo las regulaciones de las leyes mexicanas y factura todos los servicios otorgados.</p>
              </article>
            </div>
            <div role="tabpanel" class="tab-pane" id="design">
              <article>
                <h2 class="title">URCORP</h2>
                <h3>¿Cuántos cambios puedo solicitar para mi página web?</h3>
                <p>Dos cambios por mes, los cuales podrán solicitarse entre los días 5 y 15 de cada mes, posterior a esa fecha cualquier cambio solicitado no será realizado y no podrá acumularse para el mes siguiente.</p>
                <h3>¿Qué hacer si requiero un cambio en mi página web?</h3>
                <p>Por favor, envíanos un mensaje a web@urcorp.mx con el asunto:</p>
                <ul>
                  <li>Solicito cambio para mi página web | “Nombre de su empresa”</li>
                </ul>
                <p>Favor de redactar en el mensaje el cambio específico que se requiere detallando bien las características, de ser posible enviar una captura de pantalla con la sección a modificar en la página web.</p>
                <h3>¿Qué hacer si requiero un cambio en mi página web?</h3>
                <p>Por favor, envíanos un mensaje a web@urcorp.mx con el asunto:</p>
                <ul>
                  <li>Solicito cambio para mi página web | “Nombre de su empresa”</li>
                </ul>
                <p>Favor de redactar en el mensaje el cambio específico que se requiere detallando bien las características, de ser posible enviar una captura de pantalla con la sección a modificar en la página web.</p>
                <h3>¿Problemas con el servidor? ¿Tu página web no está funcionando correctamente?</h3>
                <p>Por favor, envíanos un mensaje a web@urcorp.mx con el asunto:</p>
                <p>Soporte y mantenimiento web | “Nombre de su empresa”</p>
                <p>En el mensaje redacta el problema que has tenido con tu página web, por ejemplo:</p>
                <ul>
                  <li>Mi página web no carga</li>
                  <li>Está muy lenta</li>
                  <li>Me muestra mensajes de error inesperados</li>
                </ul>
              </article>
            </div>
            <div role="tabpanel" class="tab-pane" id="legal">
              <article>
                <h2 class="title">LEGALARIO</h2>
                <h3>¿Cómo se qué documento o contrato es el que necesito?</h3>
                <p>Cada documento tiene un resumen que explica al usuario para lo que se debe utilizar.</p>
                <h3>¿Los contratos y documentos que elabore en la plataforma, puedo almacenarlos?</h3>
                <p>Sí, además de que podrás descargar tus documentos completados, éstos se guardarán en tu perfil de usuario para que tengas acceso a ellos en cualquier momento y lleves un control.</p>
                <h3>¿Las descargas de los documentos y contratos son únicas?</h3>
                <p>No, al ser usuario del programa EmprendeYA, tendrás acceso ilimitado a los documentos. Esto significa que un mismo documento puedes hacerlo las veces que sea necesario para tus necesidades. Por ejemplo, una orden de compra, puedes hacerla las veces que quieras para que todas tus ordenes de compra se te almacenen y lleves un control.</p>
                <h3>¿Cómo tengo acceso a consulta con abogados?</h3>
                <p>El sitio tiene la función de “consulta un abogado” en la que en un espacio de 450 caracteres, podrás enviar tus dudas, que serán contestadas en menos de 48 horas por nuestros abogados certificados.</p>
                <h3>¿Cuánto tiempo dura mi suscripción?</h3>
                <p>El mismo tiempo que tu permanencia en el programa de <b>EmprendeYA</b>.</p>
                <h3>¿Qué es un Aviso de Privacidad y quiénes están obligados a tenerlo?</h3>
                <p>El Aviso de Privacidad es un documento que por Ley deben tener todas las empresas o personas físicas que, sin importar el giro sector de actividad, recaban, usan y almacenan datos personales. Cualquier persona física o moral que recabe datos personales (Ej: nombre, email, teléfono, RFC, dirección, celular, etc.) de sus clientes está obligada a generar su Aviso de Privacidad.</p>
                <h3>¿Qué vigencia tiene el Aviso de Privacidad?</h3>
                <p>Es indefinida, mientras no cambies tu razón social, los datos que recabas de tus clientes y el trato que les das o las acciones que ellos pueden tomar para ejercer su derecho a la privacidad.</p>
              </article>
            </div>
            <!--[Tags: Accounting, Contax, Contabilidad]
            <div role="tabpanel" class="tab-pane" id="accounting">.5.</div>-->
            <div role="tabpanel" class="tab-pane" id="business-platform">
              <embed src="{!! URL::to('public/files/app/faqs/aem.pdf') !!}" width="100%" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
            </div>
            <div role="tabpanel" class="tab-pane" id="card-terminal">
              <article>
                <h2 class="title">Señor Pago</h2>
                <h3>¿Qué es Sr.Pago?</h3>
                <p>Sr. Pago es el dispositivo que te permite recibir pagos con tarjetas desde smartphones o tablets de las plataformas iOS* (iPod, iPad, iPhone) o Android* Podrás disponer de tu dinero con tu tarjeta Sr. Pago MasterCard cajeros automáticos ó comprando en cualquiera de los miles de comercios afiliados a MasterCard.</p>
                <h3>¿Como me registro?</h3>
                <ul>
                  <li>Ingresa a www.srpago.com y da clic en "Regístrate ya"</li>
                  <li>Ingresa tu correo (ese será tu usuario), enseguida tu passwords y la confirmación</li>
                  <li>Completas el registro con tus datos:</li>
                  <li>Te llegara un correo en el cual deberas dar clic en el link para confirmar la dirección de correo.</li>
                </ul>
                <h3>¿Cuál es la comisión que cobra SrPago?</h3>
                <p>3.6% + $0 pesos por transacción a tarjetas con o sin chip.</p>
                <p>Comisión no incluye IVA</p>
                <h3>¿Cómo descargar la APP?</h3>
                <p>Descarga la App</p>
                <p>Ahora que ya sabes lo que Sr.Pago puede hacer por ti y tu negocio, descarga nuestra App en tus dispositivos iOS* o Android* y empieza a usar nuestra plataforma para recibir pagos donde quiera que te encuentres. Para poder usar la App debes contar con tu lector de Sr.Pago y registrarte para obtener una cuenta.</p>
                <h3>¿Cómo hago mi primer cobro?</h3>
                <p>Usar Sr.Pago es muy sencillo, una vez que activaste tu cuenta y descargaste la aplicación, solo deberás seguir los siguientes pasos.</p>
                <ol>
                  <li>Abre tu APP SrPago</li>
                  <li>Ingresa tu usuario y contraseña</li>
                  <li>Una vez iniciado la sesión conecta tu lector, importante verificar tener mas del 20% de carga de la batería de el para no tener algún inconveniente</li>
                  <li>Ingresa el monto, da clic en realizar cargo e inserta la tarjeta</li>
                  <li>Firma el cliente</li>
                  <li>Puedes enviar el ticket por correo o imprimirlo con una impresora con AirPrint</li>
                </ol>
              </article>
            </div>
            <div role="tabpanel" class="tab-pane" id="management">
              <article>
                <h2>ROCKETUM</h2>
                <h3>¿Qué es Rocketum?</h3>
                <p>ROCKETUM es el primer ERP diseñado especialmente para emprendedores y MiPymes que buscan una adecuada administración de sus negocios.</p>
                <h3>¿En que te puede ayudar Rocketum?</h3>
                <p>Rocketum es tu impulso para poder mejorar y crecer bien administrado. Con Rocketum podrás llevar tu administración a todos lados, utilizado desde cualquier dispositivo. Todos tus colaboradores verán la misma información en vivo.</p>
                <h3>¿Qué es la nube para emprendedores?</h3>
                <p>Es un sistema en la nube que permite a todos los pequeños negocios tener toda su información completamente disponible desde cualquier lugar en cualquier momento, desde una computadora, Tablet o móviles; sin la necesidad de contar con infraestructura propia y a precio realmente bajo.</p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')

@endsection