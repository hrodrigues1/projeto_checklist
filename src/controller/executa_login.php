<?php 
// Métodos de acesso ao banco de dados 
require "../fachada.php"; 
 
// Inicia sessão 
session_start();

// Recupera o login 
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senha"]) ? addslashes(trim($_POST["senha"])) : FALSE; 

 
// Usuário não forneceu a senha ou o login 
if(!$login || !$senha) 
{ 
    echo "Você deve digitar sua senha e login!<br>"; 
    echo "<a href='login.php'>Efetuar Login</a>";
    exit; 
}  

$dao = $factory->getUsuarioDAO();
$usuario = $dao->buscaPorLogin($login);

$problemas = FALSE;
if($usuario) {
    // Agora verifica a senha 
    if(!strcmp($senha, $usuario->getSenha())) 
    { 
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
        $_SESSION["id_usuario"]= $usuario->getId_usuario(); 
        $_SESSION["nome_usuario"] = stripslashes($usuario->getNome_usuario()); 
        //$_SESSION["permissao"]= $dados["postar"]; 
        header("Location: ../views/home.php"); 
        exit; 
    } else {
        $problemas = TRUE; 
    }
} else {
    $problemas = TRUE; 
}

if($problemas==TRUE) {
    header("Location: index.php"); 
    exit; 
}
?>