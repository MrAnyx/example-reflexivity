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
    public static function displayInfo(string $classFullName): void
    {
        $reflection = new ReflectionClass($classFullName);
        printf("### Basic reflection informations ###\n");
        printf("Class name : %s\n", $reflection->getName());
        printf("From the namespace : %s\n", $reflection->getNamespaceName());

        printf("\n### Inheritance ###\n");
        printf("Extends %s\n", $reflection->getParentClass()->getName());
        printf("For namespace : %s\n", $reflection->getParentClass()->getNamespaceName());

        // Todo: Erreur end of line
        printf("\n### Interfaces ###\n");
        foreach ($reflection->getInterfaces() as $reflectionInterface) {
            printf("Implements %s ", $reflectionInterface->getName());
            if ($reflectionInterface->getNamespaceName() !== null) {
                printf("from namespace %s\n", $reflectionInterface->getNamespaceName());
            }
        }


    }
}