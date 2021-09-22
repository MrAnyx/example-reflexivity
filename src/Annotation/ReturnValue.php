<?php

namespace App\Annotation;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class ReturnValue
{
    public function __construct(
        public string $returnType
    )
    {}
}