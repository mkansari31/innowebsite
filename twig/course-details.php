<?php

require_once '../vendor/autoload.php';

$function = new \Twig\TwigFunction('getUrl', function() {
    return basename($_SERVER['PHP_SELF']);
});

$loader = new \Twig\Loader\FilesystemLoader('../view');

$twig = new \Twig\Environment($loader);

$twig->addFunction($function);

$template = $twig->load('course-details.html.twig');

echo $template->render();

?>