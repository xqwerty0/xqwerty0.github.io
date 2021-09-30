<?php
require_once ('config.php'); // For storing username and password.

session_start();
?>

<!-- HTML code for Bootstrap framework and form design -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Sign in</title>
</head>
<body>
    <div class="background"></div>
    <div class="filter"></div>
    <div class="main">
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Küçük Birader<br>Demo Giriş Sayfası</h2>
        
        <div class="form1"><input name="Username" type="username" id="inputUsername" placeholder="Kullanıcı Adı" required autofocus></div>
        
        <div class="form1"><input name="Password" type="password" id="inputPassword" placeholder="Şifre" required></div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Beni Hatırla
            </label>
        </div>
        <button class="bn632-hover bn25" name="Submit" value="Login" type="submit">Giriş</button>
        <p>v0.1 | 2021</p>


        <?php

        /* Check if login form has been submitted */
        if(isset($_POST['Submit'])){

            // Rudimentary hash check
            $result = password_verify($_POST['Password'], $Password);

            /* Check if form's username and password matches */
            if( ($_POST['Username'] == $Username) && ($result === true) ) {

                /* Success: Set session variables and redirect to protected page */
                $_SESSION['Username'] = $Username;

                $_SESSION['Active'] = true;
                header("location:index.php");
                exit;

            } else {
                ?>
                <!-- Show an error alert -->
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Hatalı</strong> Giriş
                </div>
                <?php
            }
        }
        ?>

    </form>
    <span class="right"><img src="img/eye.svg" alt="Hintio Template Feature"></span>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
</body>
</html>
