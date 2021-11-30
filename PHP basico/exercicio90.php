<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'index.php');

class Log
{
    private static $log = NULL;
    private Arquivo $arquivo;

    public static function getLog()
    {
        if (self::$log == NULL) {
            return self::$log = new Log();
        }
        return self::$log;
    }

    public function definirArquivo(Arquivo $arquivo): void
    {
        $this->arquivo = $arquivo;
    }

    public function escreverLog(string $texto): void
    {
        $this->arquivo->escrever($texto);
    }

    public function buscarLog()
    {
    }

    public function exibirLog()
    {
        return $this->arquivo->ler();
    }
}

$log1 = Log::getLog();
$diretorio1 = new Diretorio('diretorio1', 'exercicio90');
$arquivo1 = new Arquivo($diretorio1, 'log-dataatualhoraatual.txt');
$log1->definirArquivo($arquivo1);
$log1->escreverLog(date('Ymdhis'));
echo $log1->exibirLog();
echo '<br />';

$log2 = Log::getLog();
$diretorio2 = new Diretorio('diretorio2', 'exercicio90');
$arquivo2 = new Arquivo($diretorio2, 'log-dataatualhoraatual.txt');
$log2->definirArquivo($arquivo2);
$log2->escreverLog(date('Ymdhis'));
echo $log2->exibirLog();
echo '<br />';

$log3 = Log::getLog();
$diretorio3 = new Diretorio('diretorio3', 'exercicio90');
$arquivo3 = new Arquivo($diretorio3, 'log-dataatualhoraatual.txt');
$log3->definirArquivo($arquivo3);
$log3->escreverLog(date('Ymdhis'));
echo $log3->exibirLog();
echo '<br />';

$log4 = Log::getLog();
$diretorio4 = new Diretorio('diretorio4', 'exercicio90');
$arquivo4 = new Arquivo($diretorio4, 'log-dataatualhoraatual.txt');
$log4->definirArquivo($arquivo4);
$log4->escreverLog(date('Ymdhis'));
echo $log4->exibirLog();
echo '<br />';

$log5 = Log::getLog();
$diretorio5 = new Diretorio('diretorio5', 'exercicio90');
$arquivo5 = new Arquivo($diretorio5, 'log-dataatualhoraatual.txt');
$log5->definirArquivo($arquivo5);
$log5->escreverLog(date('Ymdhis'));
echo $log5->exibirLog();
echo '<br />';
