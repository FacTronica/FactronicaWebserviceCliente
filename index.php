<?php
##############################################################
#
# Copyright (C) 2007-2016 FacTrónica Chile SPA <contacto@factronica.cl>
# Developer Patricio Díaz Zúñiga  <patriciodiazwebmaster@gmail.com>
# 
# Versión: 2.0.1.
# Fecha UpDate: 14-05-2016
#
# FUNCIONES: 
# GENERAR DOCUMENTO XML
# TIMBRAR DOCUMENTO XML
# FIRMAR DOCUMENTO XML
# FIRMAR SOBRE XML
#
# COMPATIBLE CON DOCUMENTOS:
# 33=FACTURAS AFECTA
# 54=FACTURA EXENTA
# 61=NOTAS CREDITO 
# 56=NOTAS DEBITO 
# 52=GUIAS DESPACHO
#
# 
#

##############################################################
# TIPOS DE RESPUESTAS DEL SII AL ENVIAR UN XML DE DTE
##############################################################
$estados_recepcion["0"]="UpLoad OK";
$estados_recepcion["1"]="El Sender no tiene Permiso para Enviar";
$estados_recepcion["2"]="Error en Tamaño del Archivo (Muy Grande o Muy Chico)";
$estados_recepcion["4"]="Error Desconocido";
$estados_recepcion["3"]="Archivo cortado (tamaño <> al parámetro size)";
$estados_recepcion["5"]="No está Autenticado";
$estados_recepcion["6"]="Empresa No Autorizada a Enviar Archivos";
$estados_recepcion["7"]="Esquema Invalido";
$estados_recepcion["8"]="Firma del Documento";	

##############################################################
# CONFIGURACION
##############################################################

# MOSTRAR ERRORES 0=OFF  1=ON
ini_set('display_errors',1); 

# TIPO DE ERRORES E_ALL  E_WARNING
error_reporting(E_ERROR | E_WARNING); 

##############################################################
# CARGAR DATOS DEL DTE EN VARIABLES PREDEFINIDAS
##############################################################
#
include("cargar_datos.php");


##############################################################
# RUTINA PARA GENERAR UN ARCHIVO PLANO CON DTE
##############################################################
#
include("crear_archivo_plano.php"); 
#
#
##############################################################
# CARGAR LA CLASE
##############################################################
include("class_factronica_cliente.php");  
#
#
##############################################################
# INSTANCIAR LA CLASE Y LLAMAR A LOS METODOS
##############################################################
# INSTANCIAR LA CLASE WEBSERVICE DE FACTRONICA
$DocDte=new FactronicaWebservice(); 
# LLAMADA AL METODO PARA CONSUMIR EL SERVICIO WEBSERVICE
$DocDte->FactronicaEnviarPost();
?>	