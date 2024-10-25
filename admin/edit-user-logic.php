<?php
 require 'config/database.php';

if(isset($_POST['submit'])){
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = FILTER_VAR($_POST['firstname'],
    FILTER_SANITIZE_SPECIAL_CHARS);  
    $lastname = FILTER_VAR($_POST['lastname'],
    FILTER_SANITIZE_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];
    

    // validate input values
    if(!$firstname || !$lastname){
        $_SESSION['edit-user'] = "Invalid Form input on edit page.";
    }else{

        if($avatar['name']){

            $previous_avatar_path = '../assets/' . $previous_avatar_name;
            unlink($previous_avatar_path);

        }

        $time = time();
        $avatar_name = $time . $avatar['name'];
        $avatar_tmp_name = $avatar['tmp_name'];
        $avatar_destination_path = '../assets/' . $avatar_name;


        $allowed_files = ['png', 'jpg', 'jpeg'];
        $extention = explode('.', $avatar_name);
        $extention =  end($extention);

        if(in_array($extention, $allowed_files)){
            if($avatar['size'] < 1000000){

                move_uploaded_file($avatar_tmp_name, $avatar_destination_path);

            }else{
                $_SESSION['edit-user'] = "FIle to big. should be less than 2mb";
            }
           } else {
               $_SESSION['edit-user'] = "FIle should be png, jpg or jpeg";
           }
        }
    
    if(isset($_SESSION['edit-user'])){
       
        header('location:'. ROOT_URL .'admin/manage-users.php');
        die();

    }else{

        $avatar_to_insert = $avatar_name ?? $previous_avatar_name;

        $query = "UPDATE users SET firstname='$firstname', lastname='$lastname',
        avatar='$avatar_to_insert', is_admin=$is_admin WHERE id=$id LIMIT 1";
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

              