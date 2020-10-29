<?php 
require "partials/header.php";
?>
    <title>Login to Foilers Dubai</title>
</head>

<body>
    <? require "partials/message.php";?>
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
                <input type="password" placeholder="Password" name="password" class="form-control" required>
            </div>
            <div style="margin: 20px 0">
                <input type="submit" name="login" value="Login"> <span>Or <a href="./register.php">Register Here</a></span>
            </div>
        </form>
    </div>

    <?php 
    require "partials/footer.php";
    ?>