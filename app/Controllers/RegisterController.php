<?php

namespace App\Controllers;

use App\Services\RegisterService\RegisterNewUserRegisterService;


class RegisterController
{
    public function __construct()
    {
        if (isset($_SESSION['id'])) {
            header('Location: /');
        }
    }

    public function newUser()
    {
        return require_once __DIR__ . '/../Views/RegisterView.php';
    }

    public function register()
    {

           $messages = (new RegisterNewUserRegisterService())->register($_POST,$_POST['email']);

            return require_once __DIR__ . '/../Views/RegisterView.php';

    }


}
