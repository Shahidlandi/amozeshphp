<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .zoj{
            background-color: blue;
        }
        .fard{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <table border="1px"> 
        <?php for ($a=1; $a <= 10 ; $a++) {?>
          <?php if($a %2==0){?>
            <tr>
               <?php 
               print"<td class='zoj'>$a</td>"; 
               continue;
               ?>

            </tr>
          <?php }{?> 
            <tr>
               <?php print"<td class='fard'>$a</td>" ?>
            </tr>
         <?php } ?>
        <?php } ?>
        
    </table>
</body>
</html>