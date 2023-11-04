<!DOCTYPE html>
<html>

<head>
    <title>Array Operations</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding-left: 10px;
            display: flex;
            flex-direction: column;
            align-items: left;
            justify-content: left;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            padding: 20px;
            margin: 0 auto;
        }

        h1 {
            font-size: 24px;
            margin: 0;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $numbers = array(2, 4, 6, 8, 10);

        echo "<h1>Array Operations</h1>" ."<br>";

        echo "i. The first element of the array is: " . $numbers[0] . "<br>";

        $lastIndex = count($numbers) - 1;
        echo "ii. The last element of the array is: " . $numbers[$lastIndex] . "<br>";

        $newValue = 12;
        $numbers[] = $newValue;
        echo "iii. Added $newValue to the end of the array. Updated array: [" . implode(", ", $numbers) . "]<br>";

        $sum = array_sum($numbers);
        echo "iv. The sum of all elements in the array is: $sum<br>";
        ?>
    </div>
</body>

</html>
