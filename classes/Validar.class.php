<?php 
/*
 * 
 * M�todos de valida��o de formularios
 * @author CloudCPP
 * @version 1.0
 */
namespace classes;

use classes\DataBase;

class Validar{
	// fun��o que efetua a valida��o do usuario no painel
	public function LoginUsuario($login,$senha) {

		$o = new DataBase();
		if($o->real_query("SELECT * FROM usuarios WHERE login = '{$login}' AND senha = '{$senha}'"))
		{
		$result = $o->use_result()->fetch_assoc();
		return $_SESSION['usuario'] = $result;
		}
		else{
			 throw new Exception("N�o foi possivel efetuar o login, verifique o usuario e a senha");
		}
		
	}
	public function Deslogar(){
		session_start();
		mysqli_close();
		$_SESSION = array();
		session_destroy();
		
	}
}