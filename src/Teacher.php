<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */


namespace App;

use App\Interfaces\TeacherBehaviour;
use Exception;
use Stringable;

class Teacher extends SchoolPerson implements TeacherBehaviour, Stringable
{
    protected string $subject;

    /**
     * @param string $firstname
     * @param string $lastname
     * @param string $birth
     * @param string $schoolName
     * @param string $identifier
     * @param string $subject
     * @throws Exception
     */
    public function __construct(string $firstname, string $lastname, string $birth, string $schoolName, string $identifier = "N/A", string $subject)
    {
        parent::__construct($firstname, $lastname, $birth, $schoolName, $identifier);
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return Teacher
     */
    public function setSubject(string $subject): Teacher
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return parent::__toString() . printf(" and I'm a teacher at the UQAC");
    }

    public function prepareExam(): void
    {
        // TODO: Implement prepareExam() method.
    }

    public function prepareLesson(): void
    {
        // TODO: Implement prepareLesson() method.
    }
}