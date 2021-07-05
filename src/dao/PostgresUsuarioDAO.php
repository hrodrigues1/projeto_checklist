<?php

include_once('UsuarioDAO.php');
include_once('PostgresDAO.php');

class PostgresUsuarioDAO extends PostgresDAO implements UsuarioDAO
{
    public function buscaPorLogin($login) {

        $usuario = null;

        $query = "SELECT id_usuario, nome_usuario, login, senha, profissao, cpf, cidade, estado " .
                 "FROM usuario where login = ? ";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $login);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $usuario = new Usuario($row['id_usuario'], $row['nome_usuario'], 
                                   $row['login'], $row['senha'], $row['sexo'],
                                   $row['profissao'], $row['cpf'], $row['cidade'], $row['estado']);
        } 
        return $usuario;
    }

    public function insere_usuario($usuario) 
    {

        $query = "INSERT INTO USUARIO " .
        "(nome_usuario, login, senha, " .
        "profissao, cpf, " .
        "cidade, estado) " .   
        "VALUES(:nome_usuario, :login, :senha, " .
        ":profissao, :cpf, " .
        ":cidade, :estado)";

        $stmt = $this->conn->prepare($query);

        // bind values 
        $stmt->bindValue(":nome_usuario", $usuario->getNome_usuario());
        $stmt->bindValue(":login", $usuario->getLogin());
        $stmt->bindValue(":senha", md5($usuario->getSenha()));
        $stmt->bindValue(":profissao", $usuario->getProfissao());
        $stmt->bindValue(":cpf", $usuario->getCpf());
        $stmt->bindValue(":cidade", $usuario->getCidade());
        $stmt->bindValue(":estado", $usuario->getEstado());

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>