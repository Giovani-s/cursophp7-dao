<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);*/

//carrega um usuário    
//require_once("config.php");
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);


//carrega uma lista de usuarios usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$");
echo $usuario;

?>