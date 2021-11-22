<?php

class ClienteRepository
{
}

class ClienteService
{
    public function adicionarCliente(Cliente $cliente): string
    {
        if (!$cliente->is_valid()) {
            echo 'Dados inválidos';
        }

        $repo = new ClienteRepository();

        if ($repo->adicionarCliente($cliente)) {
            echo 'Cliente cadastrado com sucesso';
        } else {
            echo 'Error';
        }
    }
}
