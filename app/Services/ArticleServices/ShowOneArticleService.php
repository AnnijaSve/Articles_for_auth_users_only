<?php
namespace App\Services\ArticleServices;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;
use App\Repositories\TagRepository;

class ShowOneArticleService
{
    private ArticleRepository $articleRepository;
    private CommentRepository $commentRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
        $this->commentRepository = new CommentRepository();
    }

    public function execute(int $id): ShowOneArticleServiceResponse
    {

        $article = $this->articleRepository->getById($id);
        $comments = $this->commentRepository->getByArticleId($id);

        return new ShowOneArticleServiceResponse($article, $comments);
    }
}