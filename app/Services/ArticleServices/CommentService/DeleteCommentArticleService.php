<?php

namespace App\Services\ArticleServices\CommentService;

use App\Repositories\CommentRepository;

class DeleteCommentArticleService

{
    public function delete(int $id)
    {
        (new CommentRepository())->delete($id);
    }
}