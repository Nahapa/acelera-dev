<?php

$path = 'exercicio49';

if (!is_dir($path)) {
    mkdir($path);
}

for ($i = 1; $i <= 150; $i++) {
    if (!is_dir("{$path}/{$i}")) {
        echo "Diretorio criado: {$i}";
        echo '<br />';
        echo '<br />';
        mkdir("{$path}/{$i}");
    }

    if ($i % 2 != 0) {
        $data = date('Y-m-d-H-i-s');
        $pathArquivo = "{$path}/{$i}/log-{$data}.txt";
        $arquivo = fopen($pathArquivo, 'w+');
        fclose($arquivo);
        echo "Arquivo criado com sucesso: {$pathArquivo}";
        echo '<br />';
        echo 'Filesize: ';
        echo filesize($pathArquivo);
        echo '<br />';
        echo 'Filectime: ';
        echo date('Y-m-d H:i:s', Filectime($pathArquivo));
        echo '<br />';
        echo 'Pathinfo: ';
        print_r(pathinfo($pathArquivo));
        echo '<br />';
        echo '<br />';
    }
}
