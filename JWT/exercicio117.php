<?php

require_once './vendor/autoload.php';

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
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
    )
];

foreach ($pessoas as $pessoa) {
    $configuration = Configuration::forSymmetricSigner(
        // You may use any HMAC variations (256, 384, and 512)
        new Sha256(),
        // replace the value below with a key of your own!
        InMemory::plainText('Ajhdkajsg665612AAA8]0')
        // You may also override the JOSE encoder/decoder if needed by providing extra arguments here
    );

    $time = new DateTimeImmutable();

    $token = $configuration->builder()
        ->issuedBy('http://localhost:8000/api/')
        ->permittedFor('http://localhost:8000/api/')
        ->identifiedBy('87d9a8s7d9', true)
        ->issuedAt($time)
        ->canOnlyBeUsedAfter($time->modify('+1 minute'))
        ->expiresAt($time->modify('+1 hour'))
        ->withClaim('uid', $pessoa->id)
        ->withClaim('name', $pessoa->nome)
        ->withClaim('email', $pessoa->email)
        ->withClaim('funcao', $pessoa->profissao)
        ->withClaim('escolaridade', $pessoa->escolaridade)
        ->getToken($configuration->signer(), $configuration->signingKey());

    $pessoa->setToken($token->toString());

    echo $pessoa->token;
    echo '<hr />';
}
