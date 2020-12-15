<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <link rel="stylesheet"
          type="text/css"
          href="app\Views\style.css"/>
</head>
<body>
<div>
    <?php if (isset($_SESSION['id'])): ?>
        <form method="post" action="/logout"><button type="submit">Logout</button></form>
    Welcome,
    <?php echo $_SESSION['name']; ?>
    <?php endif; ?>
</div>

<div class="view">
    <h1>Articles</h1>
</div>
<?php foreach ($articles as $article): ?>
    <div class="view">
        <div class="article">
            <h3>
                <a href="/articles/<?php echo $article->id(); ?>">
                    <?php echo $article->title(); ?>
                </a>
            </h3>
            <p><?php echo $article->content(); ?></p>
            <p>
                <small>
                    <?php echo $article->createdAt(); ?>
                </small>
            </p>
            <form method="post" action="/articles/<?php echo $article->id(); ?>">
                <input type="hidden" name="_method" value="DELETE"/>
                <button
                        type="submit" onclick="return confirm('Are you sure?');"> Delete
                </button>
            </form>
        </div>
    </div>
<?php endforeach; ?>
<hr>
<div class="view">
    <button class="buttonForModal" id="myBtn">Add new article</button>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form method="post" action="/">
            <div>
                <label for="title">Title</label>
                <textarea name="title" id="title" rows="1" cols="38" style="display: block;" required></textarea>
            </div>
            <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" rows="5" cols="38" style="display: block;" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>