<?php

require 'config/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ícones da página -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300,400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/index.css">
    <title>PHP & MySQL blog Application</title>

</head>   
<body>
    <nav>
        <div class="container nav_container">
            <!-- Link do logo -->
            <a href="<?= ROOT_URL ?>" class="nav_logo">Egator</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>Contact.php">Contact</a></li>
                <!--<li><a href="signin.html">Signin</a></li>-->
                <li class="nav_profile">
                    <div class="avatar">
                        <img src=" <?= ROOT_URL ?>assets/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <!-- Links para o dashboard e logout -->
                        <li><a href="<?= ROOT_URL ?>admin/dashboard.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Botões de abertura e fechamento do menu de navegação -->
            <button id="open_nav-btn"><ion-icon name="menu-outline" class="i"></ion-icon></button>
            <button id="close_nav-btn"><ion-icon name="close-outline"></ion-icon></button>
        </div>
    </nav>
    <script src="<?= ROOT_URL ?>js/script.js"></script>
    <!------nav menu -->
