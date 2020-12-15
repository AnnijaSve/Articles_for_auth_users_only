<?php

namespace App\Services\ArticleServices\LikeArticleService;

use App\Repositories\ArticleRepository;

class AddLikeArticleService
{
    public function addLikeTo(int $id, int $like): void
    {
        (new ArticleRepository())->addLikeTo($id, $like);
    }

}