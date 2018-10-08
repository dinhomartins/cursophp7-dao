<?php

class Usuarios {

	private $idusuario;
	private $login;
	private $senha;

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	public function getlogin(){
		return $this->login;
	}

	public function setlogin($value){
		$this->login = $value;
	}

	public function getsenha(){
		return $this->senha;
	}

	public function setsenha($value){
		$this->senha = $value;
	}

	public function loadByid($id){

		$sql = new sql();

		$result = $sql->select("SELECT * FROM usuarios WHERE idusuario = ")
	}

}
?>
