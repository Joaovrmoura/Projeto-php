<?php
 
 include 'partials/header.php';

 $query = "SELECT * FROM categories ORDER BY title";
 $categories = mysqli_query($connection, $query);
?>

<section class="dashboard">
    <?php if(isset($_SESSION['add-category-success'])) : ?>
        <div class="alert_message success container">
            <p>
               <?= $_SESSION['add-category-success'];
               unset($_SESSION['add-category-success']); 
               ?> 
            </p>
        </div>       
    <?php elseif(isset($_SESSION['add-category'])) : ?>
        <div class="alert_message error container">
            <p>
               <?= $_SESSION['add-category'];
               unset($_SESSION['add-category']); 
               ?> 
            </p>
        </div>   
    <?php elseif(isset($_SESSION['edit-category'])) : ?>
        <div class="alert_message error container">
            <p>
               <?= $_SESSION['edit-category'];
               unset($_SESSION['edit-category']); 
               ?> 
            </p>
        </div> 
    <?php elseif(isset($_SESSION['edit-category-success'])) : ?>
        <div class="alert_message success container">
            <p>
               <?= $_SESSION['edit-category-success'];
               unset($_SESSION['edit-category-success']); 
               ?> 
            </p>
        </div>   
        <?php elseif(isset($_SESSION['delete-category-success'])) : ?>
        <div class="alert_message success container">
            <p>
               <?= $_SESSION['delete-category-success'];
               unset($_SESSION['delete-category-success']); 
               ?> 
            </p>
        </div>    
    <?php endif  ?>

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
                    <a href="index.php">
                        <ion-icon name="newspaper-outline"></ion-icon>
                        <h5>Add Post</h5>
                    </a>
                </li>
                
                <li>
                    <a href="index.php">
                        <ion-icon name="create-outline"></ion-icon>
                        <h5>Manage Post</h5>
                    </a>
                </li>
                <?php  if(isset($_SESSION['user_is_admin'])) :  ?>
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
                    <a href="manage-categories.php" class="active">
                       <ion-icon name="reader-outline"></ion-icon>
                        <h5>Manage Categories</h5>
                    </a>
                </li>
                <?php endif ?>
            </ul>
        </aside>

        <main>
             <h2>Manage categories</h2>
             <?php if(mysqli_num_rows($categories) > 0) : ?>
             <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                    <tr>
                        <td><?= $category['title'] ?></td>
                        <td>
                         <!--aqui eu passo o id para ser utilizado o metodo get -->
                        <a href="<?= ROOT_URL ?>admin/edit-category.php?id=<?= $category['id'] ?>"
                         class="btn sm">Edit</a>
                        </td>
                        <td>
                        <a href="<?= ROOT_URL ?>admin/delete-category.php?id=<?= $category['id'] ?>"
                         class="btn sm danger">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
             </table>
             <?php else :  ?>
                <div class="alert_message error">
                   <?= "No categories" ?> 
                </div>
        </main>
         <?php endif ?>
    </div>
</section>
<?php
 
 include '../partials/footer.php';

?>
