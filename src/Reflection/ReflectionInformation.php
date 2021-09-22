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
    public static function displayInfo(string $classFullName): void {
        $reflection = new ReflectionClass($classFullName);
        printf("################## Informations based on %s reflection class ##################\n", $classFullName);
        printf("Class name : %s\n", $reflection->getName());
        printf("From the namespace : %s\n", $reflection->getNamespaceName());
        printf("Inheritance : %s", $reflection->getExtension());
    }
}