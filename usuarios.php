<?php

class Usuarios {

	private $id;
	private $usuario;
	private $senha;

	public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}

	public function getusuario(){
		return $this->usuario;
	}

	public function setusuario($value){
		$this->usuario = $value;
	}

	public function getsenha(){
		return $this->senha;
	}

	public function setsenha($value){
		$this->senha = $value;
	}

	public function loadByid($id){

		$sql = new sql();

		$result = $sql->select("SELECT * FROM usuarios WHERE id = :ID ", array(
			":ID"=>$id
			));
		if(count($result) > 0 ){

			$row = $result[0];

			$this->setId($row['id']);
			$this->setusuario($row['usuario']);
			$this->setsenha(new DateTime($row['senha']));

		}
	}

	public function __toString(){

		return json_encode(array(
				"id"=>$this->getId(),
				"usuario"=>$this->getusuario(),
				"senha"=>$this->getsenha()
		));	
	}

}
?>
