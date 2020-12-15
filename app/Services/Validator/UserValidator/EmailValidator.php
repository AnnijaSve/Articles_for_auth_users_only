<?php
namespace App\Services\Validator\UserValidator;

use Respect\Validation\Validator;

class EmailValidator
{
    public function validate()
    {
        return Validator::email()->validate($_POST['email']) && $_POST['email'] !== '';
    }

}