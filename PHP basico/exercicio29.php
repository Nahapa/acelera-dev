<?php

$paises = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes'), true);
var_export($paises);
