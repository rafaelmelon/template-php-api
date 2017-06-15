<?php
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment($loader, []);

$userInfo = [
  'name' => 'Rafa',
];

$userTable = [
  (object) ['movement' => 'Transferencia "ING"', 'quantity' => '150', 'date' => '11/01/2017'],
  (object) ['movement' => 'Ingreso nómina', 'quantity' => '1200', 'date' => '15/02/2017'],
  (object) ['movement' => 'Restaurante "Hatori Hanzo"', 'quantity' => '55', 'date' => '22/02/2017'],
  (object) ['movement' => 'Zapatos "Zara"', 'quantity' => '43', 'date' => '06/12/2016']
];

// echo $twig->render('index.twig', compact('user'));
echo $twig->render('index.twig', compact('userInfo','userTable'));
