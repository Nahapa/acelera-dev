<?php

interface MeioDeComunicacao
{
    public function enviar($mensagem): void;
}

class Email implements MeioDeComunicacao
{
    public function enviar($mensagem): void
    {
        // lógica
    }
}

class Notificacao
{
    public function __construct(MeioDeComunicacao $meioDeComunicacao)
    {
        $this->mensagem = $meioDeComunicacao;
    }

    public function enviar($mensagem)
    {
        $this->mensagem->enviar($mensagem);
    }
}
