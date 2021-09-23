<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */

namespace App\Interfaces;

interface PersonBehaviour
{
    public function walk(): void;

    public function eat(): void;

    public function workout(): void;
}