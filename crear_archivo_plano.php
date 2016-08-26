<?php
/* 
Copyright (C) 2007-2015 FacTrónica Chile SPA <contacto@factronica.cl>
Developer Patricio Díaz Zúñiga  <webmaster@gnulinux.cl>
 */
#
# RUTINA PARA CREAR UN ARCHIVO DE TEXTO PLANO
# PARA CONSTRUIR EL ARCHIVO PLANO SE OBTIENE LA INFORMACIÓN ENTREGADA EN CARGAR_DATOS.PHP
# SE GENERA ARCHIVO CON NOMBRE documento_texto.php EL CUAL POSTERIORMENTE SE ENVIA AL WEBSERVICE DE FACTRONICA
# 
# !!!! SE RECOMIENDA NO MODIFICAR ESTE ARCHIVO !!!
#
#
$dataput='<?php 
############################################################## 
#######	PARAMETROS DE CONFIGURACIÓN
##############################################################
#
# ENVIAR XML AL SII 0=NOENVIAR 1=CERTIFICACION 2=PRODUCCION
$sw_produccion="'.$sw_produccion.'";
#
# ENVIAR MAIL CON XML Y PDF AL CORREO DE INTERCAMBIO REGISTRADO EN EL SII 1=SI 0=NO
$sw_enviar_intercambio="'.$sw_enviar_intercambio.'";
#
# ENVIAR XML AL SII 0=NO 1=SI
$sw_enviar_sii="'.$sw_enviar_sii.'";
#
# ENVIAR MAIL CON XML AL EMISOR 1=SI 0=NO
$sw_enviar_emisor="'.$sw_enviar_emisor.'";
#
# ENVIAR MAIL CON XML AL RECEPTOR 1=SI 0=NO
$sw_enviar_receptor="'.$sw_enviar_receptor.'";
#
# SISTEMA OPERATIVO DEL SERVIDOR LINUX - WINDOWS
$separador_carpetas="'.$separador_carpetas.'"; 
#
# URL DEL LOGO A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png 
$url_logo="'.$url_logo.'";

##############################################################
####### DATOS DEL SERVIDOR
##############################################################
# URL DEL WEBSERVICE SERVIDOR EJ. http://www.factronica.cl/factronica_webservice_servidor_beta
$CONFACTRONICA["URLHOST"]="'.$CONFACTRONICA["URLHOST"].'";
# SCRIPT DEL SERVIDOR EJ. index.php
$CONFACTRONICA["URLFILE"]="'.$CONFACTRONICA["URLFILE"].'";
# PUERTO DE COMUNICACION ej.80
$CONFACTRONICA["PORT"]="'.$CONFACTRONICA["PORT"].'";
# DEPURAR ej. 1
$CONFACTRONICA["VERBOSE"]="'.$CONFACTRONICA["VERBOSE"].'";
# RETORNAR RESULTADOS ej. 1
$CONFACTRONICA["RETURNTRANSFER"]="'.$CONFACTRONICA["RETURNTRANSFER"].'";
# TIEMPO MAXIMO ESPERA ej.30
$CONFACTRONICA["TIMEOUT"]="'.$CONFACTRONICA["TIMEOUT"].'";
# ENCABEZADO DEL ENVIO ej. 0
$CONFACTRONICA["HEADER"]="'.$CONFACTRONICA["HEADER"].'"; 
# ENVIAR ENCABEZADO EJ. true
$CONFACTRONICA["HEADER_OUT"]="'.$CONFACTRONICA["HEADER_OUT"].'"; 	
 

##############################################################
####### DATOS DE NOMBRES DE ARCHIVOS Y DIRECTORIOS
##############################################################
# NOMBRE DE LA CARPETA LOCAL DE ALMACENAMIENTO
$CONFACTRONICA["FOLDERPDF"]="'.$CONFACTRONICA["FOLDERPDF"].'";
# NOMBRE DE LA CARPETA REMOTA DE ALMACENAMIENTO
$CONFACTRONICA["FOLDERFILES"]="'.$CONFACTRONICA["FOLDERFILES"].'";
# NOMBRE QUE SE LE QUIERE DAR EL ARCHIVO PDF
$CONFACTRONICA["FILEPDF"]="'.$CONFACTRONICA["FILEPDF"].'";
# NOMBRE QUE SE LE QUIERE DAR EL ARCHIVO PDF
$CONFACTRONICA["FILEPDFCLIENTE"]="'.$CONFACTRONICA["FILEPDFCLIENTE"].'";
# NOMBRE DEL ARCHIVO PLANO QUE ESTA ENVIANDO
$CONFACTRONICA["FILETXT"]="'.$CONFACTRONICA["FILETXT"].'";
# NOMBRE DEL ARCHIVO DEL DTE POR FIRMAR
$CONFACTRONICA["DTEPORFIRMAR"]="'.$CONFACTRONICA["DTEPORFIRMAR"].'";
# NOMBRE DEL ARCHIVO DEL DTE FIRMADO
$CONFACTRONICA["DTEFIRMADO"]="'.$CONFACTRONICA["DTEFIRMADO"].'";
# NOMBRE DEL ARCHIVO DEL SET POR FIRMAR
$CONFACTRONICA["SETDTEPORFIRMAR"]="'.$CONFACTRONICA["SETDTEPORFIRMAR"].'";
# NOMBRE DEL ARCHIVO DEL SET FIRMADO Y QUE SE ENVIAR¡ AL CLIENTE AL MAIL INTERCAMBIO
$CONFACTRONICA["SETDTEFIRMADO_CLIENTE"]="'.$CONFACTRONICA["SETDTEFIRMADO_CLIENTE"].'";
# NOMBBRE DEL ARCHIVO DEL SET FIRMADO Y QUE SE ENVIARA AL SII POR MEDIO DE WEBSERVICES
$CONFACTRONICA["SETDTEFIRMADO_SII"]="'.$CONFACTRONICA["SETDTEFIRMADO_SII"].'";
# NOMBRE DEL ARCHIVO PNG CON LA IMAGEN DEL PDF417 (TED) TIMBRE ELECTRONICO SII CHILE
$CONFACTRONICA["FILEPNG"]="'.$CONFACTRONICA["FILEPNG"].'";
# NOMBRE DEL ARCHIVO XML CON LA RESPUESTA DEL SII (TRACKID)
$CONFACTRONICA["TRACKID"]="'.$CONFACTRONICA["TRACKID"].'";
 
 
 
 
 
############################################################## 
#######	CARATULA
##############################################################
#
# RUT DEL CONTRIBUYENTE EMISOR
$caratula["RutEmisor"]="'.$caratula["RutEmisor"].'"; 
#
# RUT AUTORIZADO A ENVIAR DTES AL SII SIEMPRE ES RUT DE PERSONA NO DE EMPRESA
$caratula["RutEnvia"]="'.$caratula["RutEnvia"].'";
#
# RUT=60803000-K
$caratula["RutReceptor"]="60803000-K";  
#
# FECHA DE RESOLUCIÓN DE INICIO EN FACTURA ELECTRONICA
$caratula["FchResol"]="'.$caratula["FchResol"].'"; 
#
# CERTIFICACION NUM=CERO
$caratula["NroResol"]="'.$caratula["NroResol"].'"; 
#
# NOMBRE SUCURSAL SII
$caratula["SucSii"]="'.$caratula["SucSii"].'"; 
#
##############################################################   
#######	ENCABEZADO
##############################################################
#
# FECHA DE EMISIÓN
$IdDoc["FchEmis"]="'.$IdDoc["FchEmis"].'"; 
#
# TIPO DE DOCUMENTO FV=33, ND=56, NC=61
$IdDoc["TipoDTE"]="'.$IdDoc["TipoDTE"].'"; 
#
# FOLIO DEL DOCUMENTO
$IdDoc["Folio"]="'.$IdDoc["Folio"].'"; 
#
# entre caso y num hay 2 espacios blancos
$IdDoc["RazonRef"]="'.$IdDoc["RazonRef"].'"; 
#
# PARA USO EN GUIA DESPACHO
$IdDoc["TipoDespacho"]="'.$IdDoc["TipoDespacho"].'"; 
#
# PARA USO EN GUIA DESPACHO
$IdDoc["IndTraslado"]="'.$IdDoc["IndTraslado"].'"; 
 
############################################################## 
#######	EMISOR
##############################################################
#
# RUT EMISOR
$Emisor["RUTEmisor"]="'.$Emisor["RUTEmisor"].'";  
#
# RAZON SOCIAL EMISOR
$Emisor["RznSoc"]="'.$Emisor["RznSoc"].'"; 
#
# GIRO EMISOR
$Emisor["GiroEmis"]="'.$Emisor["GiroEmis"].'";
#
# CODIGO PRINCIPAL DE ACTIVIDAD COMERCIAL
$Emisor["Acteco"]="'.$Emisor["Acteco"].'"; 
#
# CODIGO DE LA SUCURSAL DEL SII
$Emisor["CdgSIISucur"]="'.$Emisor["CdgSIISucur"].'"; 
#
# DIRECCION EMISOR
$Emisor["DirOrigen"]="'.$Emisor["DirOrigen"].'";
#
# COMUNA EMISOR
$Emisor["CmnaOrigen"]="'.$Emisor["CmnaOrigen"].'";
#
# CIUDAD EMISOR
$Emisor["CiudadOrigen"]="'.$Emisor["CiudadOrigen"].'";
#
# EMAIL EMISOR
$Emisor["CorreoEmisor"]="'.$Emisor["CorreoEmisor"].'";
#
# WEB EMISOR
$Emisor["Web"]="'.$Emisor["Web"].'";
#
# FONO EMISOR
$Emisor["Telefono"]="'.$Emisor["Telefono"].'";
#
############################################################## 
#######	RECEPTOR
##############################################################
#
# RUT RECEPTOR
$Receptor["RUTRecep"]="'.$Receptor["RUTRecep"].'"; 
#
# RAZON SOCIAL RECEPTOR
$Receptor["RznSocRecep"]="'.$Receptor["RznSocRecep"].'";
#
# GIRO RECEPTOR
$Receptor["GiroRecep"]="'.$Receptor["GiroRecep"].'";
#
# DIRECCION RECEPTOR
$Receptor["DirRecep"]="'.$Receptor["DirRecep"].'";
#
# COMUNA RECEPTOR
$Receptor["CmnaRecep"]="'.$Receptor["CmnaRecep"].'";
#
# CIUDAD RECEPTOR
$Receptor["CiudadRecep"]="'.$Receptor["CiudadRecep"].'";
#
# CONTACTO RECEPTOR
$Receptor["Contacto"]="'.$Receptor["Contacto"].'";
#
# CORREO RECEPTOR
$Receptor["CorreoRecep"]="'.$Receptor["CorreoRecep"].'";
#
##############################################################
#######	TOTALES														
##############################################################
#
# TASA DE IMPUESTO
$Totales["TasaIVA"]="'.$Totales["TasaIVA"].'";
#
# NETO AFECTO
$Totales["MntNeto"]="'.$Totales["MntNeto"].'";
#
# NETO EXENTO
$Totales["MntExe"]="'.$Totales["MntExe"].'";
#
# MONTO IVA
$Totales["IVA"]="'.$Totales["IVA"].'"; 
#
# MONTO TOTAL BRUTO
$Totales["MntTotal"]="'.$Totales["MntTotal"].'";  
#';


for($lineas=1;$lineas<=count($DscRcgGlobal);$lineas++){
$dataput=$dataput.'
##############################################################
#######	DESCUENTOS Y/O RECARGOS GLOBALES	
##############################################################
# LINEA 1 DESCUENTO/RECARGO
$DscRcgGlobal["'.$lineas.'"]["NroLinDR"]="'.$DscRcgGlobal["$lineas"]["NroLinDR"].'"; 
$DscRcgGlobal["'.$lineas.'"]["TpoMov"]="'.$DscRcgGlobal["$lineas"]["TpoMov"].'"; 
$DscRcgGlobal["'.$lineas.'"]["GlosaDR"]="'.$DscRcgGlobal["$lineas"]["GlosaDR"].'"; 
$DscRcgGlobal["'.$lineas.'"]["TpoValor"]="'.$DscRcgGlobal["$lineas"]["TpoValor"].'"; 
$DscRcgGlobal["'.$lineas.'"]["ValorDR"]="'.$DscRcgGlobal["$lineas"]["ValorDR"].'";  
$DscRcgGlobal["'.$lineas.'"]["ValorDROtrMnda"]="'.$DscRcgGlobal["$lineas"]["ValorDROtrMnda"].'"; 
$DscRcgGlobal["'.$lineas.'"]["IndExeDR"]="'.$DscRcgGlobal["$lineas"]["IndExeDR"].'"; 
#
';
}




for($lineas=1;$lineas<=count($detalle);$lineas++){

$dataput=$dataput.'
##############################################################
#######	 DETALLE
##############################################################
#
#
# LINEA 1 DEL DOCUMENTO
$detalle["'.$lineas.'"]["NroLinDet"]="'.$detalle["$lineas"]["NroLinDet"].'";  
$detalle["'.$lineas.'"]["NmbItem"]="'.$detalle["$lineas"]["NmbItem"].'";  
$detalle["'.$lineas.'"]["TpoCodigo"]="'.$detalle["$lineas"]["TpoCodigo"].'";  
$detalle["'.$lineas.'"]["UnmdItem"]="'.$detalle["$lineas"]["UnmdItem"].'";  
$detalle["'.$lineas.'"]["QtyItem"]="'.$detalle["$lineas"]["QtyItem"].'"; 
$detalle["'.$lineas.'"]["VlrCodigo"]="'.$detalle["$lineas"]["VlrCodigo"].'"; 
$detalle["'.$lineas.'"]["PrcItem"]="'.$detalle["$lineas"]["PrcItem"].'"; 
$detalle["'.$lineas.'"]["DscItem"]="'.$detalle["$lineas"]["DscItem"].'";  
$detalle["'.$lineas.'"]["MontoItem"]="'.$detalle["$lineas"]["MontoItem"].'";  
$detalle["'.$lineas.'"]["DscItemPesos"]="'.$detalle["$lineas"]["DscItemPesos"].'";  
$detalle["'.$lineas.'"]["DescuentoPct"]="'.$detalle["$lineas"]["DescuentoPct"].'";  
$detalle["'.$lineas.'"]["IndExe"]="'.$detalle["$lineas"]["IndExe"].'"; 
#
';
}



for($r=1;$r<=count($doc_referencia);$r++){ 
#
$dataput=$dataput.'
$doc_referencia["'.$r.'"]["FolioRef"]="'.$doc_referencia["$r"]["FolioRef"].'";
$doc_referencia["'.$r.'"]["TpoDocRef"]="'.$doc_referencia["$r"]["TpoDocRef"].'";
$doc_referencia["'.$r.'"]["RazonRef"]="'.$doc_referencia["$r"]["RazonRef"].'";
$doc_referencia["'.$r.'"]["CodRef"]="'.$doc_referencia["$r"]["CodRef"].'";
$doc_referencia["'.$r.'"]["FchRef"]="'.$doc_referencia["$r"]["FchRef"].'";
';

}



#
$dataput=$dataput.'
############################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
#
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="'.$certificado["Modulus"].'"; 
#
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="'.$certificado["Exponent"].'"; 
#
#
# CERTIFICADO X509
$certificado["X509Certificate"]="'.$certificado["X509Certificate"].'";
#
#
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="'.$certificado["PrivKey"].'"; 




##############################################################
#######	CARGAR DATOS DE TIMBRAJE DE FOLIOS
##############################################################
# RUT EMISOR
$CAF["RE"]="'.$CAF["RE"].'";
#
#
# RAZON SOCIAL EMISOR
$CAF["RS"]="'.$CAF["RS"].'";
#
#
# TIPO DE DOCUMENTO
$CAF["TD"]="'.$CAF["TD"].'";
#
#
# FOLIO DESDE
$CAF["RNG_D"]="'.$CAF["RNG_D"].'";
#
#
# FOLIO HASTA
$CAF["RNG_H"]="'.$CAF["RNG_H"].'";
#
#
# FECHA AUTORIZACION TIMBRAJE
$CAF["FA"]="'.$CAF["FA"].'";
#
#
# MODULO LLAVE PRIVADA TIMBRAJE
$CAF["RSAPK_M"]="'.$CAF["RSAPK_M"].'";
#
#
# MODULO EXPONENTE TIMBRAJE
$CAF["RSAPK_E"]="'.$CAF["RSAPK_E"].'";
#
#
# INDICE DEL TIMBRAJE
$CAF["RSAPK_IDK"]="'.$CAF["RSAPK_IDK"].'";
#
#
# FIRMA DEL TIMBRAJE
$CAF["FRMA"]="'.$CAF["FRMA"].'";
#
#
# LLAVE PRIVADA DEL TIMBRAJE
$CAF["RSASK"]="'.$CAF["RSASK"].'";
#
#
# LLAVE PUBLICA DEL TIMBRAJE
$CAF["RSAPUBK"]="'.$CAF["RSAPUBK"].'";
?>';
#
#
#
#
##################################################################
# guardar el archivo con la información ya vaciada
# este archivo posteriormente es leido por la libreria 
# y a partir de esa información genera el xml y lo envia por mail
##################################################################
#
$archivo=fopen($CONFACTRONICA["FOLDERPDF"]."/".$CONFACTRONICA["FILETXT"],"w") or die("ERROR");
fputs($archivo,$dataput);
fclose($archivo);
?>