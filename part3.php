<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 70px;
            height: 100px;
            border: 1px solid #444;
            margin: 5px;
            padding: 5px;
            text-align: center;
            display: inline-block;
        }

        .box img {
            width: 70px;
            height: 70px;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 1; $i <= 8; $i++) { ?>
        <div class="box">
            <img src="./book.jpg" alt="image">
            <strong>کتاب</strong>
        </div>
    <?php
        if ($i == 4) {
            print "<br>";
        }
    }
    ?>
</body>

</html>