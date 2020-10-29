<?php
require('partials/header.php');
?>
<title>Welcome to Foilers Dubai</title>
<link rel="stylesheet" href="./styles/styles.css">

</head>

<body>
    <?php
    require('partials/message.php');
    ?>
    <?php
    require('partials/navbar.php');
    ?>
    <div class="container">
        <div class="header">
            <h1 class="m-6">Welcome to Foilers Dubai</h1>
            <div class="logout col float-right">
                <form type='get' action="server.php" name="logout">
                    <input type="submit" name="logout" id="logout" value="Logout" class="btn btn-primary">
                </form>
            </div>
        </div>

        <div class="row justify-content-center cards">
            <div class="col">
                <a href="./status.php">
                    <div class="card-action">
                        <h1>Check Status of Car</h1>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="./add_car.php">
                    <div class="card-action">
                        <h1>Add Car to Service</h1>
                    </div>
                </a>
            </div>
        </div>


    </div>

    <?php
    require "partials/footer.php";
    ?>