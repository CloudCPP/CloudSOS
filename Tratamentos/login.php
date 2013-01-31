<?php 
include_once("../config.php");
use classes\Validar;
session_start();
$valida = new Validar;
try{
if($valida->LoginUsuario($_GET['login'],$_GET['senha'])){
	header("Location:../painel/user.php");
}}catch (Exception $e){
	$e->message;
}



