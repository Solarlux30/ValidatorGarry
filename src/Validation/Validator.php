<?php 

namespace App\Validation;

use App\Validation\Rules\ValidationRulesInterface;
use ReflectionAttribute;


class Validator 
{
    private array $errors = [];

    public function validate(object $object): void 
    {
        $reflector = new \ReflectionClass($object);
        
        foreach($reflector->getProperties() as $property)
        {
            $attributes = $property->getAttributes(
                ValidationRulesInterface::class,
                ReflectionAttribute::IS_INSTANCEOF
            );


            foreach($attributes as $attribute){
                $validator = $attribute->newInstance()->getValidator();

                if(!$validator->validate($property->getValue($object)))
                {
                    $this->errors[$property->getname()][] = sprintf(
                        "Invalid value for '%s' using %s validation.",
                        $property->getName(),
                        $attribute->getName()
                    );
                }

            }

        }

        dd($this->errors);
        
    }


}