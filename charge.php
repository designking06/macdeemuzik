<?php
  require_once('vendor/autoload.php');
  \Stripe\Stripe::setApiKey('sk_test_J6BclpBYnpdmH3q0RzQuE27V');
 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $amount = $POST['amount'];
 $product = $POST['product'];
 $size = $POST['productSize'];
 $description = "Product: "$product. " Size: ".$size;
 $email = $POST['email'];
 $token = $POST['stripeToken'];
// Create Customer In Stripe
try{
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));
// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $amount,
  "currency" => "usd",
  "description" => $description,
  "customer" => $customer->id
));
// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
} catch(\Stripe\Error\Card $e) {
  // Since it's a decline, \Stripe\Error\Card will be caught
  $alert = "Your transaction didnt go through, please try again.";
  //header('location:index.php?alert='.$alert);
  echo $alert;
  /*
  $body = $e->getJsonBody();
  $err  = $body['error'];

  print('Status is:' . $e->getHttpStatus() . "\n");
  print('Type is:' . $err['type'] . "\n");
  print('Code is:' . $err['code'] . "\n");
  // param is '' in this case
  print('Param is:' . $err['param'] . "\n");
  print('Message is:' . $err['message'] . "\n");
  */
} catch (\Stripe\Error\RateLimit $e) {
  // Too many requests made to the API too quickly
  $alert = "The site crashed because of too much activity, please try again";
  //header('location:index.php?#productRow?alert='.$alert);
  echo $alert;
} catch (\Stripe\Error\InvalidRequest $e) {
  // Invalid parameters were supplied to Stripe's API
    $alert = "An error occured, please try again [37]";
    //header('location:index.php?#productRow?alert='.$alert);
    echo $alert;
} catch (\Stripe\Error\Authentication $e) {
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)
    $alert = "An error occured, please try again [41]";
  //  header('location:index.php?#productRow?alert='.$alert);
  echo $alert;
} catch (\Stripe\Error\ApiConnection $e) {
  // Network communication with Stripe failed
  $alert = "A connection error occured, please try again [44]";
  //header('location:index.php?#productRow?alert='.$alert);
  echo $alert;
} catch (\Stripe\Error\Base $e) {
  // Display a very generic error to the user, and maybe send
  // yourself an email
  $alert = "An error occured, please try again [48]";
  //header('location:index.php?#productRow?alert='.$alert);
  echo $alert;
} catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
  $alert = "An error occured, please check your connection and try again [51]";
  //header('location:index.php?#productRow?alert='.$alert);
  echo $alert;
}
