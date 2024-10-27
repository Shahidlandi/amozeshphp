<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width: 70px;
            height: 100px;
            border: 1px solid #444;
            float: right;
            margin: 5px;
            padding: 5px;
            text-align: center;
        }
        .box img{
            width: 70px;
            height: 70px;
        }
    </style>
</head>
<body>
    <?php
    for ($a=1; $a <= 6 ; $a++) { ?>
    
    <div class="box">
        <img src="./book.jpg" alt="image">  
        <strong>کتاب</strong> 
    </div>
    <?php } ?>
</body>
</html>