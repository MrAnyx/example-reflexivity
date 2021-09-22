<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Reflection\ReflectionInformation;
use App\Student;

$student = new Student("John", "Doe", "1998-06-23", "UQAC", uniqid());

//dd((new ReflectionClass(Student::class)));

ReflectionInformation::displayInfo(Student::class);