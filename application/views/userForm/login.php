<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__.'/../header.php';?>
    <title>Login</title>
</head>
<body>
<?php include __DIR__.'/../menu.php' ?>
    <div class="form-main">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login">
                    <h2>Login</h2>
                    <form action="">
                        <input type="text" placeholder="id or email" required>
                        <input type="password" placeholder="password" required>
                        <button>Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>