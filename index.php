<?php 

require_once("config.php");

$sql = new sql();

$usuarios = $sql->select(" SELECT * FROM cad_aluno");

echo json_encode($usuarios);

 ?>