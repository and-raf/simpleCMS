<?php
require __DIR__ . '/../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../template');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../cache',
));

?>