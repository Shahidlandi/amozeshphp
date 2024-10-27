<html>
<body>
<?php
    $a = 5;
    $b =8;
    $c = "5";

    print "a = $a <br>";
    print "b = $b <br>";
    print "c = $c <br>";
?>
<table border=1px>
    <tr>
        <td>operate</td>
        <td>Resualt</td>
    </tr>
    <tr>
        <td>==</td>
        <td><?php print "a" == "A";?></td>
    </tr>
    <tr>
        <td>===</td>
        <td><?php print "a" === "A";?></td>
    </tr>
    <tr>
        <td>!=</td>
        <td><?php print $a != $b;?></td>
    </tr>
    <tr>
        <td>!==</td>
        <td><?php print $a !== $c;?></td>
    </tr>
    <tr>
        <td><></td>
        <td><?php print $a <> $b;?></td>
    </tr>
    <tr>
        <td>></td>
        <td><?php print $a > $b;?></td>
    </tr>
    <tr>
        <td><</td>
        <td><?php print $a < $b;?></td>
    </tr>
    <tr>
        <td>>=</td>
        <td><?php print 5 >= 5;?></td>
    </tr>
    <tr>
        <td><=</td>
        <td><?php print 5 <= 5;?></td>
    </tr>
</table>
</body>
</html>