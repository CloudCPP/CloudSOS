<?php 
namespace classes;

class DataBase extends \mysqli{
	var $host = "127.0.0.1";
	var $user = "root";
	var $pass = "";
	var $db	  = "cloudsos";
	
	public function __construct(){
		if(parent::connect($this->host, $this->user, $this->pass, $this->db))
			return true;
	}
		public function Query($query){
		if (isset($query) && $query >0){
			$query = filter_var($query);
			$a = parent::query($query);
			$result = parent::use_result($a);
			return $result;
		}else{
			return ("Query Invalida");
		}
	}

}