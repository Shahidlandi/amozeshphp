<table border="1px">
    <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Phone</td>
    </tr>
    <?php

    // $book = array(
    //     array('name' => 'ali', 'age' => 12, 'phone' => '091353708'),
    //     array('name' => 'naser', 'age' => 13, 'phone' => '0915308'),
    //     array('name' => 'mojtaba', 'age' => 14, 'phone' => '053708')
    // );
    $book = [
        ['name' => 'ali', 'age' => 12, 'phone' => '091353708'],
        ['name' => 'naser', 'age' => 13, 'phone' => '0915308'],
        ['name' => 'mojtaba', 'age' => 14, 'phone' => '053708']];
    foreach ($book as $row) { ?>
        <tr>
            <?php
            foreach ($row as  $value) { ?>
                <td><?= $value ?> </td>
            <?php } ?>
        </tr>

    <?php }
    ?>
</table>