<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM usuarios");

//echo json_encode($usuarios);

$root = new usuario();

$root->loadByid(1);

echo $root;


 ?>