<?php
require('inc/banco.php');

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if ($login && $senha) {
    $query = $pdo->prepare('INSERT INTO usuarios (login, senha) VALUES (:login, :senha)');
    $query->execute([
        ':login' => $login,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    ]);

    $query = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login');
    $query->execute([':login' => $login]);
    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    session_start();
    $_SESSION['usuario'] = $usuario;

    header('Location: index.php');
}
