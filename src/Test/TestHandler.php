<?php

namespace App\Test;

use ReflectionMethod;

class TestHandler
{
    /**
     * @param object $classInstance
     */
    public function __construct(
        private object $classInstance
    )
    {
    }

    /**
     * @param ReflectionMethod $method
     * @return void
     */
    public function test(ReflectionMethod $method): void
    {
        if ($method->isConstructor()) {
            return;
        }

        $_returnTypeReflection = $method->getReturnType();

        $name = $method->getName();
        $returnType = $_returnTypeReflection->getName();
        $allowsNull = $_returnTypeReflection->allowsNull();
        $isPublic = $method->getModifiers() === ReflectionMethod::IS_PUBLIC; // 1 veut dire que la methode est public
        $attributes = $method->getAttributes();
        $parameters = $method->getParameters();

        dump($name);
    }

//    /**
//     * @param ReflectionMethod $method
//     * @return void
//     * @throws TestException
//     */
//    private function executeTest(ReflectionMethod $method): void
//    {
//        if ($method->isConstructor()) {
//            throw new TestException(printf("An error occured during the test of the method : %s from the class %s", $method->getName(), $method->getDeclaringClass()->getName()));
//        }
//    }
}