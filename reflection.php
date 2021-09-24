<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */

require_once __DIR__ . "/vendor/autoload.php";

use App\Foo;

// On crée une reflection de la méthode "bar" issue de la classe Foo
$method = new ReflectionMethod(Foo::class, 'bar');

// On modifie son comportement en la rendant accessible de l'exterieur
// Autrement-dit, on rend la méthode public
$method->setAccessible(true);

// On appelle la fonction
$method->invoke(new Foo);

// On rend de nouveau la méthode privée
$method->setAccessible(false);