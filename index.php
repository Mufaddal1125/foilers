<?php
require('partials/header.php');
?>
<title>Welcome to Foilers Dubai</title>
<link rel="stylesheet" href="./styles/styles.css">

</head>

<body>

    <div class="container">
        <h1 class="m-6">Welcome to Foilers Dubai</h1>

        
            <div class="row justify-content-around cards">
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