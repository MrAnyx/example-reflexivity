<?php

// On import l'autoloader de composer
require_once __DIR__ . "/vendor/autoload.php";

use App\Exception\TestException;
use App\Test\TestHandler;

// On récupère la liste des classes que l'on a enregistrées
$registeredClasses = require(__DIR__ . "/bootstrap.php");

try {
    // Pour chaque classe enregistrées
    foreach ($registeredClasses as $class => $params) {
        // On crée une reflection de la classe
        $reflection = new ReflectionClass($class);

        // Depuis cette reflection, on crée une nouvelle instance de la classe avec les paramètres renseignés
        $instance = $reflection->newInstanceArgs($params);

        // On crée une instance de la classe TestHandler
        $handler = new TestHandler($instance);

        // On parcourt toutes les réflections des méthodes de la classe
        foreach ($reflection->getMethods() as $method) {

            try {
                $handler->test($method);
            } catch (TestException $e) {
                echo $e->getMessage();
            }
        }
    }
    die();
} catch (ReflectionException $e) {
    echo $e->getMessage();
}
