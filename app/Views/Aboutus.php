<!doctype html>
<html lang="en">
  <head>
  
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css')?>">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




 
    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
       
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>About Us</strong>
      </a>
      
    </div>
  </div>
</header>

<main>

    <!--Nav-->
    <?php 

    // Regens session
    session();
    session() -> regenerate(); 
    $user_id = session()->get('UserID'); // Gets the user ID session

    if(!isset($_SESSION['UserID']))
        {
                // If no user is logged in, display the basic navigation bar
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Profile -->
                        <!--Use the users name here-->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- <li><a class="dropdown-item" href="">My Profile</a></li> -->
                        <li><a class="dropdown-item" href="<?php echo base_url('Dashboard/prac')?>">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('Logout/logout')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <?php
    }
    else if ($_SESSION["type"] == "Practitioner")
    {
        
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Home/about')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Home/contact')?>">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        <!--Use the users name here-->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- <li><a class="dropdown-item" href="">My Profile</a></li> -->
                        <li><a class="dropdown-item" href="<?php echo base_url('Dashboard/prac')?>">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('Logout/logout')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <?php
        } else if ($_SESSION["type"] == "Patient") 
        {
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        <!--Use the users name here-->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- <li><a class="dropdown-item" href="">My Profile</a></li> -->
                        <li><a class="dropdown-item" href="<?php echo base_url('Dashboard/pat')?>">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('Logout/logout')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <?php
        } else if ($_SESSION["type"] == "Admin") 
        {
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Admin/approval')?>">User Approval</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Logout/logout')?>">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <?php
        }
    ?>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">About Us</h1>
        <ul class="list-unstyled text-muted">
          <li class="mb-2">We are here to provide you with a new experience to connect with any private practitioner in 
              Sri Lanka.</li>
          <li class="mb-2">Government approved private practitioners around the nation are linked together in our platform, </li>
          <li class="mb-2"> enabling you a new experience from the ordinary channeling process.</li>
        </ul>
      </div>
    </div>
  </section>



  
  <!-- <footer class="bd-footer py-5 mt-5 bg-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img"><title>Channel Doc</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"/></svg>
          <span class="fs-5">Channel Doc</span>
        </a>
        <ul class="list-unstyled small text-muted">
          <li class="mb-2">We are here to provide you with a new experience to connect with any private practitioner in 
              Sri Lanka.</li>
          <li class="mb-2">Government approved private practitioners around the nation are linked together in our platform, </li>
          <li class="mb-2"> enabling you a new experience from the ordinary channeling process.</li>
        </ul>
      </div>
<!--Links here
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li class="mb-2">Home</li>
          <li class="mb-2">Docs</li>
          <li class="mb-2"><a href="/docs/5.1/examples/">Examples</a></li>
          <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
          <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">

        <ul class="list-unstyled">
          <li class="mb-2"></li>
          <li class="mb-2"></li>
          <li class="mb-2"></li>
          <li class="mb-2"></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        
        <ul class="list-unstyled">
          <li class="mb-2"></li>
          <li class="mb-2"></li>
          <li class="mb-2"></li>
          <li class="mb-2"></li>
          <li class="mb-2"></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Opening Hours</h5>
        <ul class="list-unstyled">
          <li class="mb-2">Monday    12 PM- 8 PM</li>
          <li class="mb-2">Tuesday   12 PM- 8 PM</li>
          <li class="mb-2">Wednesday 12 PM- 8 PM</li>
          <li class="mb-2">Thursday  12 PM- 8 PM</li>
          <li class="mb-2">Friday    12 PM- 8 PM</li>
          <li class="mb-2">Saturday  12 PM- 8 PM</li>
          <li class="mb-2">Sunday    12 PM- 8 PM</li>
        </ul>
      </div>
    </div>
  </div>
</footer> -->

<footer class="footer-48201">
    <section>
        <div class="container">
            <div class="row">
                <!-- <div class="col"> -->
                <!-- <div class="row row-cols-2"> -->
                    <div class="col-md-4 pr-md-5">
                        <!--Logo-->
                        <img class="logofoot" src="<?= base_url('/assets/images/Logo.png')?>" alt="Logo" width="350px">
                    <!-- </div> -->
                    <!-- <div class="col"> -->
                        <p class="slog">We provide the best Doctors for your care as you desire.</p>
                    </div>
                <!-- </div> -->
                <!-- </div> -->
                <div class="col-md">
                    <ul class="list-unstyled nav-links" >
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Appointments</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                    </ul>
                </div>
                <div class="col imd">
                    <ul class="list-unstyled nav-links">
                        <li>
                            Telephone :- <br>0114523659
                        </li>
                        <li>
                            Address :- <br>Colombo, Sri Lanka
                        </li>
                        <li>
                            Email :- <br>channeldoc@yahoo.com
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Partners</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-footer">
                    All rights Reserved to Group 3
            </div>
        </div>
    </section>
    </footer>

  
  </html> 