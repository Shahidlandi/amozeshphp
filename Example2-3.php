<html>
<body>
<?php
    $price = 25000;
    $num = 2;
    $precent = 10;
    $total = $price * $num;
    $discount = $total * $precent /100;
    $paybal = $total - $discount ;
?>
<table border=1px>
    <tr>
        <td>Total</td>
        <td>Discount</td>
        <td>Paybale</td>
    <tr>   
    <tr>
        <td><?php print $total?></td>
        <td><?php print $discount?></td>
        <td><?php print $paybal?></td>
    <tr>   
</table>
</body>
</html>