<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet"
          type="text/css"
          href="app\Views\style.css"/>
</head>
<body>
<div class="view">
    <h2>Log in here</h2>
</div>
<div class="message">
    <?php foreach ($messages as $message): ?>
        <?php echo $message; ?>
    <?php endforeach; ?>
</div>
<div class="view">
    <div class="register">
        <form method="post" action="/login">
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" style="display: block;" required/>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" style="display: block;" required/>
            </div>
            <p>
                <button type="submit">Login</button>
            </p>
        </form>
    </div>
</div>

<div class="view">
   <p>Don't have a profile? Sign up here:</p>
    <a href="/register"><button>Register</button></a>
</div>
</body>
</html>