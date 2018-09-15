<?php
include 'assets/server.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register_styles.min.css">
</head>
<script type="text/javascript">
    var checkboth = function(){
        if (document.getElementById('password').value ==
          document.getElementById('password-repeat').value && document.getElementById('checkboxcheck').checked == true && document.getElementById('password').value != ""){
                        document.getElementById('buttondisen').disabled = false;
        }
        else{
                        document.getElementById('buttondisen').disabled = true;

        }
    }
</script>

<body>
    <div class="register-photo" style="background-color:rgb(230,233,235);">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="success.php">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="name"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" id="password" onkeyup='checkboth();'></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" id="password-repeat" onkeyup='checkboth();'></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkboxcheck" onclick="checkboth(this);">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button id="buttondisen" class="btn btn-primary btn-block" type="submit" disabled="disabled">Sign Up</button></div><a href="login.php" class="already">You already have an account? Login here.</a>
                <div style="text-align: center; font-family: calibri; font-size: 12px;"><span id='message'>Make sure the passwords match and then click the button above</span></div>
            </form>
        </div>
    </div>
    <?php
    include 'assets/footer.php';
    ?>
</body>

</html>