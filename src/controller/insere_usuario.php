<?php

include_once "../fachada.php";

$nome = $_POST["nome"];
$profissao = $_POST["profissao"];
$cpf = $_POST["cpf"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$usuario = new Usuario(null, $nome, $email, $senha, $profissao, $cpf, $cidade, $estado);

$dao = $factory->getUsuarioDAO();

$retorno = $dao->insere_usuario($usuario);

if($retorno)
{
    header("Location: ../views/login.php");
    exit;
}
else
{
    header("Location: ../views/newUser.php");
}

?>