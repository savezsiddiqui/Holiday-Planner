<?php
include 'php/connection.php';
session_start();

if(isset($_POST['basic']))
$_SESSION['price'] = 19;
else if(isset($_POST['pro']))
$_SESSION['price'] = 29;
else
$_SESSION['price'] = 49;

echo $_SESSION['username'] . "<br>";
echo $_SESSION['price'] . "<br>";
$city = $_SESSION['city'];
$user = $_SESSION['username'];
$sql = "SELECT * FROM payment WHERE destination = '$city' && email= '$user';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<html>

<head></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    .danger{
color: red;
}
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="danger text-center">
                <?php if (!empty($row)) { ?>
                <h4>Caution! you have already made one or more payments for this destination.</h4>
                <?php 
            } ?>
            </div>
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form_container">
                <h2> PAYMENT FORM </h2><br>
                <form action="php/payment.php" method="post">
                    <div class="form-group">
                        <label>DEPARTURE DATE</label>
                        <input type="date" class="form-control" name="depart-date" required>
                    </div>
                    <div class="form-group">
                        <label>ARRIVAL DATE</label>
                        <input type="date" class="form-control" name="arr-date" required>
                    </div>
                    <div class="form-group">
                        <label>DEPARTURE CITY</label>
                        <input type="text" class="form-control" name="depart-city" required>
                    </div>
                    <div class="form-group">
                        <label>NO OF PEOPLE</label>
                        <input type="number" class="form-control" name="person" min="1" max="10" required>
                    </div>
                    <div class="form-group">
                        <label>CREDIT/DEBIT CARD NUMBER</label>
                        <input type="text" class="form-control" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" name="card"
                            placeholder="XXXX-XXXX-XXXX-XXXX" required>
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>EXPIRATION DATE</label><br>
                        <select required>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select required>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                            <option value="21"> 2022</option>
                            <option value="21"> 2023</option>
                            <option value="21"> 2024</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>CVV</label>
                        <input type="password" pattern="[0-9]{3}" class="form-control" name="cvv" placeholder="CVV"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">CONFIRM PAYMENT</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>