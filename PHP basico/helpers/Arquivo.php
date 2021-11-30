<?php
// ABSTRAIR A CLASSE FUTURAMENTE
class Arquivo
{
    private Diretorio $diretorio;
    private string $caminho;
    private $arquivo;

    public function __construct(Diretorio $diretorio, string $arquivo)
    {
        $this->diretorio = $diretorio;

        $this->caminho = $diretorio->getCaminho() . DIRECTORY_SEPARATOR . $arquivo;

        if (!is_file($this->caminho)) {
            $this->arquivo = fopen($this->caminho, 'w+');
        } else {
            $this->arquivo = fopen($this->caminho, 'r+');
        }
    }

    public function escrever(string $text): void
    {
        fwrite($this->arquivo, $text);
    }

    public function ler(): string
    {
        return file_get_contents($this->caminho);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}
