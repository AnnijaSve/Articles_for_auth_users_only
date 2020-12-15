<?php

namespace App\Services\ArticleServices;

use App\Repositories\ArticleRepository;

class UpdateArticleService
{
    public function update(int $id, string $title, string $content)
    {
        (new ArticleRepository())->updateArticle($id, $title, $content);
    }

}