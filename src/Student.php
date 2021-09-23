<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */


namespace App;

use App\Interfaces\StudentBehaviour;
use Exception;
use Stringable;

class Student extends SchoolPerson implements StudentBehaviour, Stringable
{
    /**
     * @param string $firstname
     * @param string $lastname
     * @param string $birth
     * @param string $schoolName
     * @param string $identifier
     * @throws Exception
     */
    public function __construct(string $firstname, string $lastname, string $birth, string $schoolName, string $identifier = "N/A")
    {
        parent::__construct($firstname, $lastname, $birth, $schoolName, $identifier);
    }

    /**
     * @return void
     */
    public function study(): void
    {
        echo "I'm studying for my maths exam";
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return parent::__toString() . printf(" and I'm currently studying at the UQAC");
    }
}