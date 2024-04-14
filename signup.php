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
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>   
<body>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Sign Up</h2>
        <div class="alert_message error">
            <p>This is an error Message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="UserName">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <input type="password" placeholder="Confirme Password">
            <div class="form_control">
                <label for="avatar">User Avatar</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Sign up</button>
            <small>Alredy have an account <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>


</body>
</html>