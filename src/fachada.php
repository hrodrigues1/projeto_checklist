<?php

include_once('model/Usuario.php');
include_once('dao/UsuarioDAO.php');
include_once('dao/DAOFactory.php');
include_once('dao/PostgresDAOFactory.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$factory = new PostgresDAOfactory();

?>