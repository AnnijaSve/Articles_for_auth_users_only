<?php

namespace App\Services\ArticleServices;

class AuthorizeUser
{
    public static function authorize()
    {
        if ($_SESSION['id'] == null){
            return header('Location: /login');
        }
    }


}