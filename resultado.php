<?php 
session_start();

if(!isset($_SESSION['UserData']['Username'])){
        header("location:index.php");
        exit;
}

require 'config/routes.php';
require 'class/signos.class.php';
require 'functions.php';
require 'data/signos_array.php';

if (!isset($_COOKIE["idiomaUsuario"])){
    $resultado =  'plantillas/language_es/resultado.view.php';
    $info = $signos_es;
} else {
    $setIdioma = verifyLang($_COOKIE['idiomaUsuario']);
    $resultado = $setIdioma['resultado'];
    $info = eval('return $'. $setIdioma['signo'] . ';');
}

if(isset($_REQUEST['OpcFondo']))
{
    $colorBG = traducirColor($_REQUEST['OpcFondo']);
    $_SESSION['colorfondo'] = $colorBG;
}else{
    $style = 0;
}

if (!isset($_POST['name'], $_POST['date'])) {
    header('Location:' . RUTA . 'plantillas/home.view.php');
}else{
    $name = $_POST['name'];
    $date = $_POST['date'];

    $zodiac = new SignosZodiacales($date, $info);
    $nombre = $zodiac->getSignoZodiacal();
    $simbolo = $zodiac->getSimbolo();
    $texto = $zodiac->getSignoTexto();
    $edad = getEdad($date);


require $resultado;
}
