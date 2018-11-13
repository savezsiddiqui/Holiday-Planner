<?php
include 'php/connection.php';
session_start();
$user = $_SESSION['username'];
$sql = "SELECT * FROM payment WHERE email = '$user';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Lato|Titillium+Web" rel="stylesheet" type="text/css">
<style>
.abc{
  font-family: "Nunito";
}
.empty {
  font-family: "Nunito";
  padding-top: 50px;
}
</style>

<?php if (empty($row)) { ?>
  <div class = "empty col-md-12 col-sm-12 col-lg-12">
    <center><h3>No Payments Made Yet!</h3></center>
  </div>
<?php 
} else { ?>
<table class="abc" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <th>Amount</th><th>Person</th><th>Departure</th><th>Arrival</th><th>City</th><th>Card Number</th><th>Destination</th>
  </tr>
<?php do { ?>
  <tr>
    <td style='width: 100px; text-align: center;'><?php echo $row['amount']; ?></td>
    <td style='width: 100px; text-align: center;'><?php echo $row['person']; ?></td>
    <td style='width: 160px; text-align: center;'><?php echo $row['departure']; ?></td>
    <td style='width: 160px; text-align: center;'><?php echo $row['arrival']; ?></td>
    <td style='width: 160px; text-align: center;'><?php echo $row['city']; ?></td>
    <td style='width: 300px; text-align: center;'><?php echo $row['card']; ?></td>
    <td style='width: 160px; text-align: center;'><?php echo $row['destination']; ?></td>
  </tr>
<?php 
} while ($row = $result->fetch_assoc());
} ?>    