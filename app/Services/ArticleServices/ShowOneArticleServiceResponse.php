<?php
namespace App\Services\ArticleServices;

use App\Models\Article;

class ShowOneArticleServiceResponse
{

    private Article $article;
    private array $comments;

    public function __construct(Article $article, array $comments)
    {
        $this->article = $article;
        $this->comments = $comments;
    }

    public function article(): Article
    {
        return $this->article;
    }

    public function comments(): array
    {
        return $this->comments;
    }

}