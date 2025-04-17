<?php

require_once('twig_carregar.php');

require('inc/banco.php');

$erro = $_GET['erro'] ?? null;

if($erro == 1){
    echo 'A confirmação de senha deve ser igual a nova senha';
} else if ($erro == 2){
    echo 'Senha atual errada';
}

echo $twig->render('alterar_senha.html');