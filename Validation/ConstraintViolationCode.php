<?php

namespace Quest\ServiceDesk\DTOBundle\Validation;

class ConstraintViolationCode
{
    const NULL_OR_EMPTY = 1;
    const MAX_LENGTH = 2;
    const TYPE = 3;
    const CHOICE = 4;
    const EMAIL = 5;
}