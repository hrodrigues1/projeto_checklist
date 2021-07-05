<?php

class Checklist
{
    private $id_checklist;
    private $nome_checklist;
    private $status;
    private $percent;
    private $id_usuario;

    public function __construct($id_checklist, $nome_checklist, $status, $percent, $id_usuario)
    {   
        $this->id_checklist = $id_checklist;
        $this->nome_checklist = $nome_checklist;
        $this->status = $status;
        $this->percent = $percent;
        $this->id_usuario = $id_usuario;
    }

    /**
     * Get the value of id_checklist
     */ 
    public function getId_checklist()
    {
        return $this->id_checklist;
    }

    /**
     * Set the value of id_checklist
     *
     * @return  self
     */ 
    public function setId_checklist($id_checklist)
    {
        $this->id_checklist = $id_checklist;

        return $this;
    }

    /**
     * Get the value of nome_checklist
     */ 
    public function getNome_checklist()
    {
        return $this->nome_checklist;
    }

    /**
     * Set the value of nome_checklist
     *
     * @return  self
     */ 
    public function setNome_checklist($nome_checklist)
    {
        $this->nome_checklist = $nome_checklist;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of percent
     */ 
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set the value of percent
     *
     * @return  self
     */ 
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }


    /**
     * Get the value of id_usuario
     */ 
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */ 
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }
}
?>