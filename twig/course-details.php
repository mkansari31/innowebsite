<?php

require_once '../vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('../view');

$twig = new \Twig\Environment($loader);

$template = $twig->load('course-details.html.twig');

echo $template->render();

?>