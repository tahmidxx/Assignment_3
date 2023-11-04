<!DOCTYPE html>
<html>

<head>
    <title>User Dashboard</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            color: #fff;
            background-color:cornflowerblue;
            margin: 0;
            padding: 20px 0;
            width: 100%;
        }
        header{
            width: 100%;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            padding: 20px;
            margin: 20px;
        }

        .welcome-text {
            font-size: 18px;
            margin-top: 20px;
            color: #333;
        }

        .header-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #34db;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .header-button:hover {
            background-color: #258cd1;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Your Dashboard</h1>
        <a class="header-button" href="logout.php">Logout</a>
    </header>
    
    <div class="container">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            $username = htmlspecialchars($_SESSION['username']);
            echo "<p class='welcome-text'>Hello, $username!</p>";
            echo "<p class='welcome-text'>This is your user dashboard. You can access and manage your account here.</p>";
        } else {
            header('Location: index.html');
        }
        ?>
    </div>
</body>

</html>
