<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }
        .result {
            font-size: 1.2em;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $number1 = 1;
        $number2 = 2;
        $operator = '+';

        echo "<div class='result'>";
        switch ($operator) {
            case '+':
                echo "plus: " . ($number1 + $number2);
                break;
            case '-':
                echo "minus: " . ($number1 - $number2);
                break;
            case '*':
                echo "times: " . ($number1 * $number2);
                break;
            case '/':
                if ($number2 != 0) {
                    echo "divided: " . ($number1 / $number2);
                } else {
                    echo "Cannot divide by zero";
                }
                break;
            default:
                echo "Invalid operator";
                break;
        }
        echo "</div>";
        ?>

        <?php
        $week_day = 3;

        echo "<div class='result'>";
        switch ($week_day) {
            case 1:
                echo "شنبه <br> Saturday";
                break;
            case 2:
                echo "یکشنبه <br> Sunday";
                break;
            case 3:
                echo "دوشنبه <br> Monday";
                break;
            case 4:
                echo "سه‌شنبه <br> Tuesday";
                break;
            case 5:
                echo "چهارشنبه <br> Wednesday";
                break;
            case 6:
                echo "پنجشنبه <br> Thursday";
                break;
            case 7:
                echo "جمعه <br> Friday";
                break;
            default:
                echo "Invalid day";
        }
        echo "</div>";
        ?>

        <?php
        $z = 'o';

        echo "<div class='result'>";
        switch (strtolower($z)) {
            case 'a':
            case 'u':
            case 'o':
            case 'i':
            case 'e':
                echo "حرف $z صدا دار است";
                break;
            default:
                echo "حرف $z صدا دار نیست";
        }
        echo "</div>";
        ?>
    </div>
</body>
</html>
