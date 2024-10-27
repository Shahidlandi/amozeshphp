<table border=1px>
    <tr>
        <td> name </td>
        <td> author </td>
    </tr>
<?php
    $book = array (
        array('name'=>'php', 'author'=>'Mina'),
        array('name'=>'html', 'author'=>'Ali'),
        array('name'=>'css', 'author'=>'Mehrshad')
    );



foreach($book as $row){?>

    <tr>
        <td><?= print $row['name'] ?></td>
        <td><?= print $row['author'] ?></td>
    </tr>
     
    
<?php }
?>

</table>