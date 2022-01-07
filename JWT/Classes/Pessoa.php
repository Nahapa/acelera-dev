<?php

namespace JWT;

class Pessoa
{
    public string $token;

    public function __construct(
        public int $id,
        public string $nome,
        public string $email,
        public string $profissao,
        public string $escolaridade
    ) {
    }

    public function setToken(string $token)
    {
        $this->token = $token;
    }

    public function __toString()
    {
        return json_encode([
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'profissao' => $this->profissao,
            'escolaridade' => $this->escolaridade,
            'token' => $this->token
        ]);
    }
}
