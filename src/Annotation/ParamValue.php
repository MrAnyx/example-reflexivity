<?php

namespace App\Annotation;

use App\Types\ParamType;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class ParamValue {
    public function __construct(
        public array $params
    ) {}
}