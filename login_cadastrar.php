<?php

require('inc/banco.php');

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if($login && $senha){
       //prepara a consulta
       $query = $pdo->prepare('INSERT INTO usuarios (login, senha) VALUES (:login, :senha)');

       //executa a consulta
       $query->execute([
           ':login' => $login,
           ':senha' => password_hash($senha, PASSWORD_DEFAULT)
       ]);

       header('location:index.php');
}