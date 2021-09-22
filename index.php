<?php

// On import l'autoloader de composer
require_once __DIR__ . "/vendor/autoload.php";

// On récupère la liste des classes que l'on a enregistrées
$registeredClasses = require(__DIR__ . "/bootstrap.php");

try {
    // Pour chaque classe enregistrées
    foreach($registeredClasses as $class => $params) {
        // On crée une reflection de la classe
        $reflection = new ReflectionClass($class);

        // Depuis cette reflection, on crée une nouvelle instance de la classe avec les paramètres renseignés
        $instance = $reflection->newInstanceArgs($params);

        // On debug le résultat
        dump($instance);
    }
    die();
} catch (ReflectionException $e) {
    echo $e->getMessage();
}
