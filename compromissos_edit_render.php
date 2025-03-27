<?php

require_once('twig_carregar.php');
require('inc/banco.php');

$id = $_GET['id'];

//busca as compras no banco
$dados = $pdo->prepare('SELECT * FROM compromissos WHERE id = :id');
$dados->bindValue(":id" , $id);
$dados->execute();

$compromisso = $dados->fetch(PDO::FETCH_ASSOC);

echo $twig->render('compromissos_editar.html' , [
    'titulo' => 'editar compromisso',
    'compromisso' => $compromisso
]);