<?php
require('verificar_login.php'); 

require_once('twig_carregar.php');

$usuario = $_SESSION['usuario'];

$nome = $usuario['login'];

$id = $usuario['id'];

echo $twig->render('index.html', [
    'id' => $id,
    'usuario' => $nome,
    'fruta' => 'Abacaxi',
]);
