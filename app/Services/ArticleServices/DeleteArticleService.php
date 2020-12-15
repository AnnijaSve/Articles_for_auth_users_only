<?php

namespace App\Services\ArticleServices;

use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;

class DeleteArticleService
{
    public function delete(int $id): void
    {
        (new ArticleRepository())->delete($id);
        (new CommentRepository())->deleteByArticle($id);
    }
}