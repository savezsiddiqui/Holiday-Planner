
<html>
<?php
include 'connection.php';
session_start();

$email = $_SESSION['username'];
$amt = $_SESSION['price'] * $_POST['person'];
$dept = $_POST['depart-date'];
$arr = $_POST['arr-date'];
$city = $_POST['depart-city'];
$card = $_POST['card'];
$person = $_POST['person'];
$for = $_SESSION['city'];

$sql = "INSERT INTO payment
            VALUES('$email', $amt, $person, '$dept', '$arr', '$city', '$card', '$for');";

if ($conn->query($sql)) { ?>
    <script type="text/javascript">
        alert("Payment Successfull");
    </script>
    
<?php header("Location: ../test.php");
} else
    echo "Payment Failed";

$conn->close();
?>
</html>