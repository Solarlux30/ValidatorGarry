<?php

namespace App\Validation\Rules;

use App\Validation\Rules\ValidationRulesInterface;
use App\Validation\Validators\RequiredValidator;
use Attribute;
use App\Validation\Validators\ValidatorInterface;

#[Attribute]
class Required implements ValidationRulesInterface
{
    public function getValidator(): ValidatorInterface
    {
        return new RequiredValidator();
    }
}