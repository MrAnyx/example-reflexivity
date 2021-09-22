<?php

namespace App\Reflection;

use ReflectionClass;
use ReflectionException;

class ReflectionInformation
{
    /**
     * @param string|object $classFullName
     * @return void
     * @throws ReflectionException
     */
    public static function displayInfo(string|object $classFullName): void {
        $reflection = new ReflectionClass($classFullName);
        // TODO: Ajouter la récupération des methodes, nom, ... et l'afficher
    }
}