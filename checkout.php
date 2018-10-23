<?php
if(isset($_GET['alert'])){
$alert = $_GET['alert'];
}else{
$alert= "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MaC Dee Muzik links for streaming music from various entertainment platforms such as iTunes, Soundcloud, Spotify and Tidal.">
    <meta name="author" content="Crawley Creative Agency">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/style.css">
    <title>MaC Dee Muzik: Stream Music</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <style>
  h1,h2,h3,h4{
    font-family: 'Molle', cursive;
  }
  body,p{
    font-family: 'Permanent Marker', cursive;
            padding-top: 5rem;
            background-image:url(http://cagency.net/media/images/_MG_0175.JPG);
            background-position:left;
  }
  </style>
</head>


<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">MaC Dee</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="http://macdeemuzik.com">Full Site<span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="#productRow">Shop</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container text-center">

      <div class="w3-animate-opacity w3-white w3-padding-32">
        <div id="productRow" class="row w3-margin">
            <div class="col-sm-12"><h1 class="w3-text-yellow">MaC Dee Merch</h1></div>
            <div class="col-sm-12"><h3 class="alert alert-success"><?php echo $alert;?></h3></div>
<?php
if(isset($_POST['checkout'])){
$product = $_POST['product'];
$amount = $_POST['amount'];
$displayAmount = $amount / 100;
if(isset($_POST['meta']) && !empty($_POST['meta'])){
  $meta = "Size: ".$_POST['meta'];
  $productDetails = "Product: ".$product. " ".$meta;
}else{
  $productDetails = "Product: ".$product;
  $meta = "";
}
//display product checkout form
?>
<div class="container">
  <div class="row w3-margin">
    <div class="col-sm-12 text-center"><h2><?php echo $product;?></h2></div>
    <div class="col-sm-12 text-center"><?php echo $meta;?></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-12 text-left">Enter Your Payment Details</div>
    <div class="col-sm-12">
    <form action="charge.php" method="post" id="payment-form">
        <div class="form-row">
         <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
         <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
         <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" required>
          <div id="card-element" class="form-control w3-margin">
            <!-- a Stripe Element will be inserted here. -->
          </div>
          <input type="tel" name="tel" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Phone Number (optional)">
          <input type="text" name="address" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Shipping Address" required>
          <input type="hidden" name="amount" value="<?php echo $amount;?>" required>
          <input type="hidden" name="productDetails" value="<?php echo $productDetails;?>" required>
          <!-- Used to display form errors -->
          <div id="card-errors" role="alert"></div>
        </div>
        <button class="btn w3-green">Finish Order</button>
    </form>
  </div>
  </div>
</div>
<?php
}else{
header('location:https://macdeemuzik.com/stream');
}
?>
</main><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>
</html>



//checkout platforms
