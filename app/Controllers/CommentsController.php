<?php

namespace App\Controllers;


use App\Services\ArticleServices\AuthorizeUser;
use App\Services\ArticleServices\CommentService\AddCommentArticleService;
use App\Services\ArticleServices\CommentService\DeleteCommentArticleService;

class CommentsController
{
    public function add(array $vars)
    {
        AuthorizeUser::authorize();
        (new AddCommentArticleService())->add((int) $vars['id'], $_POST['name'], $_POST['comment']);

        header('Location: /articles/' . (int) $vars['id']);
    }


    public function deleteComment(array $vars)
    {

        AuthorizeUser::authorize();
        (new DeleteCommentArticleService())->delete((int)$vars['id']);

        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

}