<?php

interface UsuarioDAO
{
    public function buscaPorLogin($login);

    public function insere_usuario($usuario);
}
?>