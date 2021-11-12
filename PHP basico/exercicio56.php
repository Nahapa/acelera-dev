<?php

$caminho = 'exercicio56';

if (!is_dir($caminho)) {
    mkdir($caminho);
}

$caminhoAlunos = "{$caminho}/alunos";
$caminhoProfessores = "{$caminho}/professores";

if (!is_dir($caminhoAlunos)) {
    mkdir($caminhoAlunos);
}

if (!is_dir($caminhoProfessores)) {
    mkdir($caminhoProfessores);
}

$alunos = scandir($caminhoAlunos);
$professores = scandir($caminhoProfessores);

unset($alunos[0], $alunos[1], $professores[0], $professores[1]);

try {
    if (empty($alunos) && empty($professores)) {
        throw new Exception();
    }
} catch (Exception $e) {
    $log = fopen("$caminho/log.txt", 'w+');
    fwrite($log, "Arquivo: {$e->getFile()}, Linha: {$e->getLine()}");
    fclose($log);
}
