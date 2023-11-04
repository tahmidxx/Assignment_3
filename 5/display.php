<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            background-color: cornflowerblue;
            color: white;
            padding: 15px;
            margin: 0;
            width: 510px;
            border-radius: 5px;
        }

        .container {
            width: 500px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: cornflowerblue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a;
        }

        p {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
    <div class="container">
        <form method="post">
            <label for="num1">Enter the first number:</label>
            <input type="text" name="num1" required>
            <br>
            <label for="num2">Enter the second number:</label>
            <input type="text" name="num2" required>
            <br>
            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];


            if (is_numeric($num1) && is_numeric($num2)) {

                $sum = $num1 + $num2;
                $difference = $num1 - $num2;
                $product = $num1 * $num2;

                if ($num2 != 0) {
                    $quotient = $num1 / $num2;
                } else {
                    $quotient = "Division by zero is not allowed.";
                }

                echo "<p>Sum: $sum</p>";
                echo "<p>Difference: $difference</p>";
                echo "<p>Product: $product</p>";
                echo "<p>Quotient: $quotient</p>";
            } else {
                echo "<p>Please enter valid numeric values.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
