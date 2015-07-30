<?php
/*
Esse algorítimo tem como função verificar 
se a URL e realmente valida e procurar por 
string dentro da pagina.

Autor: Rhylton de Figueirêdo 
E-mail: contato@gamapixel.com.br
Site: http://rhylton.com.br
*/

$url 	= "http://rhylton.com.br"; //Adicionar URL do site
$texto 	= "contato"; //Sring no qual você quer verificar Ex: "<!DOCTYPE html>" - src="social.png"

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$buscaUrl = curl_exec($curl);
$textoUrl = strpos($buscaUrl, $texto);

function checkURL($url){

	if($url==false){
	    $resultURL = "URL INVALIDO!!!";
	}else{
	    $resultURL = "URL VALIDO!!";
	}

	return $resultURL;
}


function checkTXT($txt){

	if($txt==false){
	    $resultTXT = "Esse texto não existe :'(";
	}else{
	    $resultTXT = "Texto OK :)";
	}

	return $resultTXT;
}

echo "URL: ".checkURL($buscaUrl)."<br />"."TEXTO: ".checkTXT($textoUrl); 

?>
