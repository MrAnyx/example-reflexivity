<?php

namespace App;

use App\Annotation\ParamValue;
use App\Annotation\ReturnValue;
use App\Annotation\UnitTest;
use Stringable;

#[UnitTest]
class User implements Stringable {
    public function __construct(
        public string $firstname,
        public string $lastname,
        public int $age,
    ) {}

    #[UnitTest]
    #[ReturnValue("string")]
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    #[UnitTest]
    #[ParamValue([
        "firstname" => "string"
    ])]
    #[ReturnValue(User::class)]
    public function setFirstname(string $firstname): User
    {
        $this->firstname = $firstname;
        return $this;
    }


    #[UnitTest]
    #[ReturnValue("string")]
    public function getLastname(): string
    {
        return $this->lastname;
    }

    #[UnitTest]
    #[ParamValue([
        "lastname" => "string"
    ])]
    #[ReturnValue(User::class)]
    public function setLastname(string $lastname): User
    {
        $this->lastname = $lastname;
        return $this;
    }

    #[UnitTest]
    #[ReturnValue("int")]
    public function getAge(): int
    {
        return $this->age;
    }

    #[UnitTest]
    #[ParamValue([
        "age" => "int"
    ])]
    #[ReturnValue(User::class)]
    public function setAge(int $age): User
    {
        $this->age = $age;
        return $this;
    }

    #[UnitTest]
    #[ReturnValue("string")]
    public function __toString(): string {
        return printf("Hello, I'm %s %s and I'm %d years old", $this->firstname, $this->lastname, $this->age);
    }
}