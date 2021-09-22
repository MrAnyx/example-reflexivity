<?php

namespace App;

use App\Interfaces\SchoolBehaviour;

class SchoolPerson extends Person implements SchoolBehaviour
{
    protected string $schoolName;
    protected string $identifier;

    public function __construct(string $firstname, string $lastname, string $birth, string $schoolName, string $identifier)
    {
        parent::__construct($firstname, $lastname, $birth);
        $this->schoolName = $schoolName;
        $this->identifier = $identifier;
    }

    /**
     * @return void
     */
    public function goToSchool(): void
    {
        echo "I'm currently going to school";
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
     * @return SchoolPerson
     */
    public function setSchoolName(string $schoolName): SchoolPerson
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
     * @return SchoolPerson
     */
    public function setIdentifier(string $identifier): SchoolPerson
    {
        $this->identifier = $identifier;
        return $this;
    }

}