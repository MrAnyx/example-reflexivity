<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */


namespace App\Interfaces;

interface TeacherBehaviour
{
    public function prepareExam(): void;

    public function prepareLesson(): void;
}