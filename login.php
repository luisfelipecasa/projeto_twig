<?php

$erro = $_GET['erro'] ?? null;

if($erro == 1){
    echo 'login ou senha errados';
}


require_once('twig_carregar.php');

require('inc/banco.php');

echo $twig->render('login.html');