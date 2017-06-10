<?php
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!, {{ saludo }}',
));
$twig = new Twig_Environment($loader);

$params = [
  'name' => 'Rafael',
  'saludo' => 'bienvenido a la web'
]

echo $twig->render('index', $params);
