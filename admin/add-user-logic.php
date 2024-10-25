<?php
 require 'config/database.php';

 
if(isset($_POST['submit'])){
    $firstname = FILTER_VAR($_POST['firstname'],
    FILTER_SANITIZE_SPECIAL_CHARS);  
    $lastname = FILTER_VAR($_POST['lastname'],
    FILTER_SANITIZE_SPECIAL_CHARS);
    $username = FILTER_VAR($_POST['username'],
    FILTER_SANITIZE_SPECIAL_CHARS);
    $email = FILTER_VAR($_POST['email'],
    FILTER_SANITIZE_SPECIAL_CHARS);
    $createpassword = FILTER_VAR($_POST['createpassword'],
    FILTER_SANITIZE_SPECIAL_CHARS);
    $confirmpassword = FILTER_VAR($_POST['confirmpassword'],
    FILTER_SANITIZE_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

 // validate input values
 if(!$firstname){
    $_SESSION['add-user'] = "Please enter your first name";
}
elseif(!$lastname){

    $_SESSION['add-user'] = "Please enter your last name";
}
elseif(!$username){
    
    $_SESSION['add-user'] = "Please enter your User name";
}
elseif(!$email){
    
    $_SESSION['add-user'] = "Please enter your Email";

}
elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
    
    $_SESSION['add-user'] = "Please password should be 8+ characters";

}
elseif(!$avatar['name']){

    $_SESSION['add-user'] = "Please enter your avatar";

}else{

    if($createpassword !== $confirmpassword){

        $_SESSION['add-user'] = "password do not math";

    }else{

        $hashed_password = password_hash($createpassword, 
        PASSWORD_DEFAULT);

        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $user_check_result = mysqli_query($connection, $user_check_query);


        if(mysqli_num_rows($user_check_result) > 0){
            $_SESSION['add-user'] = "USER NAME Already existe";
        }else{
            // work
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
                    $_SESSION['add-user'] =  "File size too big. should be smoller";
            }
            }else{

                $_SESSION['add-user'] =  "file should be png, jpg or jpeg";
            }
        }
    }
}

if(isset($_SESSION['add-user'])){
    $_SESSION['signup-data'] = $_POST;
    header('location:' . ROOT_URL .'admin/add-user.php');
    die();
    
}else{

    $insert_user_query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname',
     username='$username', email='$email', password='$hashed_password', avatar='$avatar_name', is_admin=0";
     $insert_user_result = mysqli_query($connection, $insert_user_query);

    if(!mysqli_errno($connection)){
        $_SESSION['add-user-success'] = "Registration sucessful!";
        header('location:'. ROOT_URL . 'admin/manage-users.php');
        die();
    }
}

} else{
header('location:'. ROOT_URL .'admin/manage-users.php');
die();
}
              