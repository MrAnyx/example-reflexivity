<?php

namespace App\Interfaces;

interface TeacherBehaviour
{
    public function prepareExam(): void;
    public function prepareLesson(): void;
}