<?php

namespace App\Services\ArticleServices;

use App\Repositories\ArticleRepository;

class NewArticleService
{
    public function add(string $title, string $content)
    {
        (new ArticleRepository())->addNewArticle($title, $content);
    }
}