<?php

namespace App\Services\ArticleServices;

use App\Models\Article;
use App\Repositories\ArticleRepository;

class EditArticleService

{
    public function edit(int $id): Article
    {
        return (new ArticleRepository())->editById($id);
    }
}