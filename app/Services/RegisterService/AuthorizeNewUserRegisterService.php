<?php

namespace App\Services\RegisterService;

use App\Repositories\UserRepository;
use App\Services\Validator\UserValidator\EmailValidator;
use App\Services\Validator\UserValidator\NameValidator;
use App\Services\Validator\UserValidator\PasswordValidator;

class AuthorizeNewUserRegisterService
{
    public function authorizeNewUser($email)
    {
        $messages = [];

        $emailQuery = (new UserRepository())->findByEmail($email);

        $validEmail = (new EmailValidator())->validate();

        $validName = (new NameValidator())->validate();

        $validPassword = (new PasswordValidator())->validate();

        if (!$validEmail) {
            $messages['email'] = "Enter correct e-mail!";
        }

        if ($emailQuery['email']) {
            $messages['email'] = "This e-mail is registered already!";
        }

        if (!$validPassword) {
            $messages['password'] = "Passwords do not match, try one more time!";
        }

        if (!$validName) {
            $messages['name'] = "Empty name field!";
        }

        return $messages;
    }
}