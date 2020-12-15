<?php

namespace App\Services\LoginService;

use App\Repositories\UserRepository;


class LoginService
{

    public function login($email, $password)
    {
        $usersQuery = (new UserRepository())->findByEmail($email);

        $messages = [];

        if (! $usersQuery['email']) {

            $messages['email'] = 'Wrong e-mail!';
        }

        if (! password_verify( $password ?? '', $usersQuery['password'])) {

            $messages['password'] = 'Invalid password';

        } else {

            $_SESSION['id'] = $usersQuery['id'];
            $_SESSION['name'] = $usersQuery['name'];
            header('Location: /articles');
        }

        return $messages;

    }



}