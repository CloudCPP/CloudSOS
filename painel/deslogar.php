<?php 
include_once("../config.php");
use classes\Validar;
$valida = new Validar;
$valida->Deslogar();
header("Location:../index.php");
