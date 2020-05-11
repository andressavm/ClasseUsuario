<?php

$nome= $_POST["nome"]; 
$email=$_POST["email"]; 
$login=$_POST["login"]; 
$senha=$_POST["senha"];




/*$nome="Andressa"; 
$email="miosso.andressa@gmail.com"; 
$login="andressa"; 
$senha="18";*/


include("ClasseUsuario.php");
$usuario = new Usuario();

$usuario->addusuario($nome, $email, $login, $senha);
print_r($usuario);

?>