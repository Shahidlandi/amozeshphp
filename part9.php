<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./part9.css">
    <?php
    $sub = [
        '1' => 'تاریخی',
        '2' => 'معاصر',
        '3' => 'علمی'
    ];

    $books = [
        ['bname' => 'حافظ', 'cover' => 'book4.jpg'],
        ['bname' => 'فردوسی', 'cover' => 'book3.jpg'],
        ['bname' => 'فردوسی', 'cover' => 'book2.jpg'],
        ['bname' => 'حافظ', 'cover' => 'book.jpg']
    ];
    ?>
</head>

<body>
    <?php foreach ($sub as $sid => $sname) { ?>
        <a class="sub" href=""><?= $sname ?></a>
    <?php } ?>
    <br><br>
    <h3> لیست کتاب ها </h3>
    <div class="content">
        <?php
        foreach ($books as $book) { ?>
            <div class="box">
                <img src="file/<?= $book['cover'] ?>">
                <strong><?= $book['bname'] ?></strong>
            </div>
        <?php } ?>
    </div>
</body>

</html>