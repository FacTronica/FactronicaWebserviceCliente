<?php
/* 
FacTrуnica SpA (r)
Reservados Todos los Derechos de Autor 
Developer: Patricio Dнaz Zъсiga - patriciodiazwebmaster@gmail.com
WhatsApp: +569 8 804 05 74
*/
	
#
# RETORNA EL CONTENIDO DE UN ARCHIVO EN BASE64
function LeerArchivo($path_absolute){
	#
	$archivo_leer=fopen($path_absolute,"r")or die("Error: No existe el archivo $path_absolute");
	$contenido=fread($archivo_leer, filesize($path_absolute));
	fclose($archivo_leer);	
	return base64_encode($contenido);
}
#
class FactronicaWebservice{
	function FactronicaEnviarPost(){
		#
		if(!function_exists('curl_init')){
			#
			exit("ERROR:PHPCURL NO DISPONIBLE");
		}
		#
		global $CONFACTRONICA;
		global $sw_enviar_sii;
 		
		# DECLARAR VALOR DE VARIABLE CON CAMPOS A ENVIAR
		$CONFACTRONICA["POSTFIELDS"]=array("archivito"=>LeerArchivo($CONFACTRONICA["FOLDERPDF"]."/".$CONFACTRONICA["FILETXT"]),"rut_emisor"=>$caratula["RutEmisor"]);
		# INICIALIZAR CURL
		$HANDLERTRONICA = curl_init();
		#
		curl_setopt($HANDLERTRONICA, CURLOPT_URL,$CONFACTRONICA["URLHOST"]."/".$CONFACTRONICA["URLFILE"]);
		curl_setopt($HANDLERTRONICA, CURLOPT_PORT,$CONFACTRONICA["PORT"]);
		curl_setopt($HANDLERTRONICA, CURLOPT_VERBOSE,$CONFACTRONICA["VERBOSE"]);
		curl_setopt($HANDLERTRONICA, CURLOPT_RETURNTRANSFER,$CONFACTRONICA["RETURNTRANSFER"]);
		curl_setopt($HANDLERTRONICA, CURLOPT_TIMEOUT,$CONFACTRONICA["TIMEOUT"]);
		curl_setopt($HANDLERTRONICA, CURLOPT_POSTFIELDS,$CONFACTRONICA["POSTFIELDS"]);
		curl_setopt($HANDLERTRONICA, CURLOPT_HEADER,$CONFACTRONICA["HEADER"]);
		curl_setopt($HANDLERTRONICA, CURLINFO_HEADER_OUT,$CONFACTRONICA["HEADER_OUT"]);
		#
		$RESULTRONICA=curl_exec($HANDLERTRONICA);
		$INFOTRONICA=curl_getinfo($HANDLERTRONICA);
		curl_close($HANDLERTRONICA);	

		################################################# INICIO => XML TRACKID SII
		# Obtener el xml trackid
		$contenido = @file_get_contents($CONFACTRONICA["URLHOST"]."/".$CONFACTRONICA["FOLDERFILES"]."/".$CONFACTRONICA["TRACKID"]); 
		# Crear xml trackid
		$objeto = fopen ($CONFACTRONICA["FOLDERPDF"]."/".$CONFACTRONICA["TRACKID"], 'w');
		# Guardar xml trackid
		fwrite ($objeto, $contenido);
		# Cerrar xml trackid
		fclose ($objeto);
		################################################# FINAL => XML TRACKID SII	
		#
		if($contenido!=""){
			#
			$i=0;	
			#  
			$dom = new DOMDocument;
			#
			$dom->loadXML($contenido);
			#
			$elementos=$dom->getElementsByTagName('STATUS');
			#
			foreach ($elementos as $elemento) {
				$Respuesta["STATUS"]=$elemento->nodeValue; 
			}
			#
			$elementos=$dom->getElementsByTagName('TRACKID');
			foreach ($elementos as $elemento) {
				//$Respuesta["TRACKID"]=$elemento->nodeValue; 
				$trackid=$elemento->nodeValue; 
			}	
		}
		#
		if($sw_enviar_sii=="1"){
		
			if($trackid!=""){

				################################################# INICIO => PDF  
				# Obtener el pdf
				$contenido = file_get_contents($CONFACTRONICA["URLHOST"]."/".$CONFACTRONICA["FOLDERFILES"]."/".$CONFACTRONICA["FILEPDF"]); 
				# Crear pdf
				$objeto = fopen ($CONFACTRONICA["FOLDERPDF"]."/".$CONFACTRONICA["FILEPDF"], 'w');
				# Guardar pdf
				fwrite ($objeto, $contenido);
				# Cerrar pdf
				fclose ($objeto);

				################################################# INICIO => XML CLIENTE
				# Obtener el pdf
				$contenido = file_get_contents($CONFACTRONICA["URLHOST"]."/".$CONFACTRONICA["FOLDERFILES"]."/".$CONFACTRONICA["SETDTEFIRMADO_CLIENTE"]); 
				# Crear pdf
				$objeto = fopen ($CONFACTRONICA["FOLDERPDF"]."/".$CONFACTRONICA["SETDTEFIRMADO_CLIENTE"], 'w');
				# Guardar pdf
				fwrite ($objeto, $contenido);
				# Cerrar pdf
				fclose ($objeto);

				################################################# INICIO => XML SII
				# Obtener el pdf
				$contenido = file_get_contents($CONFACTRONICA["URLHOST"]."/".$CONFACTRONICA["FOLDERFILES"]."/".$CONFACTRONICA["SETDTEFIRMADO_SII"]); 
				# Crear pdf
				$objeto = fopen ($CONFACTRONICA["FOLDERPDF"]."/".$CONFACTRONICA["SETDTEFIRMADO_SII"], 'w');
				# Guardar pdf
				fwrite ($objeto, $contenido);
				# Cerrar pdf
				fclose ($objeto);
				#
				echo "OK"; 
			# sin trackid
			}else{
				echo "ERROR AL ENVIAR AL SII";
			}
		# NO LO QUIERE ENVIAR AL SII
		}else{
			echo "OK";
		}
	}//METODO
}//CLASE 
?>