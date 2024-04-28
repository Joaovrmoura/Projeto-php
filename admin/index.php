<?php
 
 include 'partials/header.php';

?>

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
                    <a href="index.php" class="active">
                        <ion-icon name="create-outline"></ion-icon>
                        <h5>Manage Post</h5>
                    </a>
                </li>
                <?php  if(isset($_SESSION['user_is_admin'])) : ?>
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
                <?php  endif  ?>
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
                        <th>Delete</th>    
                    </tr>
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

<?php
 
 include '../partials/footer.php';

?>
