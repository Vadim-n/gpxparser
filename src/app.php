<?php


require_once 'vendor/autoload.php';

use Symfony\Component\Console\Application;

spl_autoload_register(function ($class) {
    include __DIR__ . '/Command/' . $class . '.php';
});

$application = new Application();

$application->add(new ReadGpxCommand());

$application->run();