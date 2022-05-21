<?php 
require 'config/routes.php';

    if (!isset($_COOKIE["idiomaUsuario"])){
        $pagina = "plantillas/home.view.php";
        
    } elseif ($_COOKIE["idiomaUsuario"] == "en"){
        $pagina = "plantillas/language_en/index.view.php";
        
    } elseif ($_COOKIE["idiomaUsuario"] == "fr"){
        $pagina = "plantillas/language_fr/index.view.php";
        
    } else {
        $pagina = "plantillas/language_es/index.view.php";
    }
require $pagina;
?>


