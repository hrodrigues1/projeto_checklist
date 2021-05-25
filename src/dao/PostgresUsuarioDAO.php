<?php

include_once('UsuarioDAO.php');
include_once('PostgresDAO.php');

class PostgresUsuarioDAO extends PostgresDAO implements UsuarioDAO
{
    public function buscaPorLogin($login) {

        $usuario = null;

        $query = "SELECT id_usuario, nome_usuario, idade, login, senha, sexo, profissao, cpf, cidade " .
                 "FROM usuario where login = ? " .
                 "LIMIT 1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $login);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $usuario = new Usuario($row['id_usuario'], $row['nome_usuario'], $row['idade'], 
                                   $row['login'], $row['senha'], $row['sexo'],
                                   $row['profissao'], $row['cpf'], $row['cidade']);
        } 
     
        return $usuario;
    }
}
?>