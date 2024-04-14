<?php
 
 include 'partials/header.php';

?>


<section class="form_section">
    <div class="container form_section-container">
        <h2>Edit Posts</h2>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select>
                <option value="1">travel</option>
                <option value="1">Art</option>
                <option value="1">Science & Tecnology</option>
                <option value="1">travel</option>
                <option value="1">travel</option>
            </select>
            <textarea rows="10" placeholder="body"></textarea>
            <div class="form_control inline">
                <input type="checkbox" id="is_featured" checked>
                <label for="is_featured">Feutured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Change thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>




<!-------End of Buttons section-------------->
<?php
 
 include '../partials/footer.php';

?>
