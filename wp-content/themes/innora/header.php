<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Title -->
   <title>Hotel &amp; Resort HTML Template</title>

   <!-- Favicon --> 

    <link rel="icon" href="<?php bloginfo('template_url');?>./img/core-img/favicon.png">

 <link rel="icon" href="<?php bloginfo('template_url');?>./https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700">


    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style2.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/jquery-ui.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/magnific-popup.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/nice-select.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/bootstrap.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/font-awesome.min.css">


    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/animate.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/classy-nav.css">
 
 
   <?php wp_head();?>

</head>

<body>
   <!-- Preloader -->
   <div id="preloader">
       <div class="loader"></div>
   </div>
   <!-- /Preloader -->

   <!-- Header Area Start -->
   <header class="header-area">
       <!-- Search Form -->
       <div class="search-form d-flex align-items-center">
           <div class="container">
               <form action="index.html" method="get">
                   <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                   <button type="submit"><i class="icon_search"></i></button>
               </form>
           </div>
       </div>

       <!-- Top Header Area Start -->
       <div class="top-header-area">
           <div class="container">
               <div class="row">

                   <div class="col-6">
                       <div class="top-header-content">
                           <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                           <a href="#"><i class="icon_mail"></i> <span>info.colorlib@gmail.com</span></a>
                       </div>
                   </div>

                   <div class="col-6">
                       <div class="top-header-content">
                           <!-- Top Social Area -->
                           <div class="top-social-area ml-auto">
                               <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                               <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                               <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                               <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
       <!-- Top Header Area End -->

       <!-- Main Header Start -->
       <div class="main-header-area">
           <div class="classy-nav-container breakpoint-off">
               <div class="container">
                   <!-- Classy Menu -->
                   <nav class="classy-navbar justify-content-between" id="robertoNav">

                       <!-- Logo -->
                       <a class="nav-brand" href="index.php"><img src="<?php bloginfo('template_url');?>/img/core-img/logo.png" alt=""></a>

                       <!-- Navbar Toggler -->
                       <div class="classy-navbar-toggler">
                           <span class="navbarToggler"><span></span><span></span><span></span></span>
                       </div>

                       <!-- Menu -->
                       <div class="classy-menu">
                           <!-- Menu Close Button -->
                           <div class="classycloseIcon">
                               <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                           </div>
                           <!-- Nav Start -->
                        
                           
                           
                           <div class="classynav">
                           <?php 
                           wp_nav_menu(

                            array(
                                'theme_location' => 'top-menu',
                                'menu' => 'nav',
                                'container' => 'ul', 
                                'menu_class' => 'active',
                                'menu_class' => 'dropdown'
                            )

                        );?>   
                               

                               <!-- Search -->
                               <div class="search-btn ml-4">
                                   <i class="fa fa-search" aria-hidden="true"></i>
                               </div>

                               <!-- Book Now -->
                               <div class="book-now-btn ml-3 ml-lg-5">
                                   <a href="#">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                               </div>
                           </div>
                           <!-- Nav End -->
                       </div>
                   </nav>
               </div>
           </div>
       </div>
   </header>
   <!-- Header Area End -->
