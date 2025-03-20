<?php
//compras_exc.php

require('inc/banco.php');

$id = $_GET['id'] ?? null;

print_r($id);

if($id){
    //prepara a consulta
    $query = $pdo->prepare('DELETE FROM compras WHERE id = :id');
    //executa a consulta
    $query->execute([":id" => $id]);
}

header('location:compras.php');