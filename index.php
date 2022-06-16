<?php 
require 'config/routes.php';
require 'functions.php';

session_start(); 

if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
}else{
    header("location:home.php");
}



