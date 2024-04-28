<?php
 require 'config/database.php';

if(isset($_POST['submit'])){
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = FILTER_VAR($_POST['firstname'],
    FILTER_SANITIZE_SPECIAL_CHARS);  
    $lastname = FILTER_VAR($_POST['lastname'],
    FILTER_SANITIZE_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);

    // validate input values
    if(!$firstname || !$lastname){
        $_SESSION['edit-user'] = "Invalid Form input on edit page.";
    }else{
        $query = "UPDATE users SET firstname='$firstname', lastname='$lastname',
        is_admin=$is_admin WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if(mysqli_errno($connection)){
            $_SESSION['adit-user'] = "Failed to Update user.";
        }else{
            $_SESSION['edit-user-success'] = "User $firstname $lastname update sucessfully";
        }
    }
}
header('location:' .ROOT_URL .'admin/manage-users.php');
die();

              