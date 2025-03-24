<?php
//compras_adc.php

require('inc/banco.php');

$item = $_POST['item'] ?? null;

if($item){
    //prepara a consulta
    $query = $pdo->prepare('INSERT INTO compras (item) VALUES (:item)');

    //associa os valores dentro da consulta
    $query->bindValue(':item' , $item);

    //executa a consulta
    $query->execute();
}

header('location:compras.php');