<?php
//compras_adc.php

require('inc/banco.php');

$item = $_POST['item'] ?? null;

if($item){
    //prepara a consulta
    $query = $pdo->prepare('UPDATE item FROM compras SET ');

    //associa os valores dentro da consulta
    $query->bindValue(':it' , $item);

    //executa a consulta
    $query->execute();
}

header('location:compras.php');