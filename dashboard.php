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


<section class="dashboard">
    <div class="container dashboard_container">

        <button id="show_sidebar-btn" class="sidebar_toggle">
            <ion-icon name="arrow-forward-outline"></ion-icon>
        </button>
        <button id="hide_sidebar-btn" class="sidebar_toggle">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </button>

        <aside>
            <ul>
                <li>
                    <a href="add-post.php">
                        <ion-icon name="newspaper-outline"></ion-icon>
                        <h5>Add Post</h5>
                    </a>
                </li>
                
                <li>
                    <a href="dashboard.php" class="active">
                        <ion-icon name="create-outline"></ion-icon>
                        <h5>Manage Post</h5>
                    </a>
                </li>
                <li>
                    <a href="add-user.php">
                        <ion-icon name="person-add-outline"></ion-icon>
                        <h5>Add User</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-users.php">
                        <ion-icon name="people-outline"></ion-icon>
                        <h5>Manage User</h5>
                    </a>
                </li>
                <li>
                    <a href="add-category.php">
                        <ion-icon name="copy-outline"></ion-icon>
                        <h5>Add Category</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-categories.php" >
                       <ion-icon name="reader-outline"></ion-icon>
                        <h5>Manage Categories</h5>
                    </a>
                </li>
            </ul>
        </aside>

        <main>
             <h2>Manage users</h2>
             <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Wild Life</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Wild Life</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Wild Life</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Wild Life</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                </tbody>
             </table>
        </main>
    </div>
</section>

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