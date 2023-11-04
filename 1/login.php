<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "user_reg");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $mysqli->prepare("SELECT username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($username, $hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
        } else {
            echo "Invalid password. <a href='index.html'>Login</a>";
        }
    } else {
        echo "Email not found. <a href='index.html'>Login</a>";
    }

    $stmt->close();
}

$mysqli->close();
?>
