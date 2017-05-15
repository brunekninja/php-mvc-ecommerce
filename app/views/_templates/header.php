<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shopphie</title>

  <!-- Theme CSS -->
  <link href="<?php echo RESOURCES_PATH ?>/styles/main.css" rel="stylesheet">
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="#page-top">Shopphie</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden">
          <a href="#page-top"></a>
        </li>
        <li>
          <a class="page-scroll" href="#services">Services</a>
        </li>
        <li>
          <a class="page-scroll" href="#portfolio">Shop</a>
        </li>
        <li>
          <a class="page-scroll" href="#team">Team</a>
        </li>
        <li>
          <a class="page-scroll" href="#contact">Contact</a>
        </li>
        <li>
          <a href="/cart">CART <span class="items-num"><?php echo (isset($_SESSION['cart_products'])) ? sizeof($_SESSION['cart_products']) : '0'; ?></span></a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
