<?php

require_once('twig_carregar.php');

require('inc/banco.php');

//busca as compras no banco
$dados = $pdo->query('SELECT * FROM compromissos');

$compromissos = $dados->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('compromissos.html' , [
    'titulo' => 'compromissos',
    'compromissos' => $compromissos,
]);