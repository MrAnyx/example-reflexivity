<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */

namespace App\Reflection;

use App\Helper\ColorConsole;
use Reflection;
use ReflectionClass;
use ReflectionException;

class ReflectionInformation
{

    private ReflectionClass $reflection;

    /**
     * @param string $className
     * @throws ReflectionException
     */
    public function __construct(string $className)
    {
        $this->reflection = new ReflectionClass($className);
    }

    /**
     * @return void
     */
    public function displayInfo(): void
    {
        $this->displayBasicInformations();
        $this->displayInheritance();
        $this->displayInterfaces();
        $this->displayConstants();
        $this->displayProperties();
        $this->displayConstructorParameters();
        $this->displayMethods();
    }

    private function displayBasicInformations(): void
    {
        echo "\n" . ColorConsole::color("Basic reflection informations", ColorConsole::GREEN, true) . "\n";
        printf("Class name : %s\n",
            ColorConsole::color($this->reflection->getName(), ColorConsole::CYAN)
        );
        printf("From the namespace : %s\n",
            ColorConsole::color($this->reflection->getNamespaceName(), ColorConsole::CYAN)
        );
    }

    private function displayInheritance(): void
    {
        echo "\n" . ColorConsole::color("Inheritance", ColorConsole::GREEN, true) . "\n";
        printf("Extends %s\n",
            ColorConsole::color($this->reflection->getParentClass()->getName(), ColorConsole::CYAN)
        );
        printf("For namespace : %s\n",
            ColorConsole::color($this->reflection->getParentClass()->getNamespaceName(), ColorConsole::CYAN)
        );
    }

    private function displayInterfaces(): void
    {
        echo "\n" . ColorConsole::color("Interfaces", ColorConsole::GREEN, true) . "\n";
        foreach ($this->reflection->getInterfaces() as $interface) {
            printf("Implements %s ",
                ColorConsole::color($interface->getName(), ColorConsole::CYAN)
            );
            if ($interface->getNamespaceName() !== "") {
                printf("from namespace %s",
                    ColorConsole::color($interface->getNamespaceName(), ColorConsole::CYAN)
                );
            }
            echo "\n";
        }
    }

    private function displayConstants(): void
    {
        echo "\n" . ColorConsole::color("Constants", ColorConsole::GREEN, true) . "\n";
        foreach ($this->reflection->getReflectionConstants() as $constant) {
            printf("Constant %s from class %s is %s and its value is %d\n",
                ColorConsole::color($constant->getName(), ColorConsole::CYAN),
                ColorConsole::color($constant->getDeclaringClass()->getName(), ColorConsole::CYAN),
                ColorConsole::color(Reflection::getModifierNames($constant->getModifiers())[0], ColorConsole::CYAN),
                ColorConsole::color($constant->getValue(), ColorConsole::CYAN)
            );
        }
    }

    private function displayProperties(): void
    {
        echo "\n" . ColorConsole::color("Properties", ColorConsole::GREEN, true) . "\n";
        foreach ($this->reflection->getProperties() as $property) {
            printf("Property %s from class %s is %s and must be of type %s\n",
                ColorConsole::color($property->getName(), ColorConsole::CYAN),
                ColorConsole::color($property->getDeclaringClass()->getName(), ColorConsole::CYAN),
                ColorConsole::color(Reflection::getModifierNames($property->getModifiers())[0], ColorConsole::CYAN),
                ColorConsole::color($property->getType()->getName(), ColorConsole::CYAN)
            );
        }
    }

    private function displayConstructorParameters(): void
    {
        echo "\n" . ColorConsole::color("Constructor parameters", ColorConsole::GREEN, true) . "\n";
        $constructor = $this->reflection->getConstructor();
        printf("To create an object of type %s, you must specify %d parameters\n",
            ColorConsole::color($constructor->getDeclaringClass()->getName(), ColorConsole::CYAN),
            ColorConsole::color($constructor->getNumberOfParameters(), ColorConsole::CYAN)
        );
        if ($constructor->getNumberOfParameters() !== 0) {
            foreach ($constructor->getParameters() as $parameter) {
                printf("    > %s of type %s\n",
                    ColorConsole::color($parameter->getName(), ColorConsole::CYAN),
                    ColorConsole::color($parameter->getType()->getName(), ColorConsole::CYAN)
                );
            }
        }
    }

    private function displayMethods(): void
    {
        echo "\n" . ColorConsole::color("Methods", ColorConsole::GREEN, true) . "\n";
        foreach ($this->reflection->getMethods() as $method) if (!$method->isConstructor()) {
            printf("Method %s from class %s is %s and returns %s. It takes %d parameters\n",
                ColorConsole::color($method->getName(), ColorConsole::CYAN),
                ColorConsole::color($method->getDeclaringClass()->getName(), ColorConsole::CYAN),
                ColorConsole::color(Reflection::getModifierNames($method->getModifiers())[0], ColorConsole::CYAN),
                ColorConsole::color($method->getReturnType()->getName(), ColorConsole::CYAN),
                ColorConsole::color($method->getNumberOfParameters(), ColorConsole::CYAN)
            );
            if ($method->getNumberOfParameters() !== 0) {
                foreach ($method->getParameters() as $parameter) {
                    printf("    > %s of type %s\n",
                        ColorConsole::color($parameter->getName(), ColorConsole::CYAN),
                        ColorConsole::color($parameter->getType()->getName(), ColorConsole::CYAN)
                    );
                }
            }
        }
    }
}