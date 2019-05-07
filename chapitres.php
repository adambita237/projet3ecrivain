<?php

require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/views');
$twig = new \Twig\Environment($loader, [
'cache' => false, // __DIR__ .'/var'
]);

echo $twig->render('chapitres.html.twig');

?>