<?php

include_once('DAOFactory.php');
include_once('PostgresUsuarioDAO.php');
include_once('PostgresChecklistDAO.php');


class PostgresDAOfactory extends DAOFactory {

     //Dados conexao Douglas
     private $host = "localhost";
     private $db_name = "Organizai";
     private $port = "5432";
     private $username = "postgres";
     private $password = "postgres";
     public $conn;

    // Dados conexao Rodrigo
    //private $host = "localhost";
    //private $db_name = "organizaAi";
    //private $port = "5432";
    //private $username = "postgres";
    //private $password = "masterkey";
    //public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
    
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function getUsuarioDAO() {

        return new PostgresUsuarioDAO($this->getConnection());

    }

    public function getChecklistDAO() {

        return new PostgresChecklistDAO($this->getConnection());

    }
}
?>