<?php

namespace App;

use App\Interfaces\PersonBehaviour;
use DateTime;
use Exception;

class Person implements PersonBehaviour, \Stringable
{
    protected string $firstname;
    protected string $lastname;
    protected \DateTime $birth;

    /**
     * @param string $firstname
     * @param string $lastname
     * @param string $birth
     * @throws Exception
     */
    public function __construct(string $firstname, string $lastname, string $birth)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birth = new DateTime($birth);
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Person
     */
    public function setFirstname(string $firstname): Person
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Person
     */
    public function setLastname(string $lastname): Person
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirth(): DateTime
    {
        return $this->birth;
    }

    /**
     * @param DateTime $birth
     * @return Person
     */
    public function setBirth(DateTime $birth): Person
    {
        $this->birth = $birth;
        return $this;
    }

    /**
     * @return void
     */
    public function walk(): void
    {
        echo "I'm currently walking";
    }

    /**
     * @return void
     */
    public function eat(): void
    {
        echo "I'm eating a delicious meal !";
    }

    /**
     * @return void
     */
    public function workout(): void
    {
        echo "I'm going to the gym !";
    }

    /**
     * @return string Returns string representation of the object that
     */
    public function __toString(): string
    {
        return printf("Hi, I'm %s %s", $this->firstname, $this->lastname);
    }
}