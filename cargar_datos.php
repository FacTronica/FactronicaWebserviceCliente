<?php
##############################################################
#######   PARAMETROS DE CONFIGURACIÓN
##############################################################
#
# AMBIENTE A UTILIZAR DEL SII 1=PRODUCCION 0=PRUEBA (CERTIFICACION)
$sw_produccion="0";
#
# ENVIAR MAIL CON XML Y PDF AL CORREO DE INTERCAMBIO REGISTRADO EN EL SII 1=SI 0=NO
$sw_enviar_intercambio="0";
#
# ENVIAR XML AL SII 0=NO 1=SI
$sw_enviar_sii="0";
#
# ENVIAR MAIL CON XML AL EMISOR 1=SI 0=NO
$sw_enviar_emisor="1";
#
# ENVIAR MAIL CON XML AL RECEPTOR 1=SI 0=NO
$sw_enviar_receptor="1";
#
# SISTEMA OPERATIVO DEL SERVIDOR LINUX - WINDOWS
$separador_carpetas="LINUX";
#
# URL DEL LOGO A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png  120X120 PIXELS
$url_logo="http://factronica.cl/images/logo.png";
#
# URL DEL LOGO CENTRAL A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png  240X240 PIXELS
$url_logo_central="";
#
# INDICA LA CANTIDAD DE DECIMALES A MOSTRAR EN EL PDF Y XML
$decimales_item_unitario="0";
#
# INDICA LA CANTIDAD DE ESPACIADO ENTRE CADA LINEA DEL DETALLE
$espaciado_items="7";
#
# NOMBRE DEL PROVEEDOR DE FACTURA ELECTRONICA QUE APARECE AL PIE DEL PDF
$nom_proveedor="FACTRONICA SPA";
#
# RUL DEL PROVEEDOR DE FACTURA ELECTRONICA QUE APARECE AL PIE DEL PDF
$url_proveedor="WWW.FACTRONICA.CL";


##############################################################
####### NOMBRES DIRECTORIOS DE ALMACENAMIENTO LOCAL Y REMOTO
##############################################################
# NOMBRE DE LA CARPETA LOCAL DE ALMACENAMIENTO
$CONFACTRONICA["FOLDERPDF"]="almacen_local";
# NOMBRE DE LA CARPETA REMOTA DE ALMACENAMIENTO
$CONFACTRONICA["FOLDERFILES"]="almacen_remoto";


##############################################################
#######
##############################################################
# NOMBRE DEL ARCHIVO PLANO QUE ESTA ENVIANDO
$CONFACTRONICA["FILETXT"]="envio_dte.txt";


##############################################################
####### 
##############################################################
# NOMBRE QUE SE LE QUIERE DAR EL ARCHIVO PDF
$CONFACTRONICA["FILEPDF"]="PDF_RUT77777777-2_TIPO52_FOLIO185.pdf";
# NOMBRE QUE SE LE QUIERE DAR EL ARCHIVO PDF
$CONFACTRONICA["FILEPDFCLIENTE"]="PDF_RUT77777777-2_TIPO52_FOLIO185.pdf";
# NOMBRE DEL ARCHIVO PNG CON LA IMAGEN DEL PDF417 (TED) TIMBRE ELECTRONICO SII CHILE
$CONFACTRONICA["FILEPNG"]="PDF417_77777777-2_TIPO52_FOLIO185.png";
# NOMBRE DEL ARCHIVO XML CON LA RESPUESTA DEL SII (TRACKID)
$CONFACTRONICA["TRACKID"]="TRACKID_RUT77777777-2_TIPO52_FOLIO185.xml";



##############################################################
####### NOMBRE DE ARCHIVOS XML POR FIRMAR
##############################################################
# NOMBRE DEL ARCHIVO DEL DTE POR FIRMAR
$CONFACTRONICA["DTEPORFIRMAR"]="DTEPORFIRMAR_RUT77777777-2_TIPO52_FOLIO185.xml";
# NOMBRE DEL ARCHIVO DEL SET POR FIRMAR
$CONFACTRONICA["SETDTEPORFIRMAR"]="SETPORFIRMAR_RUT77777777-2_TIPO52_FOLIO185.xml";

 
##############################################################
####### NOMBRE DE ARCHIVOS XML FIRMADOS
##############################################################
# NOMBRE DEL ARCHIVO DEL DTE FIRMADO
$CONFACTRONICA["DTEFIRMADO"]="DTEFIRMADO_RUT77777777-2_TIPO52_FOLIO185.xml";
# NOMBRE DEL ARCHIVO DEL SET FIRMADO Y QUE SE ENVIARÁ AL CLIENTE AL MAIL INTERCAMBIO
$CONFACTRONICA["SETDTEFIRMADO_CLIENTE"]="SETFIRMADOCLIENTE_RUT77777777-2_TIPO52_FOLIO185.xml";
# NOMBBRE DEL ARCHIVO DEL SET FIRMADO Y QUE SE ENVIARA AL SII POR MEDIO DE WEBSERVICES
$CONFACTRONICA["SETDTEFIRMADO_SII"]="SETFIRMADOSII_RUT77777777-2_TIPO52_FOLIO185.xml";



##############################################################
#######   CARATULA
##############################################################
#
# RUT DEL CONTRIBUYENTE EMISOR
$caratula["RutEmisor"]="77777777-2";
#
# RUT AUTORIZADO A ENVIAR DTES AL SII SIEMPRE ES RUT DE PERSONA NO DE EMPRESA
$caratula["RutEnvia"]="11111111-1";
#
# RUT DEL SII 60803000-K (SIEMPRE VA AQUI EL RUT DEL SII)
$caratula["RutReceptor"]="60803000-K"; 
#
# FECHA DE RESOLUCIÓN DE INICIO EN FACTURA ELECTRONICA
$caratula["FchResol"]="2014-08-22";
#
# CERTIFICACION NUM=CERO
$caratula["NroResol"]="0";
#
# NOMBRE SUCURSAL SII
$caratula["SucSii"]="SANTIAGO ORIENTE";
#
##############################################################   
#######   ENCABEZADO
##############################################################
#
# FECHA DE EMISIÓN
$IdDoc["FchEmis"]="2016-04-28";
#
# FECHA DE VENCIMIENTO AAAA-MM-DD
$IdDoc["FchVenc"]="2016-04-28";    
#
# TEXTO CON FORMA DE PAGO   
$IdDoc["TermPagoGlosa"]="Contado";
#
# TIPO DE DOCUMENTO FV=33, ND=56, NC=61 52=GUIA DE DESPACHO
$IdDoc["TipoDTE"]="52";
#
# FOLIO DEL DOCUMENTO
$IdDoc["Folio"]="185";
#
# PARA USO EN GUIA DESPACHO
$IdDoc["TipoDespacho"]="";
#
# PARA USO EN GUIA DESPACHO
$IdDoc["IndTraslado"]="";
#
# INDICADOR DE LINEAS EN VALORES BRUTOS 1=SI 0=NO
$IdDoc["MntBruto"]="";
 
##############################################################
#######   EMISOR
##############################################################
#
# RUT EMISOR
$Emisor["RUTEmisor"]="77777777-2"; 
#
# RAZON SOCIAL EMISOR
$Emisor["RznSoc"]="IMPORTADOR, DISTRIBUIDOR Y COMERCIALIZADOR PRODUCTOS LIMITADA";
#
# GIRO EMISOR
$Emisor["GiroEmis"]="MAQUINARIA PARA MINERIA Y EQUIPOS DE SALUD AMBIENTAL";
#
# CODIGO PRINCIPAL DE ACTIVIDAD COMERCIAL
$Emisor["Acteco"]="291980";
#
# CODIGO DE LA SUCURSAL DEL SII
$Emisor["CdgSIISucur"]="12312";
#
# DIRECCION EMISOR
$Emisor["DirOrigen"]="AMERICO VESPUCIO 7775";
#
# COMUNA EMISOR
$Emisor["CmnaOrigen"]="LAS CONDES";
#
# CIUDAD EMISOR
$Emisor["CiudadOrigen"]="SANTIAGO";
#
# EMAIL EMISOR
$Emisor["CorreoEmisor"]="VENTAS@FACTRONICA.CL";
#
# WEB EMISOR
$Emisor["Web"]="WWW.FACTRONICA.CL";
#
# FONO EMISOR
$Emisor["Telefono"]="222222 - 3333333";
#
##############################################################
#######   RECEPTOR
##############################################################
#
# RUT RECEPTOR
$Receptor["RUTRecep"]="76179531-7";
#
# RAZON SOCIAL RECEPTOR
$Receptor["RznSocRecep"]="IDEAS LIMITADA";
#
# GIRO RECEPTOR
$Receptor["GiroRecep"]="VENTA AL POR MAYOR DE OTROS PRODUCTOS N.C.P.";
#
# DIRECCION RECEPTOR
$Receptor["DirRecep"]="SIMON BOLIVAR 3322";
#
# COMUNA RECEPTOR
$Receptor["CmnaRecep"]="PROVIDENCIA";
#
# CIUDAD RECEPTOR
$Receptor["CiudadRecep"]="SANTIAGO";
#
# CONTACTO RECEPTOR
$Receptor["Contacto"]="JUAN PEREZ";
#
# CORREO RECEPTOR
$Receptor["CorreoRecep"]="CONTACTO@FACTRONICA.CL";
#
##############################################################
#######   TOTALES                                          
##############################################################
#
# TASA DE IMPUESTO
$Totales["TasaIVA"]="19";
#
# NETO AFECTO
$Totales["MntNeto"]="500000";
#
# NETO EXENTO
$Totales["MntExe"]="";
#
# MONTO IVA
$Totales["IVA"]="95000";
#
# MONTO TOTAL BRUTO
$Totales["MntTotal"]="595000"; 
#
##############################################################
#######   DESCUENTOS GLOBALES  
##############################################################
$DscRcgGlobal["1"]["NroLinDR"]="1";
$DscRcgGlobal["1"]["TpoMov"]="D"; // D=DESCUENTO R=RECARGO
$DscRcgGlobal["1"]["GlosaDR"]="Descuento Global";
$DscRcgGlobal["1"]["TpoValor"]="%"; // tipo descuento %=en porcentaje
$DscRcgGlobal["1"]["ValorDR"]="50"; // descuento en porcentaje
$DscRcgGlobal["1"]["ValorDROtrMnda"]="500000";  // descuento en pesos
$DscRcgGlobal["1"]["IndExeDR"]="0";// 0=descuento a items afectos 1=descuento a items exentos




##############################################################
#######    DETALLE
##############################################################
#
#
# LINEA 1 DEL DOCUMENTO
$detalle["1"]["NroLinDet"]="1"; # NUMERO DE LINEA
$detalle["1"]["NmbItem"]="Computador Notebook Dell Inspiron X777"; # NOMBRE DEL ITEM
$detalle["1"]["DscItem"]=""; # DESCRIPCION LARGA DEL ITEM
$detalle["1"]["TpoCodigo"]="INT1"; # TIPO DE CODIGO INT1=DEFAULT
$detalle["1"]["UnmdItem"]="UN"; # UNIDAD DE MEDIDA DEL ITEM
$detalle["1"]["QtyItem"]="2"; # CANTIDAD 
$detalle["1"]["VlrCodigo"]="001"; # CODIGO
$detalle["1"]["PrcItem"]="5000"; # UNITARIO
$detalle["1"]["MontoItem"]="9000"; # MONTO TOTAL DEL ITEM CON EL DESCUENTO LINEAL APLICADO
$detalle["1"]["DescuentoPct"]="10"; # DESCUENTO DEL ITEM EN PORCENTAJE
$detalle["1"]["DscItemPesos"]="1000"; # DESCUENTO DEL ITEM EN PESOS (en xml equivale DescuentoMonto )
$detalle["1"]["IndExe"]="0"; # ITEM EXENTOS 1=SI 0=NO
#



##############################################################
#######    REFERENCIAS
##############################################################
$doc_referencia["1"]["FolioRef"]="12321";
$doc_referencia["1"]["TpoDocRef"]="801";
$doc_referencia["1"]["RazonRef"]="Orden de Compra";
$doc_referencia["1"]["CodRef"]="";# SOLO APLICA A NOTAS DE CREDITO Y DEBITO
$doc_referencia["1"]["FchRef"]="2016-04-28";

##############################################################
#######   DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
#
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="yx0WFXKiOksyBVl+wukh2tkYlxBf+hLGTEwdt48+AFeQf02w5iVNiKSjJDt9A2OY
xnabRlGO+iaxioVyjrn9jlIGn9bf2xyQuKGJHJHkaGc=";
#
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB";
#
#
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIGNTCCBR2gAwIBAgIKKJxcrQAAAAN5hTANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
EwhTYW50aWFnbzEUMBIGA1UEChMLRS1DRVJUQ0hJTEUxIDAeBgNVBAsTF0F1dG9y
wDJ50qehYTbCaP9MVRf2Dp9iyg7YJdVIa9uRlx6vWRsTRLHOnWhXT44cCmB29sbV
Xl0TN1zmjmDOXN9G80ubWwgUFVOxKYRAVjcDplovnjIhR6ZB4p17El7tfdua51Fo
614fGTlkApFWtkbsrmdiLcnCZW1Iv8WaV8haChXd2qUIpvFetI9RLhNtoCspJnVp
UT9Qg1hZfRtc";
#
#
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDLHRYVcqI6SzIFWX7C6SHa2RiXEF/6EsZMTB23jz4AV5B/TbDm
52dUmdBNqujlOVp5eQhK2v2IPnU8+pM71DyYA51RygQ0SZhXajQ+pCDeEXLjT91t
NjSsCVpPrUDTjX8O/bkCQBDQrDMag33nGrf0KN2Nzgz1IBs1zFU8kpuWoYcz+aK9
OIhKufo4XsU9Cd30uESVyMfIcc2aQe+blXbSUr3Uscw=
-----END RSA PRIVATE KEY-----";




##############################################################
#######   CARGAR DATOS DE TIMBRAJE DE FOLIOS
##############################################################
# RUT EMISOR
$CAF["RE"]="77777777-2";
#
#
# RAZON SOCIAL EMISOR
$CAF["RS"]="IMPORTADOR, DISTRIBUIDOR Y COMERCIALIZADOR PRODUCTOS LIMITADA";
#
#
# TIPO DE DOCUMENTO
$CAF["TD"]="33";
#
#
# FOLIO DESDE
$CAF["RNG_D"]="175";
#
#
# FOLIO HASTA
$CAF["RNG_H"]="1174";
#
#
# FECHA AUTORIZACION TIMBRAJE
$CAF["FA"]="2016-04-11";
#
#
# MODULO LLAVE PRIVADA TIMBRAJE
$CAF["RSAPK_M"]="0RMq4227cW9vDImqKfznsRottT5PAmL+d6fLU8H57UisDMFLSBkBc2MGwmWOjmfdYXuc9SrKI0fWuIK9zqtU2Q==";
#
#
# MODULO EXPONENTE TIMBRAJE
$CAF["RSAPK_E"]="Aw==";
#
#
# INDICE DEL TIMBRAJE
$CAF["RSAPK_IDK"]="100";
#
#
# FIRMA DEL TIMBRAJE
$CAF["FRMA"]="PsSWb7/AFljZXFolK1ecxdXJrU7icArFDSaVlBZgWCMngUoNPDtiJzRcmSo1mzxi3VdyNSeOCxdBxoBzwj/MAA==";
#
#
# LLAVE PRIVADA DEL TIMBRAJE
$CAF["RSASK"]="-----BEGIN RSA PRIVATE KEY-----
MIIBOgIBAAJBANETKuNtu3FvbwyJqin857EaLbU+TwJi/neny1PB+e1IrAzBS0gZ
cYNMmmNzrLvzAiEAj0vZ8VtxIct05M79XHwSW3XJG8NFC/l6lqT5yEgu5hMCIGh7
XiPtPfRRIZuJANWO1+Mexd4xYMeA2wT41+QGd3DQ
-----END RSA PRIVATE KEY-----
";
#
#
# LLAVE PUBLICA DEL TIMBRAJE
$CAF["RSAPUBK"]="-----BEGIN PUBLIC KEY-----
MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBANETKuNtu3FvbwyJqin857EaLbU+TwJi
jo5n3WF7nPUqyiNH1riCvc6rVNkCAQM=
-----END PUBLIC KEY-----
";


##############################################################
####### DATOS DEL SERVIDOR
##############################################################
		 
# URL DEL WEBSERVICE SERVIDOR EJ. http://www.factronica.cl/factronica_webservice_servidor_beta
$CONFACTRONICA["URLHOST"]="http://www.factronica.cl/factronica_webservice_servidor_beta";
# SCRIPT DEL SERVIDOR EJ. index.php
$CONFACTRONICA["URLFILE"]="index.php";
# PUERTO DE COMUNICACION ej.80
$CONFACTRONICA["PORT"]="80";
# DEPURAR ej. 1
$CONFACTRONICA["VERBOSE"]=1;
# RETORNAR RESULTADOS ej. 1
$CONFACTRONICA["RETURNTRANSFER"]=1;
# TIEMPO MAXIMO ESPERA ej.30
$CONFACTRONICA["TIMEOUT"]=30;
# ENCABEZADO DEL ENVIO ej. 0
$CONFACTRONICA["HEADER"]=0; 
# ENVIAR ENCABEZADO EJ. true
$CONFACTRONICA["HEADER_OUT"]=true; 	
		 
?>