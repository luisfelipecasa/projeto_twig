<?php

//compras.php
require_once('twig_carregar.php');
require('inc/banco.php');

//busca as compras no banco
$dados = $pdo->prepare('SELECT * FROM compras WHERE id = :id');

$dados->bindValue(":id" , $_GET['id']);

$comp = $dados->fetch(PDO::FETCH_ASSOC);

echo $twig->render('editar.html' , [
    'titulo' => 'compras',
    'item' => $comp
]);