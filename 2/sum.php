<!DOCTYPE html>
<html>

<head>
    <title>Sum of Even Numbers</title>
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
            height: 100vh;
        }

        form {
            text-align: center;
            margin: 0px auto;
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #F50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #f90;
        }

        p {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Sum of Even Numbers</h1>
    <form method="post">
        <h2><label for="numbers">Enter a list of numbers (comma-separated[,])</label></h2>
        <input type="text" name="numbers" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["numbers"];
        $numbers = explode(",", $input);
        $numbers = array_map('intval', $numbers);

        function sumEvenNumbers($arr) {
            $sum = 0;
            foreach ($arr as $number) {
                if ($number % 2 === 0) {
                    $sum += $number;
                }
            }
            return $sum;
        }

        $evenSum = sumEvenNumbers($numbers);
        echo "<p>Sum of even numbers in the array is: $evenSum</p>";
    }
    ?>
</body>

</html>
