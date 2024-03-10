<?php 

namespace App\Validation\Validators;

use App\Validation\Validators\ValidatorInterface;

class RequiredValidator implements ValidatorInterface
{
    public function validate($value): bool 
    {
        return !empty($value);
    }
}