<?php


$email = $_POST['email'];
$password = $_POST['password'];


// Create connection
$conn = new mysqli(localhost, root, mysql, Reg_Demo);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





$sql = "INSERT INTO UserReg (email, password)
VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Record created. ";
    echo "Your email address is " . $email . " . <br> <b> You may login now </b>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>