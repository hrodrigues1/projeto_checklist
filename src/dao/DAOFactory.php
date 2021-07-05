<?php
abstract class DAOFactory {

    protected abstract function getConnection();

    public abstract function getUsuarioDAO();

    public abstract function getChecklistDAO();
}
?>