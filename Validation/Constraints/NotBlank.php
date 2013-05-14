<?php

namespace Quest\ServiceDesk\DTOBundle\Validation\Constraints;

use Quest\ServiceDesk\DTOBundle\Validation\ConstraintViolationCode;

class NotBlank extends \Symfony\Component\Validator\Constraints\NotBlank
{
    public $message = ConstraintViolationCode::NULL_OR_EMPTY;
}