<?php

class Tarefa()
{
    private $id_tarefa;
    private $descricao;
    private $status;
    private $data_aberto;
    private $data_conclusao;
    private $list;

    public function __construct($id_tarefa, $descricao, $status, $data_aberto, $data_conclusao, $list)
    {
        $this->id_tarefa = $id_tarefa;
        $this->descricao = $descricao;
        $this->status = $status;
        $this->data_aberto = $data_aberto;
        $this->data_conclusao = $data_conclusao;
        $this->list = $list;
    }


    /**
     * Get the value of id_tarefa
     */ 
    public function getId_tarefa()
    {
        return $this->id_tarefa;
    }

    /**
     * Set the value of id_tarefa
     *
     * @return  self
     */ 
    public function setId_tarefa($id_tarefa)
    {
        $this->id_tarefa = $id_tarefa;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

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
     * Get the value of data_aberto
     */ 
    public function getData_aberto()
    {
        return $this->data_aberto;
    }

    /**
     * Set the value of data_aberto
     *
     * @return  self
     */ 
    public function setData_aberto($data_aberto)
    {
        $this->data_aberto = $data_aberto;

        return $this;
    }

    /**
     * Get the value of data_conclusao
     */ 
    public function getData_conclusao()
    {
        return $this->data_conclusao;
    }

    /**
     * Set the value of data_conclusao
     *
     * @return  self
     */ 
    public function setData_conclusao($data_conclusao)
    {
        $this->data_conclusao = $data_conclusao;

        return $this;
    }

    /**
     * Get the value of list
     */ 
    public function getList()
    {
        return $this->list;
    }

    /**
     * Set the value of list
     *
     * @return  self
     */ 
    public function setList($list)
    {
        $this->list = $list;

        return $this;
    }
}
?>