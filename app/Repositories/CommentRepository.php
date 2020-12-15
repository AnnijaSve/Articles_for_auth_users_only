<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository
{
    public function getByArticleId(int $id): array
    {
        $commentsQuery = query()
            ->select('*')
            ->from('comments')
            ->where('articles_id = :articleId')
            ->setParameter('articleId', $id)
            ->execute()
            ->fetchAllAssociative();

        $comments = [];
        foreach ($commentsQuery as $comment) {
            $comments[] = Comment::create($comment);
        }
        return $comments;
    }

    public function addComment(int $id, $name, $comment)
    {
        query()
            ->insert('comments')
            ->values([
                'articles_id' => ':articleId',
                'name' => ':name',
                'comment' => ':comment'
            ])
            ->setParameters([
                'name' => $name,
                'comment' => $comment,
                'articleId' => $id
            ])
            ->execute();

    }

    public function delete(int $id)
    {

          query()
                ->delete('comments')
                ->where('id = :id')
                ->setParameter('id', $id)
                ->execute();

    }

    public function deleteByArticle(int $id)
    {

        query()
            ->delete('comments')
            ->where('articles_id = :articles_id')
            ->setParameter('articles_id', $id)
            ->execute();

    }


}