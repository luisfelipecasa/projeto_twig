<?php

require('inc/banco.php');

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if($login && $senha){
       $query = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login AND senha = :senha');

       $query->execute([
           ':login' => $login,
           ':senha' => password_verify($senha, PASSWORD_DEFAULT)
       ]);

       $usuario = $query->fetch(PDO::FETCH_ASSOC);
       if ($usuario){
        session_start();
        $_SESSION['usuario'] = $usuario;
       }

       header('location:index.php');
}