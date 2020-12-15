<?php

namespace App\Services\Validator\UserValidator;

class PasswordValidator
{
    public function validate()
    {
        return $_POST['password'] !== '' && $_POST['password'] === $_POST['password2'];
    }
}