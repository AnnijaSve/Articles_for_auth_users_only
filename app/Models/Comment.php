<?php

namespace App\Models;

class Comment
{
    private int $id;
    private int $articleId;
    private string $name;
    private string $comment;

    public function __construct(
        int $id,
        int $articleId,
        string $name,
        string $comment
    )
    {
        $this->id = $id;
        $this->articleId = $articleId;
        $this->name = $name;
        $this->comment = $comment;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function articleId(): int
    {
        return $this->articleId;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function comment(): string
    {
        return $this->comment;
    }

    public static function create(array $data): Comment
    {
        return new self(
            $data['id'],
            $data['articles_id'],
            $data['name'],
            $data['comment']
        );
    }
}
