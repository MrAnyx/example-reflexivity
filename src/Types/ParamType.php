<?php

namespace App\Types;

class ParamType {
    public function __construct(
        public string $variableName,
        public string $variableType
    ) {}
}