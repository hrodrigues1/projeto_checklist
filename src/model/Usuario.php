<?php

class Usuario()
{
    private $id_usuario;
    private $nome_usuario;
    private $idade;
    private $login;
    private $senha;
    private $sexo;
    private $profissao;
    private $cpf;
    private $cidade;
    private $email;

    public function __construct($id_usuario, $nome_usuario, $idade, $login, $senha, $sexo, $profissao, $cpf, $cidade, $email)
    {
        $this->id_usuario = $id_usuario;
        $this->nome_usuario = $nome_usuario;
        $this->idade = $idade;
        $this->login = $login;
        $this->senha = $senha;
        $this->sexo = $sexo;
        $this->profissao = $profissao;
        $this->cpf = $cpf;
        $this->cidade = $cidade;
        $this->email = $email;
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

    /**
     * Get the value of nome_usuario
     */ 
    public function getNome_usuario()
    {
        return $this->nome_usuario;
    }

    /**
     * Set the value of nome_usuario
     *
     * @return  self
     */ 
    public function setNome_usuario($nome_usuario)
    {
        $this->nome_usuario = $nome_usuario;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

        /**
         * Get the value of login
         */ 
        public function getLogin()
        {
                return $this->login;
        }

        /**
         * Set the value of login
         *
         * @return  self
         */ 
        public function setLogin($login)
        {
                $this->login = $login;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of sexo
         */ 
        public function getSexo()
        {
                return $this->sexo;
        }

        /**
         * Set the value of sexo
         *
         * @return  self
         */ 
        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }

        /**
         * Get the value of profissao
         */ 
        public function getProfissao()
        {
                return $this->profissao;
        }

        /**
         * Set the value of profissao
         *
         * @return  self
         */ 
        public function setProfissao($profissao)
        {
                $this->profissao = $profissao;

                return $this;
        }

        /**
         * Get the value of cpf
         */ 
        public function getCpf()
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         *
         * @return  self
         */ 
        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        /**
         * Get the value of cidade
         */ 
        public function getCidade()
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         *
         * @return  self
         */ 
        public function setCidade($cidade)
        {
                $this->cidade = $cidade;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }
}





?>