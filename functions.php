<?php

function getEdad($date) {
    return intval(date('Y', time() - strtotime($date))) - 1970;
}


function contadorCookies() {
    if (isset($_COOKIE['contador'])) 
    {
    setcookie('contador', $_COOKIE['contador'] + 1);
    $mensaje = $_COOKIE['contador'];
    } else{
    setcookie('contador', 1);
    $mensaje = '.';
    }

    return $mensaje;
}

//traer por medio de array
function verifyLang($idioma){
    if ($idioma == "en"){
        $setpage['pagina'] = "plantillas/language_en/index.view.php";
        $setpage['resultado'] = "plantillas/language_en/resultado.view.php";
        $setpage['signo'] = 'signos_en';
        
    } elseif ($idioma == "fr"){
        $setpage['pagina'] = "plantillas/language_fr/index.view.php";
        $setpage['resultado'] = "plantillas/language_fr/resultado.view.php";
        $setpage['signo'] = "signos_fr";
        
    } else{
        $setpage['pagina'] = "plantillas/language_es/index.view.php";
        $setpage['resultado'] = "plantillas/language_es/resultado.view.php";
        $setpage['signo'] = "signos_es";
    }
    return $setpage;
}

function cambiarLenguaje($cookieName){
    if ($cookieName == "valindex") {
        setcookie("idiomaUsuario",$_GET["valindex"],time()+86400);
        header('Location:' . RUTA . 'index.php');
    }else {
        setcookie("idiomaUsuario",$_GET["valresult"],time()+86400);
        header('Location:' . RUTA . 'index.php');
    }
    
}

function traducirColor($color){
    switch($color){
        case 'rojo': case 'red': case 'rouge':
            return 'red';
        case 'verde': case 'vert': case 'green':
            return 'green';
        case 'azul': case 'bleu': case 'blue':
            return 'blue';
        case 'cian': case 'cyan':
            return 'cyan';
        case 'amarillo': case 'jaune': case 'yellow':
            return 'yellow';
        case 'gris': case 'gray':
            return 'gray';
        break;
    }
}
