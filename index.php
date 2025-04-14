<?php
require('verificar_login.php'); 

require_once('twig_carregar.php');

echo $twig->render('index.html', [
    'fruta' => 'Abacaxi',
]);
