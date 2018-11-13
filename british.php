<?php
include 'php/connection.php';
session_start();
$_SESSION['city'] = 'britain';

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
    color: #008f95;
}

.carousel-indicators li {
    border-color: #008f95;
}

.carousel-indicators li.active {
    background-color:#008f95;
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
    border: 1px solid #008f95;
    border-radius:0;
    transition: box-shadow 0.5s;
}

.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .3);
}

.heading{
      font-family: "Nunito";
      padding-top: 50px;
    }

.panel-footer .btn:hover {
    border: 1px solid #008f95;
    background-color: #fff !important;
    color: #008f95;
}

.panel-heading {
    color: #fff !important;
    background-color: #008f95 !important;
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
    background-color: #008f95;
    color: #fff;
}
</style>
</head>
<body>

  <h2 class="heading"><center>British Empire</center></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/buckingham.jpg" alt="Buckingham Palace">
      <div class="carousel-caption">
        <h3>Buckingham Palace</h3>
        <p>God Save the Queen!</p>
      </div>
    </div>

    <div class="item">
      <img src="img/stonehenge.jpg" alt="Stonehenge">
      <div class="carousel-caption">
        <h3>Stonehenge</h3>
        <p>The valley of the Gods</p>
      </div>
    </div>

    <div class="item">
      <img src="img/bridge.jpg" alt="London Bridge">
      <div class="carousel-caption">
        <h3>London Bridge</h3>
        <p>London Bridge is falling down. My fair lady!!!</p>
      </div>
    </div>

    <div class="item">
        <img src="img/edinburgh.jpg" alt="Edinburgh">
        <div class="carousel-caption">
          <h3>Edinburgh</h3>
          <p>If you are a fan of archaic architecture make sure to visit here.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/glasgow.jpg" alt="Glasgow">
        <div class="carousel-caption">
          <h3>Glasgow</h3>
          <p>The pride of Scotland!!!</p>
        </div>
      </div>
      <div class="item">
        <img src="img/donegal.jpg" alt="Donegal">
        <div class="carousel-caption">
          <h3>Donegal</h3>
          <p>Up here in Ireland its different!!!</p>
        </div>
      </div>
      <div class="item">
        <img src="img/ireland.jpg" alt="Ireland">
        <div class="carousel-caption">
          <h3>Ireland</h3>
          <p>Come away, O human child! To the waters and the wild with a faery, hand in hand. For the world's more full of weeping than you can understand</p>
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
