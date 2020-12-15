<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet"
          type="text/css"
          href="app\Views\style.css"/>
</head>
<body>
<a href="/">
    <button>Back</button>
</a>
<div class="view">
    <h2>Please fill register information!</h2>
</div>
<div class="message">
<?php foreach ($messages as $message): ?>
    <?php echo $message; ?>
<?php endforeach; ?>
</div>
<div class="view">
    <div class="register">
        <form method="post" action="/register">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" style="display: block;" required/>
            </div>
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" style="display: block;" required/>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" style="display: block;" required/>
            </div>
            <div>
                <label for="password2">Reenter password</label>
                <input type="password" name="password2" id="password2" style="display: block;" required/>
            </div>
            <button type="submit">Register</button>
    </div>
</div>
</form>
</body>
</html>