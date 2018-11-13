<?php
include 'connection.php';

$email = $_POST['login-email'];
$password = $_POST['login-password'];

$sql = "SELECT * FROM signup WHERE email = '$email';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

session_start();
if (isset($_SESSION['username'])) {
    die("Please logout first");
}

if (!empty($row)) {
    if ($password == $row['password']) {
        session_start();
        $_SESSION['username'] = $row['email'];
        header("Location: ../test.php");
    } else
        echo "password incorrect";
} else {
    echo "email not registered";
}

?>