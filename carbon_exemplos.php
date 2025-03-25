<?php 
# carbon_exemplos.php

require_once('vendor/autoload.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

// agora
echo Carbon::now() . '<br>';

//adiciona um dia
echo Carbon::now()->addDay() . '<br>';

//subtrair uma semana
echo Carbon::now()->subWeek() . '<br>';

//adiciona 4 anos
echo "Próximas Olimpíadas: " . Carbon::createFromDate(2024)->addYears(4)->year . '<br>';

//idade de alguém

echo "Sua idade é: " . Carbon::createFromDate(2007, 5, 2)->age . '<br>';

//final de semana?
if(Carbon::now()->addDay(4)->isWeekend()){
    echo 'Festa!<br>';
} else {
    echo 'Aula<br>';
}

//Calcular diferença entre datas
$nascimento = Carbon::createFromDate(2007, 05, 02);
echo 'diferença de data: ' . Carbon::now()->diff($nascimento);