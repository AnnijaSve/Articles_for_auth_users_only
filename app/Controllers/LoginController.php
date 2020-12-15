<?php

namespace App\Controllers;

use App\Models\User;
use App\Services\LoginService\LoginService;

class LoginController
{

    public function showLogin()
    {
        return require_once __DIR__ . '/../Views/LoginView.php';
    }

    public function login()
    {
        $messages = (new LoginService())->login($_POST['email'], $_POST['password']);

        return require_once __DIR__ . '/../Views/LoginView.php';

    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
    }
}