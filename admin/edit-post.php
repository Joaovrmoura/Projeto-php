<?php
 
 include 'partials/header.php';

 $category_query = "SELECT * FROM categories";
 $categories = mysqli_query($connection, $category_query);


 if(isset($_GET['id'])){
    
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query =  "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);

 }else{
    header('location:'. ROOT_URL . 'admin/');
 }
?>


<section class="form_section">
    <div class="container form_section-container">
        <h2>Edit Post</h2>
        <form action="<?= ROOT_URL ?>admin/edit-post-logic.php" enctype="multipart/form-data"
        method="POST">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <input type="hidden" name="previous_thumbnail_name" value="<?= $post['thumbnail'] ?>">
            <input type="text" name="title" value="<?= $post['title'] ?>" placeholder="Title">
            <select name="category">
                <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <textarea rows="10" name="body" placeholder="body"><?= $post['body']?></textarea>
            <div class="form_control inline">
                <input type="checkbox"  name="is_featured" id="is_featured" value="1" checked>
                <label for="is_featured">Feutured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Change thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" name="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>




<!-------End of Buttons section-------------->
<?php
 
 include '../partials/footer.php';

?>
