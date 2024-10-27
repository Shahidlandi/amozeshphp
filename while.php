<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>salam</h1>
    <table border=1px>
        <tr>
            <td>Row</td>
            <td>Year</td>
            <td>student</td>
        </tr>

        <?php
            $row = 1;
            $year =1390;
            $student=500;

            while ($year <= 1400) {
                print "
                    <tr>
                        <td>$row</td>
                        <td>$year</td>
                        <td>$student</td>
                    </tr>
                ";
                $year ++;
                $row ++;
            }

        ?>


    </table>
</body>
</html>