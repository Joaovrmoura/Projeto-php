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
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>   
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.php" class="nav_logo">Egator</a>
            <ul class="nav_items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <!--<li><a href="signin.html">Signin</a></li>-->
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="./assets/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav-btn"><ion-icon name="menu-outline" class="i"></ion-icon></button>
            <button id="close_nav-btn"><ion-icon name="close-outline"></ion-icon></button>
        </div>
    </nav>
    <!------nav menu -->


    <section class="singlepost">
        <div class="container singlepost_container">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing </h2>
            <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./assets/avatar4.jpg" alt="">
                    </div>
                    <div class="post_author-info">
                        <h5>By: john Mils</h5>
                        <small>June 10, 2024 - 10:34</small>
                    </div>
                 </div>
            <div class="singlepost_thumbnail">
                <img src="./assets/blog33.jpg" alt="">
            </div>     
               <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatu
                r omnis quo excepturi, provident voluptatem libero. Dignissimos te
                mporibus impedit placeat soluta ex nulla minus pariatur, enim qu
                od ipsum consequuntur quos consequatur quibusdam voluptate ac
                cusantium tenetur voluptatem alias officia fugiat corrupti doloremque!
               </p>     
               <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatu
                r omnis quo excepturi, provident voluptatem libero. Dignissimos te
                mporibus impedit placeat soluta ex nulla minus pariatur, enim qu
                od ipsum consequuntur quos consequatur quibusdam voluptate ac
                cusantium tenetur voluptatem alias officia fugiat corrupti doloremque!
               </p>         
        </div>
    </section>
<!------End of Single_post -->





    <footer>
        <div class="footer_socials">
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
            <a href=""><i class="fab fa-github"></i></a>
            <a href=""><i class="fas fa-envelope"></i></a>
            <a href=""><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="container footer_container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="#">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Science and Technologie</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Numbers</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy; VtWave </small>
        </div>
    </footer>



    <script src="./js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>