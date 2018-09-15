<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/success_styles.min.css">
</head>

<body>
    <div class="newsletter-subscribe">
        <div class="container">
            <div class="intro">
                
<?php


$email = $_POST['email'];
$password = $_POST['password'];


// Create connection
$conn = new mysqli(localhost, root, mysql, Reg_Demo);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/// Email check

$user_check_query = "SELECT * FROM UserReg WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      echo "<h2 class='text-center'>User Already Exists!</h2>";
      echo("<p class='text-center'>Already registered with that email ID</p>");
    }
  }
  else
  {
    $sql = "INSERT INTO UserReg (email, password)
    VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
    echo("<h2 class='text-center'>User Created</h2>");
    echo("<p class='text-center'>Your login details are: " .$email ."<br>You may log in now</p>");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }




$conn->close();
?>
                
            </div>
            <form class="form-inline" method="post">
                <div class="form-group">
                <div class="buttons"><a class="btn btn-primary" role="button" href="login.php">LOG IN</a></div>
                </div>
            </form>
        </div>
    </div>
    <p><a href="login.php">Here's something</a></p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>