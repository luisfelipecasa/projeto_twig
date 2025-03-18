<?php

//compras.php

require_once('twig_carregar.php');

require('inc/banco.php');

//busca as compras no banco
$dados = $pdo->query('SELECT * FROM compras');

$comp = $dados->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('compras.html' , [
    'titulo' => 'compras',
    'compras' => $comp,
]);