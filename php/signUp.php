
<?php

include 'connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$userid = $_POST['userid'];
$address = $_POST['city'];
$zipcode = $_POST['zipcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['pass'];

$sql = "SELECT * FROM signup WHERE email = '$email';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!empty($row)) {
    echo "User Already Registered ";
} else {
    $sql = "INSERT INTO signup
            VALUES('$fname', '$lname', '$userid', '$address', $zipcode, $phone, '$email', '$password');";

    if ($conn->query($sql)) {
        session_start();
        if (isset($_SESSION['username'])) {
            die("SignUp Succesfull, but need to login with new Account.");
        }
        $_SESSION['username'] = $email;
        header("Location: ../test.php");
    } else
        echo "Error Resigtering User";
}

?>