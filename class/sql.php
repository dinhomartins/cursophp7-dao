<?php 

class Sql extends PDO {

	private $conn;

	public function __construct(){

		//Acessa a variavel  atribiu uma nova instancia e defina os dados de acesso ao servidor mysql
		$this->conn = new PDO("mysql:host=localhost;dbname=sgp5", "root", "");
	}

	public function setParams($statment, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$stmt->setParam($key, $value);
		}
	}


	public function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}


	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}







}

?>