<?php 

require_once('vendor/autoload.php');

//loader é quem carrega os arquivos html
$loader = new \Twig\Loader\FilesystemLoader('./templates');

// criar o objeto do twig
$twig = new \Twig\Environment($loader);