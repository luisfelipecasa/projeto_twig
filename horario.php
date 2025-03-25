<?php
# horario.php

require('twig_carregar.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

$dataAtual = Carbon::now()->format('d/m/Y');
$dataAmanha = Carbon::now()->addDay()->format('d/m/Y');

echo $twig->render('horario.html' , [
    'titulo' => 'horario',
    'atual' => $dataAtual,
    'amanha' => $dataAmanha
]);