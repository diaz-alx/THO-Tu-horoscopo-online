<?php 

require 'config/routes.php';
require 'class/signos.class.php';
require 'functions.php';
require 'data/signos_array.php';

if (!isset($_COOKIE["idiomaUsuario"])){
    $resultado = "plantillas/language_es/resultado.view.php";
    $idioma = $signos_es;

} elseif ($_COOKIE["idiomaUsuario"] == "en"){
    $resultado = "plantillas/language_en/resultado.view.php";
    $idioma = $signos_en;

} elseif ($_COOKIE["idiomaUsuario"] == "fr"){
    $resultado = "plantillas/language_fr/resultado.view.php";
    $idioma = $signos_fr;

} else {
    $resultado = "plantillas/language_es/resultado.view.php";
    $idioma = $signos_es;
}

if (!isset($_POST['name'], $_POST['date'])) {
    header('Location:' . RUTA . 'plantillas/home.view.php');
}else{
    $name = $_POST['name'];
    $date = $_POST['date'];

    $zodiac = new SignosZodiacales($date, $idioma);
    $nombre = $zodiac->getSignoZodiacal();
    $simbolo = $zodiac->getSimbolo();
    $texto = $zodiac->getSignoTexto();
    $edad = getEdad($date);


require $resultado;
}

?>