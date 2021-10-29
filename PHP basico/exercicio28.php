<?php

$paises = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/distritos'));
var_export($paises);
