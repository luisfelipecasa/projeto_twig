<?php

#inc/banco.php 
//lembrete: nao se deve salvar senhas diretamente no arquivo (de maneira como estamos fazendo aqui)

$pdo = new PDO('mysql:host=localhost;dbname=3info', 'root', '');