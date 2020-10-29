<?php
require "partials/header.php";
require "server.php";


?>
<title>Details</title>
<link rel="stylesheet" href="./styles/styles.css">
<style>
    .row .col {
        margin: 20px 0;
        text-align: center;
    }
</style>
</head>

<body>
    <?php
    require('partials/navbar.php');
    ?>
    <div class="container">
        <div class="header">
            <h1>Details</h1>
        </div>
        <?php

        function check_if($bool)
        {
            if ($bool) {
                echo '<svg class="bi text-success" width="32" height="32" fill="currentColor">
                                            <use xlink:href="node_modules\bootstrap-icons\bootstrap-icons.svg#check-square-fill"/>
                                            </svg>';
            } else {
                echo '<svg class="bi text-danger" width="32" height="32" fill="currentColor">
                                            <use xlink:href="node_modules\bootstrap-icons\bootstrap-icons.svg#file-x-fill"/>
                                            </svg>';
            }
        }

        if (isset($_GET['id'])) {
            $sql = "SELECT * FROM car WHERE id={$_GET['id']}";
            $result = $conn->query($sql);
            if ($result->num_rows > 0 && $result->num_rows < 2) {
                $row = $result->fetch_assoc();
        ?>

                <div class="row">
                    <div class="col">
                        <h3>Time</h3>
                        <p><?php echo $row['time']; ?></p>
                    </div>
                    <div class="col">
                        <h3>Date</h3>
                        <p><?php echo $row['date']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Work Order No.</h3>
                        <p><?php echo $row['work_no']; ?></p>
                    </div>
                    <div class="col">
                        <h3>Job Order No.</h3>
                        <p><?php echo $row['job_no']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Customer Name</h3>
                        <p><?php echo $row['customer_name']; ?></p>
                    </div>
                    <div class="col">
                        <h3>Customer Email</h3>
                        <p><?php echo $row['email']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Full Wrap</h3>
                        <p><?php check_if($row['full_wrap']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>PDR</h3>
                        <p><?php check_if($row['pdr'])
                            ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>PPF</h3>
                        <p><?php check_if($row['ppf']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Backtakleen</h3>
                        <p><?php check_if($row['backtakleen']);
                            ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Tint</h3>
                        <p><?php check_if($row['tint']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Decals</h3>
                        <p><?php check_if($row['decals']);
                            ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Polish Detailing</h3>
                        <p><?php check_if($row['polish_detailing']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Branding</h3>
                        <p><?php check_if($row['branding']);
                            ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Sound System</h3>
                        <p><?php check_if($row['sound_system']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Ceramic</h3>
                        <p><?php check_if($row['ceramic']);
                            ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Glass Parency</h3>
                        <p><?php check_if($row['glassparency']);
                            ?></p>
                    </div>
                    <div class="col"></div>
                </div>
                <h1 style="text-align: center">Scratches and Dents</h1>
                <div class="row">
                    <h2 style=" text-align: left">Top</h2>
                    <div class="col">
                        <h3>Roof</h3>
                        <p><?php check_if($row['roof']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Hood</h3>
                        <p><?php check_if($row['hood']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Trunk</h3>
                        <p><?php check_if($row['trunk']);
                            ?></p>
                    </div>
                </div>
                <div class="row">
                    <h2 style=" text-align: left">Right</h2>
                    <div class="col">
                        <h3>Back Door</h3>
                        <p><?php check_if($row['right_door_1']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Front Door</h3>
                        <p><?php check_if($row['right_door_2']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Front Bumper</h3>
                        <p><?php check_if($row['right_front_bumper']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Rear Bumper</h3>
                        <p><?php check_if($row['right_rear_bumper']);
                            ?></p>
                    </div>
                </div>
                <div class="row">
                    <h2 style=" text-align: left">Left</h2>
                    <div class="col">
                        <h3>Back Door</h3>
                        <p><?php check_if($row['left_door_1']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Front Door</h3>
                        <p><?php check_if($row['left_door_2']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Front Bumper</h3>
                        <p><?php check_if($row['left_front_bumper']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Rear Bumper</h3>
                        <p><?php check_if($row['left_rear_bumper']);
                            ?></p>
                    </div>
                </div>
                <div class="row">
                    <h2 style=" text-align: left">Front</h2>
                    <div class="col">
                        <h3>Grill</h3>
                        <p><?php check_if($row['grill']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Head Light</h3>
                        <p><?php check_if($row['head_light']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Front Fascia</h3>
                        <p><?php check_if($row['front_fascia']);
                            ?></p>
                    </div>
                    <div class="col">
                        <h3>Bumper Molding</h3>
                        <p><?php check_if($row['bumper_molding']);
                            ?></p>
                    </div>
                </div>
                <h1 class="mb-6">Customer Concerns</h1>
                <dl class="row text-center" style="font-size: larger;">
                    <?php
                    // print_r($row);
                    $customer_concern = array_slice($row, -6, 5);
                    $i = 1;

                    foreach ($customer_concern as $values) {
                        if (!empty($values)) {
                            echo "<dt class='col-sm-3'>Customer Concern $i</dt>
                            <dd class='col-sm-9 text-left'>$values</dd>";
                            $i++;
                        }
                    }
                    ?>
                </dl>
    </div>
</body>

<?php
            }
        }
?>