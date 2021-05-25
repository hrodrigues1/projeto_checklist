<?php

include_once('DAOFactory.php');
include_once('PostgresUsuarioDAO.php');

class PostgresDAOfactory extends DAOFactory {

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "organizaAi";
    private $port = "5432";
    private $username = "postgres";
    private $password = "postgres";
    public $conn;
  
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
}
?>