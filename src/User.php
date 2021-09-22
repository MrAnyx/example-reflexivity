<?php

namespace App;

use App\Annotation\ParamValue;
use App\Annotation\ReturnValue;
use App\Annotation\UnitTest;
use Stringable;


class User implements Stringable
{
    public function __construct(
        public string $firstname,
        public string $lastname,
        public int    $age,
    )
    {
    }

    #[UnitTest]
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    #[UnitTest]
    public function setFirstname(string $firstname): User
    {
        $this->firstname = $firstname;
        return $this;
    }


    #[UnitTest]
    public function getLastname(): string
    {
        return $this->lastname;
    }

    #[UnitTest]
    public function setLastname(string $lastname): User
    {
        $this->lastname = $lastname;
        return $this;
    }

    #[UnitTest]
    public function getAge(): int
    {
        return $this->age;
    }

    #[UnitTest]
    public function setAge(int $age): User
    {
        $this->age = $age;
        return $this;
    }

    #[UnitTest]
    public function __toString(): string
    {
        return printf("Hello, I'm %s %s and I'm %d years old", $this->firstname, $this->lastname, $this->age);
    }
}