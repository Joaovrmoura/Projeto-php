
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
                    <a href="dashboard.php">
                        <ion-icon name="newspaper-outline"></ion-icon>
                        <h5>Add Post</h5>
                    </a>
                </li>
                
                <li>
                    <a href="dashboard.php">
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
                    <a href="manage-users.php" class="active">
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
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane doe</td>
                        <td>Jane223</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Ernensto GArcia</td>
                        <td>achiever</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Daniel Vinyo</td>
                        <td>daniel</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                </tbody>
             </table>
        </main>
    </div>
</section>



<?php
 
 include '../partials/footer.php';

?>
