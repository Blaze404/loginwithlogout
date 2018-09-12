<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in or register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/index_styles.min.css">
</head>
<?php
echo "Hello World! Today is: ";
echo date('d - m - y');
?>
<body>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Log In or Register</h2>
                <p class="text-center">Yeah. You may Sign In, or you may create an account.</p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="login.php">LOG IN</a>
                <button class="btn btn-light tada animated" type="button" onclick="window.location='register.php'">REGISTER</button></div>
        </div>
    </div>

</body>

</html>