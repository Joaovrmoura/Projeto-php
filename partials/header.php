<?php

require 'config/database.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icones da página-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300,400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release-pro/v4.0.0/css/solid.css">
    <link rel="stylesheet" href="<?php ROOT_URL ?>css/index.css">
    <title>PHP & MySQL blog Application</title>
</head>   
<body>
    <nav>
        <div class="container nav_container">
            <a href="<?php  ROOT_URL ?>index.php" class="nav_logo">Egator</a>
            <ul class="nav_items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="<?php ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?php ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?php ROOT_URL ?>Contact.php">Contact</a></li>
                <!--<li><a href="signin.html">Signin</a></li>-->
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="./assets/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="<?php ROOT_URL ?>admin/dashboard.php">Dashboard</a></li>
                        <li><a href="<?php ROOT_URL ?> logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav-btn"><ion-icon name="menu-outline" class="i"></ion-icon></button>
            <button id="close_nav-btn"><ion-icon name="close-outline"></ion-icon></button>
        </div>
    </nav>
    <!------nav menu -->
