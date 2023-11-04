<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels</title>
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

        h1 {
            text-align: center;
            background-color: mediumslateblue;
            color: white;
            padding: 20px;
            margin: 0;
            width: 26%;
            border-radius: 5px;
        }

        form {
            text-align: center;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 5px;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #900;
            color: white;
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff8B11;
        }

        p {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Count Vowels in a String</h1>
    <form method="post">
        <h2><label for="inputString">Enter a string</label></h2>
        <input type="text" name="inputString" required>
        <input type="submit" value="Count Vowels">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            function countVowels($inputString) {
                $inputString = strtolower($inputString);
                
                $vowels = ['a', 'e', 'i', 'o', 'u'];
                
                $count = 0;
                
                for ($i = 0; $i < strlen($inputString); $i++) {
            
                    if (ctype_alpha($inputString[$i]) && in_array($inputString[$i], $vowels)) {
                        $count++;
                    }
                }
                
                echo "<p>Number of vowels: $count</p>";
            }

            $input = $_POST["inputString"];
            countVowels($input);
        }
    ?>
</body>
</html>
