<?php

namespace App;

use Exception;

class Teacher extends Person
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

}