<?php

//compras.php
require_once('twig_carregar.php');
require('inc/banco.php');

$id = $_GET['id'];

//busca as compras no banco
$dados = $pdo->prepare('SELECT * FROM compras WHERE id = :id');
$dados->bindValue(":id" , $id);
$dados->execute();

$item = $dados->fetch(PDO::FETCH_ASSOC);

echo $twig->render('editar.html' , [
    'titulo' => 'editar',
    'item' => $item
]);