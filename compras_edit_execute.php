<?php

require('inc/banco.php');

$item = $_POST['item'] ?? null;
$id = $_POST['id'] ?? null;

if($item){
    //prepara a consulta
    $query = $pdo->prepare('UPDATE compras SET item = :item WHERE id = :id');

    //associa os valores dentro da consulta
    $query->bindValue(':item' , $item);
    $query->bindValue(':id' , $id);

    //executa a consulta
    $query->execute();
}

header('location:compras.php');