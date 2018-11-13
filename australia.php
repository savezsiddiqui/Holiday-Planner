<?php
include 'php/connection.php';
session_start();
$_SESSION['city'] = 'australia';
if (!isset($_SESSION['username']))
  die("You need to login to view content");

?>

<?php
include 'include/navigation.php';
?>

<html>
<head>

<title>Using Bootstrap City</title>
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Lato|Titillium+Web" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #b56357;
}

.carousel-indicators li {
    border-color: #b56357;
}

.carousel-indicators li.active {
    background-color: #b56357;
}

.heading{
      font-family: "Nunito";
      padding-top: 50px;
    }

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
}
.panel {
    border: 1px solid #f4511e;
    border-radius:0;
    transition: box-shadow 0.5s;
}

.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .3);
}

.panel-footer .btn:hover {
    border: 1px solid #b56357;
    background-color: #fff !important;
    color: #b56357;
}

.panel-heading {
    color: #fff !important;
    background-color: #b56357!important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}

.panel-footer {
    background-color: #fff !important;
}

.panel-footer h3 {
    font-size: 32px;
}

.panel-footer h4 {
    color: #aaa;
    font-size: 14px;
}

.panel-footer .btn {
    margin: 15px 0;
    background-color: #b56357;
    color: #fff;
}
</style>
</head>
<body>

  <h2 class="heading"><center>Australia</center></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/sydney.jpg" alt="Sydney">
      <div class="carousel-caption">
        <h3>Sydney Opera House</h3>
        <p>City of celebrations</p>
      </div>
    </div>

    <div class="item">
      <img src="img/kangaroo.jpg" alt="Uluru">
      <div class="carousel-caption">
        <h3>Uluru</h3>
        <p>The top end different from the bottom end</p>
      </div>
    </div>

    <div class="item">
      <img src="img/melbourne.jpg" alt="Melbourne">
      <div class="carousel-caption">
        <h3>Melbourne</h3>
        <p>This city will spoil you.</p>
      </div>
    </div>

    <div class="item">
        <img src="img/canberra.jpg" alt="Canberra">
        <div class="carousel-caption">
          <h3>Canberra</h3>
          <p>The Bush capital</p>
        </div>
      </div>

      <div class="item">
        <img src="img/surfers.jpg" alt="Gold Coast">
        <div class="carousel-caption">
          <h3>Gold Coast</h3>
          <p>Everytime you swim you to the rock it gets closer.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/rock.jpg" alt="Kakadu">
        <div class="carousel-caption">
          <h3>Kakadu National Park</h3>
          <p>The place from where the natives started to live.</p>
        </div>
      </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <div class="container-fluid">
   <div class="text-center">
     <h2>Pricing</h2>
     <h4>Choose a payment plan that works for you</h4>
   </div>
   <div class="row">
     <div class="col-sm-4">
       <div class="panel panel-default text-center">
         <div class="panel-heading">
           <h1>Basic</h1>
         </div>
         <div class="panel-body">
           <p><strong>20</strong> Lorem</p>
           <p><strong>15</strong> Ipsum</p>
           <p><strong>5</strong> Dolor</p>
           <p><strong>2</strong> Sit</p>
           <p><strong>Endless</strong> Amet</p>
         </div>
         <div class="panel-footer">
           <h3>$19</h3>
           <h4>per month</h4>
           <form method="POST" action="pay.php">
           <button type="submit" name="basic" class="btn btn-lg" > Pay Now</button>
           </form>
         </div>
       </div>
     </div>
     <div class="col-sm-4">
       <div class="panel panel-default text-center">
         <div class="panel-heading">
           <h1>Pro</h1>
         </div>
         <div class="panel-body">
           <p><strong>50</strong> Lorem</p>
           <p><strong>25</strong> Ipsum</p>
           <p><strong>10</strong> Dolor</p>
           <p><strong>5</strong> Sit</p>
           <p><strong>Endless</strong> Amet</p>
         </div>
         <div class="panel-footer">
           <h3>$29</h3>
           <h4>per month</h4>
           <form method="POST" action="pay.php">
           <button type="submit" name="pro" class="btn btn-lg" > Pay Now</button>
           </form>
         </div>
       </div>
     </div>
    <div class="col-sm-4">
       <div class="panel panel-default text-center">
         <div class="panel-heading">
           <h1>Premium</h1>
         </div>
         <div class="panel-body">
           <p><strong>100</strong> Lorem</p>
           <p><strong>50</strong> Ipsum</p>
           <p><strong>25</strong> Dolor</p>
           <p><strong>10</strong> Sit</p>
           <p><strong>Endless</strong> Amet</p>
         </div>
         <div class="panel-footer">
           <h3>$49</h3>
           <h4>per month</h4>
           <form method="POST" action="pay.php">
           <button type="submit" name="premium" class="btn btn-lg" > Pay Now</button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>

<?php
include 'include/footer.php';
?>

</body>
</html>
