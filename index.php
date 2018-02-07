<?php

/*require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);*/

require_once("config.php");

$root = new Usuario();

$root->loadById(3);

echo $root;

?>