<?php
require "partials/header.php";
require "server.php";

$sql = "SELECT * FROM car";
$result = $conn->query($sql);

?>
<title>List of Cars</title>

</head>

<body>
    <?php require "partials/message.php"; ?>
    <div class="container">
        <h1>List of Cars</h1>
        <?php
        if ($result->num_rows > 0) {
        ?>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="row">Customer Name</th>
                        <th scope="row">Date</th>
                        <th scope="row">Time</th>
                        <th scope="row">Work Order No.</th>
                        <th scope="row">Job Order No.</th>
                        <th scope="row">Status</th>
                        <th scope='row'>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>{$row['id']}</td> <td>{$row['customer_name']}</td><td>{$row['date']}</td><td>{$row['time']}</td>
                        <td>{$row['work_no']}</td><td>{$row['job_no']}</td><td>{$row['Status']}</td><td><button type='button' onclick='update_id(this.value)' class='btn btn-primary' value='{$row['id']}' data-toggle='modal' data-target='#update_status'>
                        Update Status
                      </button></td></tr>";
                    }
                    ?>

                </tbody>
            </table>
            <!-- Modal -->
            <div class="modal fade" id="update_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="server.php" method="post">
                                <div class="form-group">
                                    <input type="hidden" id="update_id" name="update_id">
                                    <label for="status">Update Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Internal Repair Work Completed">Internal Repair Work Completed</option>
                                        <option value="Body Work, Reassembly, and Paint">Body Work, Reassembly, and Paint</option>
                                        <option value="Finishing Touches, Test Drive, and Completion">Finishing Touches, Test Drive, and Completion</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="update_status" value="update_status" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } else {
            echo "<h1>No Results Found</h1>";
        }
        ?>
    </div>
    <script>
        const input_id = document.getElementById("update_id");

        function update_id(id) {
            input_id.value = id;
        }
    </script>

    <?php
    require "partials/footer.php";
    ?>