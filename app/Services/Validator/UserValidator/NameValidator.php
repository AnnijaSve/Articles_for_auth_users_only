<?php

namespace App\Services\Validator\UserValidator;

class NameValidator
{

    public function validate()
    {
        return $_POST['name'] !== '';
    }
}

