<?php

namespace App\Services\ArticleServices\CommentService;

use App\Repositories\CommentRepository;

class AddCommentArticleService
{
    public function add(int $id, $name, $comment)
    {
        (new CommentRepository())->addComment($id, $name, $comment);
    }
}