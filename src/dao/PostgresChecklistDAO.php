<?php

include_once('ChecklistDAO.php');
include_once('PostgresDAO.php');

class PostgresChecklistDAO extends PostgresDAO implements ChecklistDAO
{
    public function busca_checklists_usuario_logado($id_usuario) {

        $checklists = array();

        $query = "select * from checklist where id_usuario = ? and status = 'Em aberto'";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $id_usuario);
        $stmt->execute();
     
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $checklists[] = new Checklist($row['id_checklist'], $row['nome_checklist'], $row['status'], $row['percent'], $row['id_usuario']);
        }
        return $checklists;
    }
}

?>