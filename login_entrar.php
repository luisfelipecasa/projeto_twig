<?php

require('inc/banco.php');

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if ($login && $senha) {
    $query = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login');
    $query->execute([':login' => $login]);

    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        session_start();
        $_SESSION['usuario'] = $usuario;

        header('Location: index.php');
    } else {
        header('Location: login.php?erro=1');
    }
}
