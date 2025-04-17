<?php 

require('inc/banco.php');

session_start();

$usuario = $_SESSION['usuario'];
$id = $usuario['id'];
$senha = $usuario['senha'];

$senha_antiga = $_POST['senha_antiga'] ?? null;
$nova_senha = $_POST['nova_senha'] ?? null;
$confirmar_senha = $_POST['confirmar_senha'] ?? null;

if ($nova_senha != $confirmar_senha){
    header('Location: alterar_senha.php?erro=1');
    die;
}

if (password_verify($senha_antiga , $senha)){

    $query = $pdo->prepare('UPDATE usuarios SET senha = :nova_senha WHERE id = :id');

    $query->bindValue(':nova_senha' , password_hash($nova_senha, PASSWORD_DEFAULT));
    $query->bindValue(':id' , $id);

    $query->execute();

    header('Location: index.php');

} else {

    header('Location: alterar_senha.php?erro=2');

}