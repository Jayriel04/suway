<?php
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$email = $_POST['email'];
$fullName = $_POST['fullName'];

if ($password !== $confirmPassword) {
    die("Passwords do not match");
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, email, full_name) 
        VALUES ('$username', '$hashedPassword', '$email', '$fullName')";

if ($conn->query($sql) === TRUE) {
    echo "Sign Up successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
