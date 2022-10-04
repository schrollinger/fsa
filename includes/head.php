<?php
if(isset($_POST["first_name"])) {

  $msg = "This is a message";
  imap_mail("mschroll@hotmail.de", "Here is the subject line", $msg);
  // echo "Mail sent for " . $_POST["first_name"];
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Michael Schroll">
    <title>
      <?php echo $title; ?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    
  </head>
  <body>

<main>