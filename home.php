<?php
session_start();
 
require 'config/routes.php';
require 'functions.php';



if(!isset($_SESSION['UserData']['Username']))
{
    header("location:index.php");
    exit;
}
if(!isset($_SESSION['colorfondo']))
{
    $_SESSION['colorfondo'] = 0;
}



if  (empty($_COOKIE["idiomaUsuario"]))
{
    $pagina = "plantillas/language_es/index.view.php";
}
else 
{
    $index = verifyLang($_COOKIE["idiomaUsuario"]);
    $pagina = $index['pagina'];
}

require $pagina;

?>