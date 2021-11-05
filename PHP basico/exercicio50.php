<?php

$path = 'exercicio49';
$files = [];

for ($i = 1; $i <= 150; $i++) {
    $pathFolder = "{$path}/{$i}";
    if (is_dir("{$path}/{$i}")) {
        $folder = scandir($pathFolder);
        if (empty($folder[2])) {
            rmdir($pathFolder);
            echo "Pasta deletada: {$i}";
            echo '<br />';
        } else {
            unset($folder[0], $folder[1]);
            foreach ($folder as $file) {
                $files[] = $file;
            }
        }
    }
}
var_dump($files);
