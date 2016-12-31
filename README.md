# FactronicaWebserviceCliente
WebService Cliente Factronica
El webservice cliente de factronica est desarrollado para realizar las 5 funciones necesarias para el proceso de emisión de documentos electrónicos tributarios.
<br>Para sistema escritos en Php, se recomienda utilizar la api de factronica la cual realiza en forma automáticas los siguientes 5 procesos:
<br>
<h4>Procesos ya automatizados dentro del Webservice Cliente de Factronica:</h4>
1.-Generar Archivo Plano TXT
<br>2.-Enviar Archivo Plano TXT al Servidor de Facturación
<br>3.-Recuperar Archivo XML con TrackID
<br>4.-Recuperar Archivo XML con Documento Electrónico
<br>5.-Recuperar Archivo PDF con Documento Electrónico
<br>
<h4>Procedimiento a Seguir para Utilizar FactronicaWebserviceCliente:</h4>
<ul>
<li>Editar el archivo cargar_datos.php y reemplazar los valores contantes por variables</li>
<li>Desde su sistema propio al pulsar el botón Enviar debe ejecutar modo backend el index.php</li>
<li>Si el SII le entrego trackid, debe proceder a visualizar el Pdf para su impresión.</li>
<li>Almacenar en su sistema propio los archivos; Xml, Pdf con documento y trackid</li>
</ul>
