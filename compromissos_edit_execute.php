<?php

require('inc/banco.php');

$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'] ?? null;
$data = $_POST['data'] ?? null;

if($titulo){
    //prepara a consulta
    $query = $pdo->prepare('UPDATE compromissos SET titulo = :titulo, data = :data WHERE id = :id');

    $query->bindValue(':id' , $id);
    $query->bindValue(':titulo' , $titulo);
    $query->bindValue(':data' , $data);

    $query->execute();
}

header('location:compromissos.php');