<?php

require_once __DIR__ . '/vendor/autoload.php';

use JWT\Pessoa;

$pessoas = [
    new Pessoa(
        1,
        'Cauê Filipe Pinto',
        'cauefilipepinto..cauefilipepinto@radicigroup.com',
        'Desenvolvedor',
        'Graduado'
    ),
    new Pessoa(
        2,
        'Stella Bárbara Fátima Carvalho',
        'stellabarbarafatimacarvalho-99@inbox.com',
        'Medico',
        'Mestrado'
    ),
    new Pessoa(
        3,
        'Gabriela Lúcia Assis',
        'gabrielaluciaassis..gabrielaluciaassis@formigueiromaquinas.com.br',
        'Faxineira',
        'Medio'
    ),
    new Pessoa(
        4,
        'Ana Isadora Ferreira',
        'anaisadoraferreira_@ecotransambiental.com.br',
        'Zelador',
        'Medio'
    ),
    new Pessoa(
        5,
        'Isabel Heloise Caroline da Mota',
        'isabelheloisecarolinedamota_@ortovip.com.br',
        'Segurança',
        'Medio'
    ),
    new Pessoa(
        6,
        'Tiago Renan Novaes',
        'tiagorenannovaes_@sofisticattomoveis.com.br',
        'Manobrista',
        'Medio'
    ),
    new Pessoa(
        7,
        'Vanessa Luzia Mariane Teixeira',
        'vanessaluziamarianeteixeira..vanessaluziamarianeteixeira@robertacorrea.com',
        'Secretaria',
        'Tecnico'
    ),
    new Pessoa(
        8,
        'Nair Rita Porto',
        'nairritaporto..nairritaporto@kimmay.com.br',
        'Cozinheiro',
        'Medio'
    ),
    new Pessoa(
        9,
        'Vicente José da Luz',
        'vicentejosedaluz-84@impactatp.com.br',
        'Garçom',
        'Medio'
    ),
    new Pessoa(
        10,
        'Sophia Nina Eduarda Peixoto',
        'sophianinaeduardapeixoto__sophianinaeduardapeixoto@knowconsulting.com.br',
        'Pedreiro',
        'Medio'
    ),
    new Pessoa(
        11,
        'Cristiane Lara Carla Moura',
        'cristianelaracarlamoura..cristianelaracarlamoura@amure.com.br',
        'Encanador',
        'Tecnico'
    ),
    new Pessoa(
        12,
        'Manuel Benjamin Vinicius Costa',
        'manuelbenjaminviniciuscosta-92@alphacandies.com.br',
        'Padeiro',
        'Medio'
    ),
    new Pessoa(
        13,
        'Felipe Diogo Oliveira',
        'felipediogooliveira..felipediogooliveira@4now.com.br',
        'Garimpador',
        'Medio'
    ),
    new Pessoa(
        14,
        'Caio Mateus Vinicius da Conceição',
        'caiomateusviniciusdaconceicao_@easytechconsultoria.com.br',
        'Joalheiro',
        'Tecnico'
    ),
    new Pessoa(
        15,
        'Marli Brenda Esther Moura',
        'mmarlibrendaesthermoura@db9.com.br',
        'Adestrador',
        'Medio'
    )
];

foreach ($pessoas as $pessoa) {
    $key = 'Ajhdkajsg665612AAA8]0';

    $header = [
        'typ' => 'JWT',
        'alg' => 'HS256'
    ];

    $payload = (array) $pessoa;

    //JSON
    $header = json_encode($header);
    $payload = json_encode($payload);

    //Base 64
    $header = base64_encode($header);
    $payload = base64_encode($payload);

    //Sign
    $sign = hash_hmac('sha256', $header . "." . $payload, $key, true);
    $sign = base64_encode($sign);

    //Token
    $token = $header . '.' . $payload . '.' . $sign;

    $pessoa->setToken($token);

    var_export($pessoa);
    echo '<hr />';
}
