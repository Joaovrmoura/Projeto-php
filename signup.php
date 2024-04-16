<?php
   require 'config/constants.php';
   
   $firstname = $_SESSION['signup-data']['firstname'] ?? null;
   $lastname = $_SESSION['signup-data']['lastname'] ??null;
   $username = $_SESSION['signup-data']['username'] ??null;
   $email = $_SESSION['signup-data']['email'] ??null;
   $createpassword = $_SESSION['signup-data']['createpassword'] ??null;
   $confirmpassword = $_SESSION['signup-data']['confirmpassword'] ??null;
  //delete

?>



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
    <link rel="stylesheet" href="<?php ROOT_URL ?>css/index.css">
    <title>Document</title>
</head>   

<body>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Sign Up</h2>

        <?php if(isset($_SESSION['signup'])): ?>
            <div class="alert_message error">
            <p>
                <?= $_SESSION['signup']; 
                unset($_SESSION['signup']);
                ?>
            </p>
        </div>

        <?php endif ?>

        <form action="<?php  ROOT_URL ?>signup-logic.php"
         enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" value="<?php $firstname ?>" placeholder="First Name">
            <input type="text" name="lastname"  value="<?php $lastname ?>" placeholder="Last Name">
            <input type="text" name="username" value="<?php $username ?>" placeholder="UserName">
            <input type="email" name="email" value="<?php $email ?>" placeholder="Email">
            <input type="password" name="createpassword" value="<?php $createpassword ?>"
             placeholder="Create Password">
            <input type="password" name="confirmpassword" value="<?php $confirmpassword ?>" 
            placeholder="Confirm Password">
            <div class="form_control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Sign up</button>
            <small>Alredy have an account <a href="<?php ROOT_URL ?>signin.php">Sign In</a></small>
        </form>
    </div>
</section>


</body>
</html>