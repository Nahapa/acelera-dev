<?php

$caminho = 'exercicio45';
if (!is_dir($caminho)) {
    mkdir($caminho);
}

$nomes = [
    'Enrico',
    'Daniela',
    'Lucca',
    'Thomas',
    'Anderson',
    'Luciana',
    'Andre',
    'Kamilly',
    'Luiza',
    'Benjamin',
    'Carlos',
    'Sueli',
    'Benicio',
    'Erick',
    'Vitor'
];

foreach ($nomes as $nome) {
    if (!is_dir("{$caminho}/{$nome}")) {
        mkdir("{$caminho}/{$nome}");
    } else {
        echo "Já existe a pasta {$nome}";
        echo '<br />';
    }

    if (!is_file("{$caminho}/{$nome}/{$nome}.txt")) {
        $arquivo = fopen("{$caminho}/{$nome}/{$nome}.txt", 'w+');
        fwrite($arquivo, $nome);
        fclose($arquivo);
    }
}
