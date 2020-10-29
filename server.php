<?php


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$host = "localhost";
$username = "root";
$password = "";
$db_name = "foilers";

$conn = new mysqli($host, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Cannot Connect to Database " . $conn->connect_error);
}


if (isset($_POST['login'])) {
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    $sql = "SELECT * FROM users WHERE name='$name'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $verify = password_verify($password, $row['password']);
        if ($verify) {
            $_SESSION['user'] = $row;

            header("location: index.php");
        } else {
            $_SESSION['message'] = 'Wrong Password';
            header("location: login.php");
        }
    } else {
        echo "Something Went Wrong" . $conn->error;
    }
}

if (isset($_POST['register'])) {
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $date = date('Y-m-d H:i:s');
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(name, password, email, tof) VALUES('$name', '$password_hash', '$email', NOW())";
    $check = "SELECT * FROM users WHERE name='$name' OR email='$email'";
    $result = $conn->query($check);
    if ($result->num_rows == 1) {
        $_SESSION['msg'] = 'Error User Already Registered';
        $_SESSION['msg_type'] = 'warning';
        header("location: register.php");
    } else {
        $result = $conn->query($sql);
        if ($result) {
            echo "Added User";
            header("location: login.php");
        } else {
            echo "Something went wrong " . $conn->error;
        }
    }
}

if (isset($_POST['addCar'])) {

    $time =  htmlspecialchars($_POST['time']);
    $date = date('Y-m-d', strtotime($_POST['date']));
    $workno = htmlspecialchars(filter_var($_POST['work_no'], FILTER_SANITIZE_NUMBER_INT));
    $jobno = htmlspecialchars(filter_var($_POST['job_no'], FILTER_SANITIZE_NUMBER_INT));
    $customername = htmlspecialchars(filter_var($_POST['customer_name'], FILTER_SANITIZE_STRING));
    $email = htmlspecialchars(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $customer_concern_list = $_POST['customer_concern'];
    print_r($customer_concern_list);
    $checklist = $_POST['check_list'];

    $sql = "INSERT INTO car(time, date, work_no, job_no, customer_name, email) VALUES('$time', '$date', $workno, $jobno, '$customername', '$email')";
    try {
        if ($conn->query($sql) === true) {
            $id = $conn->insert_id;
            if (!empty($customer_concern_list)) {
                $cust_id = 1;
                foreach ($customer_concern_list as $selected) {
                    $upd = "UPDATE car SET customer_concern_{$cust_id}='{$selected}' WHERE id = {$id}";

                    if ($conn->query($upd) === true) {
                        $cust_id++;
                    } else {
                        throw new Exception("update Error" . $conn->error);
                    }
                }
            }
            if (!empty($checklist)) {
                foreach ($checklist as $selected) {
                    $upd = "UPDATE car SET $selected=1 WHERE id = $id";
                    if ($conn->query($upd) === true) {
                        echo "updated " . $selected . "<br>";
                    } else {
                        throw new Exception("update Error" . $conn->error);
                    }
                }
            }
            $_SESSION['msg'] = "Successfully Added Car to Service";
            $_SESSION['msg_type'] = "success";
            header("location: add_car.php");
        } else {
            throw new Exception("error " . $conn->error);
        }
    } catch (Exception $e) {
        $_SESSION['msg'] = $e->getMessage();
        $_SESSION['msg_type'] = "danger";
        header("location: add_car.php");
    }
}

if (isset($_POST['update_status'])) {
    $id = htmlspecialchars(filter_var($_POST['update_id'], FILTER_VALIDATE_INT));
    $status = htmlspecialchars(filter_var($_POST['status'], FILTER_SANITIZE_STRING));

    $sql = "UPDATE car SET Status='$status' WHERE id=$id";
    $result = $conn->query($sql);

    if ($result) {

        $user = "SELECT * from car WHERE id={$id}";
        $user_result = $conn->query($user);


        echo "Sending Email to Customer<br>";

        if ($user_result->num_rows > 0) {
            $row = $user_result->fetch_array();
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'foilers.dubai.555@gmail.com';                     // SMTP username
                $mail->Password   = 'mufaddal2460555';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('foilers.dubai.555@gmail.com', 'Foilers');
                $mail->addAddress($row['email'], $row['customer_name']);     // Add a recipient
                // $mail->addAddress('john@doe.com');               // Name is optional
                $mail->addReplyTo('foilers.dubai.555@gmail.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                // Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Foilers - Update on Your Car Service';
                $mail->Body    = "Dear {$row['customer_name']}, <br> 
                <p>Update on Your Car Status</p>
                <p>Your Service is in Process of {$row['Status']}</p>";
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                $_SESSION['msg'] = "Update Done & Message Has been sent to Customer";
                $_SESSION['msg_type'] = "success";
                header("location: status.php");
            } catch (Exception $e) {
                $_SESSION['msg'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                $_SESSION['msg_type'] = "success";
                header("location: status.php");
            }
        } else {
            echo "error user cannot be found " . $conn->error;
        }
    } else {
        $_SESSION['msg'] = "Error Updating";
        $_SESSION['msg_type'] = "danger";
        header("location: status.php");
    }
}


if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("location: login.php");
}
