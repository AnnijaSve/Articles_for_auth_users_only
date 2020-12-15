<?php

namespace App\Controllers;

use App\Services\ArticleServices\DeleteArticleService;
use App\Services\ArticleServices\EditArticleService;
use App\Services\ArticleServices\LikeArticleService\AddLikeArticleService;
use App\Services\ArticleServices\NewArticleService;
use App\Services\ArticleServices\ShowAllArticleService;
use App\Services\ArticleServices\ShowOneArticleService;
use App\Services\ArticleServices\UpdateArticleService;
use App\Services\ArticleServices\AuthorizeUser;

class ArticlesController
{
    private array $articles;

    public function index()
    {
        AuthorizeUser::authorize();
        $articles = (new ShowAllArticleService())->execute();

        return require_once __DIR__ . '/../Views/ArticlesIndexView.php';

    }

    public function show(array $vars)
    {

        AuthorizeUser::authorize();
        $response = (new ShowOneArticleService())->execute((int)$vars['id']);

        $article = $response->article();

        $comments = $response->comments();

        return require_once __DIR__ . '/../Views/ArticlesShowView.php';

    }

    public function like(array $vars)
    {
        AuthorizeUser::authorize();
        (new AddLikeArticleService())->addLikeTo((int)$vars['id'], $_POST['like']);

        header('Location: /articles/' . $vars['id']);
    }

    public function delete(array $vars)
    {

        AuthorizeUser::authorize();
        (new DeleteArticleService())->delete((int)$vars['id']);

        header('Location: /articles');

    }

    public function newArticle()
    {

        AuthorizeUser::authorize();
        (new NewArticleService())->add($_POST['title'],$_POST['content']);

        header('Location: /articles');
    }

    public function edit(array $vars)
    {

        AuthorizeUser::authorize();
        $article = (new EditArticleService())->edit((int)$vars['id']);

        return require_once __DIR__ . '/../Views/ArticlesEditView.php';
    }


    public function update(array $vars)
    {

        AuthorizeUser::authorize();
        (new UpdateArticleService())->update((int)$vars['id'], $_POST['title'], $_POST['content']);

        header('Location: /articles/' . $vars['id'] . '/edit');
    }


}
