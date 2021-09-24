<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */

require_once __DIR__ . "/vendor/autoload.php";

use App\Reflection\ReflectionInformation;
use App\Student;

// Création de ma classe personnalisée pour afficher les attributs, méthodes, constantes, ... d'une classe
$reflectionInformation = new ReflectionInformation(Student::class);

// On affiche les informations dans la console avec des couleurs
$reflectionInformation->displayInfo();