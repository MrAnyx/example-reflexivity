<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */

require_once __DIR__ . "/vendor/autoload.php";

use App\Helper\ColorConsole;
use App\Reflection\ReflectionInformation;
use App\Student;

$reflectionInformation = new ReflectionInformation(Student::class);
$reflectionInformation->displayInfo();