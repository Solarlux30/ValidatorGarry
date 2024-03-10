<?php 

namespace App\Validation\Rules;

use App\Validation\Validators\ValidatorInterface;

interface ValidationRulesInterface 
{
    public function getValidator(): ValidatorInterface;
}