<?php 
session_start();
require 'config/routes.php'; 
require 'functions.php';
 
if(isset($_POST['Submit'])){
    
    $logins = array(
        'alex' => '123456',
        'gerardo' => 'gerardo123',
        'admin' => 'admin');
    
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    
   		
    if (isset($logins[$Username]) && $logins[$Username] == $Password){
        $_SESSION['UserData']['Username']=$logins[$Username];
        header("location:index.php");
        exit;
    } else {
        
        $msg="<span style='color:red'>Valores Invalidos</span>";
    }
}

require 'plantillas/login.view.php';

?>