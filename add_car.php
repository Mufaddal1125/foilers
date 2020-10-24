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
    <div class="container">
        <div class="header row clearfix">
            <h1 class="col">Foilers Dubai</h1>
            <div class="logout col float-right">
                <form type='get' action="server.php" name="logout">
                    <input type="submit" name="logout" id="logout" value="Logout" class="btn btn-primary">
                </form>
            </div>
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

                    <!-- <div class="row">
                        <h1>Dents and Scratches</h1>
                        <div class="right">
                            <svg width="505" height="204" viewBox="0 0 505 204" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="right">
                                    <path id="right_body" d="M41 59C29.8327 59.1303 23.946 60.2995 14 64C0.532773 105.387 -0.471968 123.939 2.00004 154C27.8654 160.363 42.3378 168.36 72 162C64.5 178 79.5 203.5 107.5 203.5C134.38 199.707 145.5 182 143 162L380.5 161.017C371.5 180.017 383.5 201 409.5 202.5C439 202.5 449 180 442 162.858H502C506.808 149.273 502 117.5 492.5 91.5C456.5 72.5 441 65.5 385 60.5C346.5 29 334.141 19.4503 295 9C175.735 -8.86023 110.606 1.18551 41 59Z" stroke="black" />
                                    <path id="right_front_door" d="M251.955 59.6959L241 8.02567C270.536 7.751 287.006 9.49057 315.857 22.5736C331.626 30.7083 350.067 38.5882 374 59.6959M251.955 59.6959H374M251.955 59.6959L267.017 152H372C377.468 112.981 378.67 92.2859 374 59.6959M262.909 78.2571V83.7752C270.409 86.7659 274.781 86.9866 282.993 83.7752V78.2571M262.909 78.2571V72.7389H282.993V78.2571M262.909 78.2571H282.993" stroke="black" />
                                    <path id="right_back_door" d="M134 20L125.5 58.5L150.5 140C152.48 148.134 155.5 152.5 161 152.5H262L246 60.5M140 77.25V82C146.444 85.7623 150.056 85.8519 156.5 82V77.25M140 77.25V72.5H156.5V77.25M140 77.25H156.5M66 58C108.546 23.4008 147.864 6.69886 235 8.26205L245.5 60.0398L66 58Z" stroke="black" />
                                    <path id="right_back_wheel" d="M139.5 166.5C139.5 183.599 124.971 197.5 107 197.5C89.0286 197.5 74.5 183.599 74.5 166.5C74.5 149.401 89.0286 135.5 107 135.5C124.971 135.5 139.5 149.401 139.5 166.5Z" stroke="black" />
                                    <path id="right_front_wheel" d="M438.5 172C438.5 186.619 426.205 198.5 411 198.5C395.795 198.5 383.5 186.619 383.5 172C383.5 157.381 395.795 145.5 411 145.5C426.205 145.5 438.5 157.381 438.5 172Z" stroke="black" />
                                    <path id="right_front_bumper" d="M499 157.5C499.572 131.838 497.093 117.806 487 93.5C475.321 86.0855 469.385 82.1814 452 76C429.5 68 412.276 65.0113 380 62.5C380.552 65.2184 381.04 67.8783 381.468 70.5M499 157.5H475.5M499 157.5L491.148 124M381.468 70.5C385.735 96.6653 383.984 119.015 380 157.5C386.213 147.338 391.874 140.782 409.5 140.5C423.498 140.276 437 150.5 441 157.5H475.5M381.468 70.5C414.522 75.0358 432.385 80.0289 463 93.5M463 93.5C470.439 92.1 474.972 91.9809 484 93.5L487.047 106.5M463 93.5L465.539 106.5M475.5 157.5L468.957 124M465.539 106.5C473.55 104.766 478.244 104.701 487.047 106.5M465.539 106.5L468.078 119.5M487.047 106.5L490.094 119.5M468.078 119.5H490.094M468.078 119.5L468.957 124M490.094 119.5L491.148 124M468.957 124H491.148" stroke="black" />
                                    <path id="rear_bumper" d="M17.5 66.5C26.3426 68.3885 30.6361 69.5332 35 72C33.4723 76.6761 31.7323 83.1584 33 97.5M17.5 66.5H127L144 156C131.5 136.5 125 130.5 104.5 130.5C84 130.5 73.8844 142.647 71 156C55.3343 153.841 41.6596 160.5 37 132.5C35.4768 123.347 32.7459 117.465 33 97.5M17.5 66.5L10.5 97.5H33" stroke="black" />
                                </g>
                            </svg>

                        </div>
                    </div> -->

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