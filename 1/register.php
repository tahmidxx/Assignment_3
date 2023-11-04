<?php
$mysqli = new mysqli("localhost", "root", "", "user_reg");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $mysqli->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email already exists. Please choose another email.";
        
        echo"<br><a href='index.html'>Register</a>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt->close();

        $stmt = $mysqli->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "Registration successful. <a href='index.html'>Login</a>";
        } else {
            echo "Error: Registration failed.";
        }

        $stmt->close();
    }
}

$mysqli->close();
?>
