<?php

namespace App;

use Exception;

class Student extends Person
{
    public string $schoolName;
    public string $identifier;

    /**
     * @param string $firstname
     * @param string $lastname
     * @param string $birth
     * @param string $schoolName
     * @param string $identifier
     * @throws Exception
     */
    public function __construct(string $firstname, string $lastname, string $birth, string $schoolName, string $identifier)
    {
        parent::__construct($firstname, $lastname, $birth);
        $this->schoolName = $schoolName;
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getSchoolName(): string
    {
        return $this->schoolName;
    }

    /**
     * @param string $schoolName
     * @return Student
     */
    public function setSchoolName(string $schoolName): Student
    {
        $this->schoolName = $schoolName;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return Student
     */
    public function setIdentifier(string $identifier): Student
    {
        $this->identifier = $identifier;
        return $this;
    }

}