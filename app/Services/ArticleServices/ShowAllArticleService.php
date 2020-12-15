<?php

namespace App\Services\ArticleServices;

use App\Repositories\ArticleRepository;

class ShowAllArticleService
{
    private ArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    public function execute(): array
    {

       return $articles = $this->articleRepository->getAll();

    }
}