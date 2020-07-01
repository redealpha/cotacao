<?php  
    require_once("inc/Url.php");
    require_once("inc/MysqliDb.php");
    require_once("inc/functions.php");
    ini_set('display_errors','Off');
    ini_set('error_reporting', E_ALL );
    date_default_timezone_set('America/Sao_Paulo');
    clearstatcache();

    //If the HTTPS is not found to be "on"
    if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
    {
        //Tell the browser to redirect to the HTTPS URL.
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
        //Prevent the rest of the script from executing.
        exit;
    }

	$pagina = Url::getURL( 0 );

    if($pagina == NULL ){
    	$pagina = 'home';
    }
    /* Adicionando o head do sistema */
    require_once("paginas/header.php");
    if(file_exists("paginas/".$pagina.".php")){
    	require "paginas/".$pagina.".php";
    } else {
        require "paginas/404.php";
    }
    require_once("paginas/footer.php");

	

?>