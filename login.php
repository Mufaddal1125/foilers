<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Foilers Dubai</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Login</h1>
        </div>
        <form action="./server.php" method="post" class="loginform">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" placeholder="Password" name="password" class="form-control" required>
            </div>
            <input type="submit" name="login" value="Login"> <span>Or <a href="./register.php">Register Here</a></span>
        </form>
    </div>
</body>

</html>