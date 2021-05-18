<?php

include_once("model/Usuario");

class Notificacao()
{
    private $id_notificacao;
    private $dados_usuario;
    private $mensagem;

    public function __construct($id_notificacao, $dados_usuario, $mensagem)
    {
        $this->$id_notificacao = $id_notificacao;
        $this->$dados_usuario = $dados_usuario;
        $this->mensagem = $mensagem;
    }

    /**
     * Get the value of id_notificacao
     */ 
    public function getId_notificacao()
    {
        return $this->id_notificacao;
    }

    /**
     * Set the value of id_notificacao
     *
     * @return  self
     */ 
    public function setId_notificacao($id_notificacao)
    {
        $this->id_notificacao = $id_notificacao;

        return $this;
    }

    /**
     * Get the value of dados_usuario
     */ 
    public function getDados_usuario()
    {
        return $this->dados_usuario;
    }

    /**
     * Set the value of dados_usuario
     *
     * @return  self
     */ 
    public function setDados_usuario($dados_usuario)
    {
        $this->dados_usuario = $dados_usuario;

        return $this;
    }

    /**
     * Get the value of mensagem
     */ 
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * Set the value of mensagem
     *
     * @return  self
     */ 
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

        return $this;
    }
}

?>