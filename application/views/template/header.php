<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/stylesheet.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">

    <title><?= $judul; ?></title>
  </head>
  <body>    
   

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
 <div class="container  ">
  <a class="navbar-brand btn btn-primary text-white " href="#">
  <i class="fas fa-utensils"></i>
  PANCONGKUY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-white " href="<?php echo base_url().'paket1' ?>">Pancong</a>
      <a class="nav-item nav-link text-white" href="<?php echo base_url().'paket2'?>">Drinks</a>
      <a class="nav-item nav-link text-white" href="<?php echo base_url().'snacks'?>">Snacks</a>
      
    </div>
  </div>
  </div>
</nav>
