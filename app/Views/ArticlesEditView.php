<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Edit article</title>
    <link rel="stylesheet"
          type="text/css"
          href="/app\Views\style.css"/>
</head>
<body>
<a href="/articles">
    <button>Back</button>
</a>
<div class="view">
    <div class="articleShow">
        <h1><?php echo $article->title(); ?></h1>
        <p><?php echo $article->content(); ?></p>
        <p>
            <small>
                <b><?php echo $article->createdAt(); ?></b>
            </small>
        </p>
        <form action="/articles/<?php echo $article->id(); ?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <div class="field">
                <label for="title"></label>
                <textarea
                        name="title"
                        id="title"
                        rows="2"
                        cols="40"
                        style="display: block;"
                        required
                ><?php echo $article->title(); ?></textarea>
            </div>
            <div class="field">
                <label for="content"></label>
                <textarea name="content"
                          id="content"
                          rows="10"
                          cols="40"
                          style="display: block;"
                          required
                ><?php echo $article->content(); ?></textarea>
            </div>
            <button type="submit">Change</button>
        </form>
    </div>
</div>
</body>
</html>