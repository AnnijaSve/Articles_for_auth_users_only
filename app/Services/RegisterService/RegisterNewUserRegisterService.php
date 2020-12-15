<?php

namespace App\Services\RegisterService;


use App\Models\User;
use App\Repositories\UserRepository;

class RegisterNewUserRegisterService
{
    public function register(array $data, string $email)
    {
        $messages= (new AuthorizeNewUserRegisterService())->authorizeNewUser($email);

        $user = User::create($data);

        if (! $messages) {
            $query = query();

            (new UserRepository())->register($query,$user);

            $_SESSION['id'] = (int)$query->getConnection()->lastInsertId();
            header('Location: /articles');
        }
      return $messages;
    }
}