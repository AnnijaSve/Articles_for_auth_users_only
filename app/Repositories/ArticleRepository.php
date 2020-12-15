<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    public function getAll(): array
    {
        $articlesQuery = query()
            ->select('*')
            ->from('articles')
            ->orderBy('created_at', 'desc')
            ->execute()
            ->fetchAllAssociative();

        $articles = [];

        foreach ($articlesQuery as $article) {
            $articles[] = Article::create($article);
        }
        return $articles;
    }

    public function getById(int $id): Article
    {
        $articleQuery = query()
            ->select('*')
            ->from('articles')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute()
            ->fetchAssociative();

        return $article = Article::create($articleQuery);
    }

    public function editById(int $id): Article
    {


            $articleQuery = query()
                ->select('*')
                ->from('articles')
                ->where('id = :id')
                ->setParameter('id', $id)
                ->execute()
                ->fetchAssociative();
            return $article = Article::create($articleQuery);

        }

    public function addLikeTo(int $id, int $like): void
    {
        query()
            ->update('articles')
            ->set("likes", "likes + {$like}")
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute();

    }

    public function delete(int $id): void
    {

            query()
                ->delete('articles')
                ->where('id = :id')
                ->setParameter('id', $id)
                ->execute();


    }

    public function addNewArticle(string $title, string $content)
    {
        query()
            ->insert('articles')
            ->values([
                'title' => ':title',
                'content' => ':content'
            ])
            ->setParameters([
                'title' => $title,
                'content' => $content
            ])
            ->execute();
    }

    public function updateArticle(int $id, string $title, string $content)
    {
            query()
                ->update('articles')
                ->set('title', ':title')
                ->set('content', ':content')
                ->setParameters([
                    'title' => $title,
                    'content' => $content
                ])
                ->where('id = :id')
                ->setParameter('id', $id)
                ->execute();

    }


}
