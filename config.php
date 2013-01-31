<?php
define("HOME", getEnv("DOCUMENT_ROOT")."/CloudSOS/");
 
spl_autoload_register(function ($class) {
 
 $nome = str_replace("\\", "/" , $class . '.class.php');
 
 if( file_exists( HOME . $nome ) ){
 include_once( HOME . $nome );
 }
 
});
?>