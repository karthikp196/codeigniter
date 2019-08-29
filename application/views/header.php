<?php

function base_url()
{
    echo "http://localhost/caramel/admin";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/mdb.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

</head>
<body>
  
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark blue-gradient">
  <a class="navbar-brand" href="#">Caramel Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>/controller/dashboard">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/controller/testimonials">Testimonials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Editable Content
        </a>
        <div class="dropdown-menu dropdown-blue-gradient z-depth-1" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="<?php echo base_url(); ?>/controller/allevents">Events</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>/controller/videos">Videos</a>
          <a class="dropdown-item" href="#">Gallery</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">1
          <i class="fas fa-envelope"></i>
        </a>
      </li>
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0"
            alt="avatar image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-primary z-depth-1"
          aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item" href="#">My Account</a>
          <a class="dropdown-item" href="#">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
