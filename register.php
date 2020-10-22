<?php
require "partials/header.php";
?>
<title>Register</title>
</head>

<body>
    <? require "partials/message.php";?>
    <div class="container">
        <div class="header">
            <h1>Login</h1>
        </div>
        <form action="./server.php" method="post" class="register">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" placeholder="Email" name="email" class="form-control" required>
            </div>
            <input type="submit" name="register" value="Register">
        </form>
    </div>

    <?php
    require "partials/footer.php";
    ?>