<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Articles show</title>
    <link rel="stylesheet"
          type="text/css"
          href="/app\Views\style.css"/>
</head>
<body>
<a href="/articles"><button>Back</button></a>
<a href="/articles/<?= $article->id(); ?>/edit">
    <button>Edit Article</button></a>
<hr>
<div class="view">
    <div class="articleShow">
        <h1><?php echo $article->title(); ?></h1>
        <p><?php echo $article->content(); ?></p>
        <p>
            <small>
                <b><?php echo $article->createdAt(); ?></b>
            </small>
        </p>
        Likes: <?php echo $article->like(); ?>
        <form method="post" action="/articles/<?php echo $article->id(); ?>/like">
            <button type="submit" name="like" value="1">Like</button>
            <button type="submit" name="like" value="-1">Dislike</button>
        </form>
        <h3>
            <?php foreach ($tags as $tag): ?>
                <?php echo $tag->tag(); ?>
            <?php endforeach; ?>
        </h3>
    </div>
</div>
<div class="view">
    <div class="articleShow">
        Comments for article:
        <?php if (!empty($comments)): ?>
            <ul>
                <?php foreach ($comments as $comment): ?>
                    <li>
                        <?php echo $comment->name(); ?>: <?php echo $comment->comment(); ?>
                    </li>
                    <form method="post" action="/articles/<?php echo $comment->id(); ?>/comments">
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <b>No comments</b>
        <?php endif; ?>
        <hr>
        <h3>Add comment here:</h3>
        <form method="post" action="/articles/<?php echo $article->id(); ?>/comments">
            <label for="name">Your name</label>
            <textarea name="name" id="name" rows="1" cols="40" style="display: block" required></textarea>
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" rows="4" cols="40" style="display: block" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</div>
</body>
</html>
