<?php
require("./partials/header.php");
?>

<title>Add Car for Service</title>
<link rel="stylesheet" href="./styles/styles.css">
<script src="https://d3js.org/d3.v6.min.js"></script>
</head>

<body>
    <?php
    require('partials/message.php');
    ?>
    <?php
    require('partials/navbar.php');
    ?>
    <div class="container">

        <div class="header row clearfix">
            <h1 class="col">Foilers Dubai</h1>

        </div>
        <form action="./server.php" name="addCar" method="post">
            <div class="form">
                <div class="col">
                    <div class="row">
                        <div class="col form-group">
                            <label class="form-label" for="time">Time</label>
                            <input type="time" name="time" required class="form-control" id="">
                        </div>
                        <div class="col form-group">
                            <label class="form-label" for="date">Date</label>
                            <input type="date" name="date" required class="form-control" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label class="form-label" for="work_no">Work Order No.</label>
                            <input type="number" maxlength="10" required name="work_no" class="form-control" id="">
                        </div>
                        <div class="col form-group">
                            <label class="form-label" for="job_no">Job Order No.</label>
                            <input type="number" name="job_no" required maxlength="10" class="form-control" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label class="form-label" for="custName">Customer Name: </label>
                            <input type="text" placeholder="Customer Name" name="customer_name" id="" required class="form-control">
                        </div>
                        <div class="col form-group">
                            <label class="form-label" for="custName">Customer Email: </label>
                            <input type="email" placeholder="Customer Email" name="email" id="" required class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="full_wrap" class="form-check-input check-lg" id="fullwrap">
                            <label class="form-label for-check" for="fullwrap">Full Wrap</label>
                        </div>
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="pdr" class="form-check-input check-lg" id="pdr">
                            <label class="form-label for-check" for="pdr">PDR</label>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="ppf" class="form-check-input check-lg" id="pdr">
                            <label class="form-label for-check" for="ppf">PPF</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="backtakleen" class="form-check-input check-lg" id="bactakleen">
                            <label class="form-label for-check" for="bactakleen">Bactakleen</label>
                        </div>
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="tint" class="form-check-input check-lg" id="tint">
                            <label class="form-label for-check" for="tint">Tint</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="decals" class="form-check-input check-lg" id="decals">
                            <label class="form-label for-check" for="decals">Decals</label>
                        </div>
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="polish_detailing" class="form-check-input check-lg" id="polishdetailing">
                            <label class="form-label for-check" for="polishdetailing">Polish Detailing</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="branding" class="form-check-input check-lg" id="branding">
                            <label class="form-label for-check" for="branding">Branding</label>
                        </div>
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="sound_system" class="form-check-input check-lg" id="soundsystem">
                            <label class="for-check" for="soundsystem">Sound System</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="ceramic" class="form-check-input check-lg" id="ceramic">
                            <label class="form-label for-check" for="ceramic">Ceramic</label>
                        </div>
                        <div class="col form-group">
                            <input type="checkbox" name="check_list[]" value="glassparency" class="form-check-input check-lg" id="glassparency">
                            <label class="form-label for-check" for="glassparency">GlassParency</label>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <h1>Dents and Scratches</h1>

                        <h4 class="display-4">Top</h4>
                        <div class="row">
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="roof" class="form-check-input check-lg" id="roof">
                                <label class="form-label for-check" for="roof">Roof</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="hood" class="form-check-input check-lg" id="hood">
                                <label class="form-label for-check" for="hood">Hood</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="trunk" class="form-check-input check-lg" id="trunk">
                                <label class="form-label for-check" for="trunk">Trunk</label>
                            </div>
                        </div>

                        <h4 class="display-4">Right</h4>
                        <div class="row">
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="right_door_1" class="form-check-input check-lg" id="rightdoor1">
                                <label class="form-label for-check" for="right_door_1">Back Door</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="right_door_2" class="form-check-input check-lg" id="rightdoor2">
                                <label class="form-label for-check" for="right_door_2">Front Door</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="right_front_bumper" class="form-check-input check-lg" id="rightfrontbumper">
                                <label class="form-label for-check" for="right_front_bumper">Front Bumper</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="right_rear_bumper" class="form-check-input check-lg" id="rightrearbumper">
                                <label class="form-label for-check" for="right_rear_bumper">Rear Bumper</label>
                            </div>
                        </div>
                        <h4 class="display-4">Left</h4>
                        <div class="row">
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="left_door_1" class="form-check-input check-lg" id="leftdoor1">
                                <label class="form-label for-check" for="left_door_1">Back Door</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="left_door_2" class="form-check-input check-lg" id="leftdoor2">
                                <label class="form-label for-check" for="left_door_2">Front Door</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="left_front_bumper" class="form-check-input check-lg" id="leftfrontbumper">
                                <label class="form-label for-check" for="left_front_bumper">Front Bumper</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="left_rear_bumper" class="form-check-input check-lg" id="leftrearbumper">
                                <label class="form-label for-check" for="left_rear_bumper">Rear Bumper</label>
                            </div>
                        </div>

                        <h4 class="display-4">Front</h4>
                        <div class="row">
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="grill" class="form-check-input check-lg" id="grill">
                                <label class="form-label for-check" for="grill">Grill</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="head_light" class="form-check-input check-lg" id="headlight">
                                <label class="form-label for-check" for="head_light">Head Light</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="front_fascia" class="form-check-input check-lg" id="frontfascia">
                                <label class="form-label for-check" for="front_fascia">Front Fascia</label>
                            </div>
                            <div class="col form-group">
                                <input type="checkbox" name="check_list[]" value="bumper_molding" class="form-check-input check-lg" id="bumpermolding">
                                <label class="form-label for-check" for="bumper_molding">Bumper Molding</label>
                            </div>
                        </div>
                    </div>

                    <div class="Customer-Concern">
                        <h2>Customer Concerns</h2>
                        <div class="form-group row clearfix">
                            <label for="cutomer_concern[]" class="col-sm-2 col-form-label float-left">1. </label>
                            <div class="col-sm-10 float-left">
                                <input type="text" name="customer_concern[]" id="" class="form-control cust-concern ">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm" id="addcustcon">Add Customer Concern</button>
                    <div class="modal fade" id="terms" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Terms And Conditions</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        1. It is understood that any estimation given in provisional and any additional be authorized by customer prior to commencement.
                                        work found necessary must</p>
                                    <p>2. The car condition is accepted as it is. All damage in body/interior have been noted Foilers Dubai will not be liable on any damages unless caused by Foilers Dubai.</p>
                                    <p> 3. Foilers Dubai shall not liable for any missing belongings when returning the car Company shall not be liable for any valuable items left in the vehicle</p>
                                    <p> 4. The unit shall be in Fallers Dubai showroom until paid in full,</p>
                                    <p> 5. Vehicle is parked and driven inside Foilers Dubai showroom at customer's risk.</p>
                                    <p> 6. Vehicle is required to pick up when the job is finished otherwise any vehicle left will incur dally storage
                                        charge of 50 AED.</p>
                                    <p> 7. Terms and condition for wrapping only Peel off and Color Fade warranty for 5 Years.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="terms">

                        <a href="#" class='btn btn-link' data-toggle="modal" data-target="#terms">Terms And Conditions</a>
                    </div>
                    <input class="btn btn-primary btn-lg btn-block" name="addCar" type="submit" value="Submit">
        </form>
    </div>
    </div>

    </div>

    <script src="./js/index.js"></script>
    <?php
    require("./partials/footer.php");
    ?>